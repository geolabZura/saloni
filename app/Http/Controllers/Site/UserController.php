<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('site.login');
    }

    public function login(LoginRequest $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('admin.main');
        }else{
            $message['error'][] = 'Something Wrong Please Retry!';
            return redirect()->back()->with('message', $message);
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('site.main');
    }
}
