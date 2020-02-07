<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Profile\ProfileResource;
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
		    return response()->json(['error'=>$validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
		}

		$input = $request->all();  
		$input['password'] = bcrypt($input['password']);
		$user = User::create($input); 
		$data['token'] =  $user->createToken('vueravelmarkettoken')->accessToken;
		return response()->json(['data'=>$data], Response::HTTP_CREATED); 
	}
  
   
	public function login(){ 
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
		   $user = Auth::user(); 
		   dd();
		   $success['token'] =  $user->createToken('vueravelmarkettoken')-> accessToken; 
		    return response()->json(['success' => $success], $this-> successStatus); 
		}
		else{
			return response()->json(['error'=>'Unauthorised'], Response::HTTP_UNAUTHORIZED); 
		} 
	}
	  
	public function getProfile() {
		$user = Auth::user();
		return response()->json(['data' => new ProfileResource($user)], Response::HTTP_OK); 
	}
} 
