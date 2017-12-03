<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
    *
    *
    */
    public function index()
    {
        
    }



    public function signup(Request $request)
    {

    	return response()->json(['message' => 'oka Sahak jan']);
    	
    	// $user  = new User([
    	// 	'name' => $request->name,
    	// 	'email'	=> $request->email,
    	// 	'password'	=> bcrypt($request->password),
    	// ]);
    	// $user->save();
    	// return response()->json(['message' => 'user created succesfuly'],201);
    }
}
