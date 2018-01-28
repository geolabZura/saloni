<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutStaff extends Model
{
    protected $table='about_staff';

    protected $fillable = [
        'title', 'description', 'created_at', 'update_at'
    ];

    public function edit($request){
        $about_us_info = $this->where('id',1)->first();

        if(is_null($request->title)){
            $request->title = '';
        }
        if(is_null($request->description)){
            $request->description = '';
        }

        if(!empty($about_us_info)){
            $upadet_info = $about_us_info->update([
                'title'=>$request->title,
                'description'=>$request->description
            ]);
        }else{
            $upadet_info = $this->create([
                'title'=>$request->title,
                'description'=>$request->description
            ]);
        }

        if($upadet_info){
            return true;
        }else{
            return false;
        }
    }
}
