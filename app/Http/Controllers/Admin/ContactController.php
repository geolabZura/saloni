<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\RequestContact;
use App\Service;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public $contact;
    public $service;

    public function __construct(){
        $this->contact = new Contact();
        $this->service = new Service();
    }

    public function index(){
        $data['services'] = $this->service->take(6)->get();
        $data['contact'] = $this->contact->first();
        $data['service_id_array'] = [];

        if(!empty($data['contact'])) {
            foreach ($data['contact']->services as $service) {
                $data['service_id_array'][] = $service->id;
            }
        }

        return view('admin.pages.contact.index', $data);
    }

    public function contactUpdate(RequestContact $request){
        $exist_contact = $this->contact->find(1);

        if(!empty($exist_contact)) {
            $updated = $exist_contact->update([
                'city'=>!empty($request->city) ? $request->city : '',
                'telephone'=>!empty($request->telephone) ? $request->telephone : '',
                'mail'=>!empty($request->mail) ? $request->mail : '',
                'work_from'=>!empty($request->work_from) ? $request->work_from : '',
                'work_to'=>!empty($request->work_to) ? $request->work_to : ''
            ]);

            if (!empty($request->category)) {
                $exist_contact->services()->detach();
                $exist_contact->services()->attach($request->category);
            }

        }else {
            $updated = $this->contact->create([
                'city' => !empty($request->city) ? $request->city : '',
                'telephone' => !empty($request->telephone) ? $request->telephone : '',
                'mail' => !empty($request->mail) ? $request->mail : '',
                'work_from' => !empty($request->work_from) ? $request->work_from : '',
                'work_to' => !empty($request->work_to) ? $request->work_to : ''
            ]);

            if (!empty($request->category)) {
                $updated->services()->attach($request->category);
            }
        }

        if($updated){
            $message['success'][] = "Image Upload Successfully!";
        }else{
            $message['error'][] = "Something Wrong, Please Retry!";
        }

        return redirect()->back()->with('message', $message);
    }
}
