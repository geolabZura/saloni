<?php

namespace App\Http\Controllers;

use App\Http\Requests\MapRequest;
use App\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    protected $map;
    
    public function __construct()
    {
        $this->map = new Map();
    }

    public function index()
    {
        $data['map'] = $this->map->first();
        return view('admin.pages.map.index', $data);
    }

    public function mapUpdate(Request $request){

        $map_response = $this->map->edit($request);
        $message = [];

        if($map_response){
            $message['success'][] = 'Map Information Uploaded Successfully!';
        }else{
            $message['error'][] = 'Something Wrong, Please Connect Site Administrator!';
        }

        return redirect()->back()->with('message', $message);
    }
}
