<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $serviceCategory;

    public function __construct(){
        $this->serviceCategory = new Service();
    }

    public function index(){
        $data['services'] = $this->serviceCategory->all();
        return view('admin.pages.service.index', $data);
    }

    public function serviceAdd(ServiceRequest $request){
        $message = [];
        $service = $this->serviceCategory->add($request);

        if($service) {
            $message['success'][] = "Service Uploaded SuccessFully!";
        }else{
            $message['error'][] = "Service Not Uploaded, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }
}
