<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $table = 'maps';

    protected $fillable = [
        'lang', 'lat', 'hint', 'balloon'
    ];

    public function edit($request)
    {
        $map_info = $this->where('id',1)->first();

        if(is_null($request->lang)){
            $request->lang = '';
        }
        if(is_null($request->lat)){
            $request->lat = '';
        }
        if(is_null($request->hint)){
            $request->hint = '';
        }
        if(is_null($request->balloon)){
            $request->balloon = '';
        }

        if(!empty($map_info)){
            $update_info = $map_info->update([
                'lang'=>$request->lang,
                'lat'=>$request->lat,
                'hint'=>$request->hint,
                'balloon'=>$request->balloon
            ]);
        }else{
            $update_info = $this->create([
                'lang'=>$request->lang,
                'lat'=>$request->lat,
                'hint'=>$request->hint,
                'balloon'=>$request->balloon
            ]);
        }

        if($update_info){
            return true;
        }else{
            return false;
        }
    }
}
