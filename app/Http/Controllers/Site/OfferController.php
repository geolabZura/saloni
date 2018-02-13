<?php

namespace App\Http\Controllers;

use App\SpecialOffer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    protected $offer;

    public function __construct(){
        $this->offer = new SpecialOffer();
    }

    public function index($id){
        $data['offers'] = $this->offer->where('id', $id)->first();
        dd($data);
        return view('site.offer', $data);
    }
}
