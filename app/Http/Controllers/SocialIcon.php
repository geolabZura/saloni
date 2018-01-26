<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialIcon extends Controller
{
    public function index(){
        return view('admin.pages.social.index');
    }
}
