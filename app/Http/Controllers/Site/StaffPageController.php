<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffPageController extends Controller
{
    protected $staff;

    public function __construct(){
        $this->staff = new Staff();
    }

    public function allStaff(){
        $data['staffs'] = $this->staff->all();
        return view('site.allstaff', $data);
    }

    public function singleStaff($id){
        $data['staff'] = $this->staff->where('id', $id)->first();
        return view('site.singlestaff', $data);

        $d = new \Imagick();
    }
}
