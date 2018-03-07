<?php

namespace App\Http\Controllers;

use App\Events\Image;
use App\Http\Requests\RequestStaff;
use App\Http\Requests\RequestStaffEdit;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public $staff;

    public function __construct(){
        $this->staff = new Staff();
    }

    public function index(){
        $data['staffs'] = $this->staff->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.staff.index', $data);
    }

    public function staffAddPage(){
        return view('admin.pages.staff.add');
    }

    public function staffAdd(RequestStaff $request){
        $file = $request->file('image');
        $message = [];

        if(file_exists($file)){
            $image_path = event(new Image($file));
            $request['upload_image'] = $image_path[0];
            $uploaded_staff = $this->staff->add($request);
        }

        if($uploaded_staff){
            $message['success'][] = "Staff Info Uploaded Successfully!";
        }else{
            $message['error'][] = "Something Wrong, Please Retry!";
        }
        return redirect()->back()->with('message', $message);
    }

    public function staffEditPage($id){
        $data['staff'] = $this->staff->where('id', $id)->first();
        return view('admin.pages.staff.edit', $data);
    }

    public function staffEdit(RequestStaffEdit $request, $id){
        $current_item = $this->staff->where('id', $id)->first();
        $request->editId = $id;
        $file = $request->file('image');
        $message = [];

        if(!empty($current_item)){

            if(file_exists($file)) {

                $image_path = event(new Image($file));
                $request['upload_image'] = $image_path[0];
                $uploaded_staff = $this->staff->edit($request, true);

                if ($uploaded_staff) {
                    $message['success'][] = "Staff Info Uploaded Successfully!";
                }else{
                    $message['error'][] = 'Something Wrong, Please Retry!';
                }

            }elseif(!empty($request->readonly_edit_image)){

                $uploaded_staff = $this->staff->edit($request, false);

                if ($uploaded_staff) {
                    $message['success'][] = "Service Uploaded Successfully!";
                }else{
                    $message['error'][] = 'Something Wrong, Please Retry!';
                }
            }else{
                $message['error'][] = 'Something Wrong, Please Retry!';
            }
        }else{
            $message['error'][] = 'Something Wrong, Please Retry!';
        }

        return redirect()->back()->with('message', $message);
    }

    public function staffDelete($id){
        $message = [];
        $deleted_staff = $this->staff->remove($id);

        if($deleted_staff){
            $message['success'][] = "Staff Info Deleted Successfully!";
        }else{
            $message['error'][] = "Staff Info Do Not Deleted, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }
}
