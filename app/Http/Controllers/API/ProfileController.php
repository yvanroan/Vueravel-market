<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\Profile\ProfileResource;
use App\Http\Resources\Profile\ProfileResourceCollection;
use Illuminate\Support\Facades\Auth; 
use App\Exceptions\UnauthorizedChangeException;
use Symfony\Component\HttpFoundation\Response;
use App\Constants\Message;
use Validator;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_profiles = User::all();
        return response()->success(Response::HTTP_ACCEPTED, null, (new ProfileResourceCollection($user_profiles))->hide(['id'])); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $profile)
    {
        return response()->success(Response::HTTP_ACCEPTED, null, (new ProfileResource($profile))->hide(['id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profile)
    {
        $validator = Validator::make($request->all(),
            [
                'username' => 'unique:users|max:13|min:3',
                'email' => 'email|unique:users',
        ]);   

        if ($validator->fails()) {
            return response()->error(Response::HTTP_UNPROCESSABLE_ENTITY, Message::VALIDATION_ERROR,$validator->errors());
        }

        $this->checkProfileOwner($profile);

        $profile->update($request->all());

        return response()->success(Response::HTTP_ACCEPTED, Message::SUCCESSFULL_UPDATE, [
            'username' => $profile->username,
            'firstname' => $profile->firstname,
            'lastname' => $profile->lastname,
        ]); 
    }

        public function checkProfileOwner(User $profile){
        if(Auth::id() != $profile->id){
            return Auth::id();
            throw new UnauthorizedChangeException;
        }
    }

}
