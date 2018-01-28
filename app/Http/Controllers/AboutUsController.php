<?php

namespace App\Http\Controllers;

use App\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    protected $about_us;

    public function __construct(){
        $this->about_us = new AboutUs();
    }

    public function index(){
        $data['about_us'] = $this->about_us->first();
        return view('admin.pages.aboutus.index', $data);
    }

    public function aboutUsEdit(Request $request){

        $update_about_us_response = $this->about_us->edit($request);
        $message = [];

        if($update_about_us_response){
            $message['success'][] = 'About Us Information Uploaded Successfully!';
        }else{
            $message['error'][] = 'Something Wrong, Please Connect Site Administrator!';
        }

        return redirect()->back()->with('message', $message);
    }
}
