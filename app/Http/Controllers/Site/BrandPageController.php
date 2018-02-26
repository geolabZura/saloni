<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandPageController extends Controller
{
    protected $brand;

    public function __construct(){
        $this->brand = new Brand();
    }

    public function index(){
        $data['brands'] = $this->brand->all();
        return view('site.brand', $data);
    }

    public function singleBrand($id){
        $data['brand'] = $this->brand->where('id', $id)->firstOrFail();
    }
}
