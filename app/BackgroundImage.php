<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackgroundImage extends Model
{
    protected $table='background_images';

    protected $fillable = [
        'position_name', 'image', 'created_at', 'update_at'
    ];

    public function edit($field_name, $file_path){
        $field = $this->where('position_name', $field_name)->first();

        if(!empty($field)){
            $field->update([
                'image'=>$file_path
            ]);

            return true;
        }

        return false;
    }
}
