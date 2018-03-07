<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestServiceCategoryEdit;
use App\Http\Requests\RequestServiceCategory;
use App\ServiceCategory;
use Illuminate\Http\Request;
use function view;

class ServiceCategoryController extends Controller
{
    protected $serviceCategory;

    public function __construct(){
        $this->serviceCategory = new ServiceCategory();
    }

    public function index(){
        $data['services'] = $this->serviceCategory->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.servicecategory.index', $data);
    }

    public function serviceAddPage(){
        return view('admin.pages.servicecategory.add');
    }

    public function serviceAdd(RequestServiceCategory $request){
        $message = [];
        $service = $this->serviceCategory->add($request);

        if($service) {
            $message['success'][] = "ServiceCategory Added SuccessFully!";
        }else{
            $message['error'][] = "ServiceCategory Not Added, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }

    public function serviceEditPage($id){
        $data['service'] = $this->serviceCategory->where('id', $id)->first();
        return view('admin.pages.servicecategory.edit', $data);
    }

    public function serviceEdit(RequestServiceCategory $request, $id){
        $current_item = $this->serviceCategory->where('id', $id)->first();
        $request->editId = $id;
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
