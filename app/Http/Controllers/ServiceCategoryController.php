<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestServiceEdit;
use App\Http\Requests\ServiceRequest;
use App\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ServiceCategoryController extends Controller
{
    protected $serviceCategory;

    public function __construct(){
        $this->serviceCategory = new ServiceCategory();
    }

    public function index(){
        $data['services'] = $this->serviceCategory->paginate(10);
        return view('admin.pages.service.index', $data);
    }

    public function serviceAdd(ServiceRequest $request){
        $message = [];
        $service = $this->serviceCategory->add($request);

        if($service) {
            $message['success'][] = "ServiceCategory Added SuccessFully!";
        }else{
            $message['error'][] = "ServiceCategory Not Added, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }

    public function serviceEdit(RequestServiceEdit $request){
        $message = [];
        $edited_service = $this->serviceCategory->edit($request);

        if($edited_service) {
            $message['success'][] = "ServiceCategory Uploaded SuccessFully!";
        }else{
            $message['error'][] = "ServiceCategory Not Uploaded, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }
    
    public function serviceDelete($id){
        $message =[];
        $deleted_service = $this->serviceCategory->remove($id);

        if($deleted_service){
            $message['success'][] = "ServiceCategory Deleted SuccessFully!";
        }else{
            $message['error'][] = "ServiceCategory Not Deleted, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }
}
