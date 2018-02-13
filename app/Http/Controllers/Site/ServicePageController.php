<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    protected $service;

    public function __construct(){
        $this->service = new Service();
    }

    public function index($id){
        $service = $this->service->where('id', $id)->first();
        $data['categories'] = [];
        foreach ($service->categories as $category){
            $data['categories'][] = $category;
        }
        $data['service_name'] = $service->title;
        return view('site.service', $data);
    }
}
