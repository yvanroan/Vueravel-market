<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Profile\ProfileResource;
use App\Constants\Message;
use Validator;

class AuthController extends Controller {
	  
	public function register(Request $request) {
		$validator = Validator::make($request->all(),
			[
				'username' => 'required|unique:users|max:13|min:3',
				'firstname' => 'required',
				'lastname' => 'required',
		        'email' => 'required|email|unique:users',
		        'password' => 'required',  
		        'c_password' => 'required|same:password', 
		]);   

		if ($validator->fails()) {
		    return response()->error(Response::HTTP_UNPROCESSABLE_ENTITY, Message::VALIDATION_ERROR,$validator->errors());
		}

		$input = $request->all();  
		$input['password'] = bcrypt($input['password']);
		$user = User::create($input);
		return response()->success(Response::HTTP_CREATED, Message::SUCCESSFULL_AUTH, [
			'username' => $input['username'] ,
			'firstname' => $input['firstname'] ,
			'lastname' => $input['lastname'] ,
			'token' => $user->createToken('vueravelmarkettoken')->accessToken
		]);
	}
  
   
	public function login(){ 
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
		   $user = Auth::user();
		    return response()->success(Response::HTTP_ACCEPTED, Message::SUCCESSFULL_AUTH, [
		   		'username' => $user->username,
				'firstname' => $user->firstname,
				'lastname' => $user->lastname,
				'token' => $user->createToken('vueravelmarkettoken')->accessToken
			]); 
		}
		else{
			return response()->error(Response::HTTP_UNAUTHORIZED, Message::CREDENTIALS_ERROR, null);
		} 
	}
	  
	public function getProfile() {
		$user = Auth::user();
		return response()->success(Response::HTTP_ACCEPTED, null, (new ProfileResource($user))->hide(['id'])); 
	}
} 
