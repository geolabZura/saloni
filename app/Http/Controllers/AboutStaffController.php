<?php

namespace App\Http\Controllers;

use App\AboutStaff;
use Illuminate\Http\Request;

class AboutStaffController extends Controller
{
    public $about_staff;

    public function __construct(){
        $this->about_staff = new AboutStaff();
    }

    public function index(){
        $data['about_staff'] = $this->about_staff->first();
        return view('admin.pages.aboutstaff.index', $data);
    }

    public function aboutStaffEdit(Request $request){
        $update_about_staff_response = $this->about_staff->edit($request);
        $message = [];

        if($update_about_staff_response){
            $message['success'][] = 'About staff Information Uploaded Successfully!';
        }else{
            $message['error'][] = 'Something Wrong, Please Connect Site Administrator!';
        }

        return redirect()->back()->with('message', $message);
    }
}

