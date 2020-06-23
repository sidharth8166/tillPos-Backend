<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Mail;
class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
            'phone'=> 'required'
        ]);

        $user = new user();
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->contact = $phone;
        $user->save();

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'token' => $token
        ], 201);
    }

    public function login(Request $request)
    {
        $this->validate($request , [
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $credentials = $request->only('email' , 'password');
        
        try{
            if(!$token = JWTAuth::attempt($credentials))
            {
                return response()->json(
                    ['error' => 'Invalid credentials']
                , 401);
            }
        }
        catch(JWTException $e)
        {
            return response()->json([
                'error'=>'could not create token'
            ],500);
        }
        return response()->json(
            ['token' => $token]
            ,200);
    }

    public function getUser()
    {
        $user = JWTAuth::parseToken()->toUser();

        return response()->json([
            'user' => $user
        ]);
    }

    public function logout(Request $request)
    {
        $token = $request->token;
        JWTAuth::setToken($token)->invalidate();
        return response()->json([
            'callback' => 'done'
        ],200);
    }

    public function changePassword(Request $request)
    {
        $user = JWTAuth::parseToken()->toUser();

        $this->validate($request , [
            'password'=> 'required|min:8'
        ]);
        $update = user::where('id' , $user->id)->first();
        $password = $request->input('password');
        $update->password = $password;
        $update->save();

        if($update)
        {
            return response()->json([
                'callBack' => "success"
            ],200);
        }
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request , [
            'name'=> 'required',
            'email' => 'required|email',
            'contact' => 'required'
        ]);

        $user = JWTAuth::parseToken()->toUser();
        $details = user::where('id' , $user->id)->first();
        $details->name = $request->input('name');
        $details->email = $request->input('email');
        $details->contact = $request->input('contact');
        $details->save();

        return response()->json([
            'callBack' => "success",
        ],200);
    }
}
