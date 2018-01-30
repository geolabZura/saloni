<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='staff';

    protected $fillable = [
        'image', 'name', 'surname', 'position', 'description', 'created_at', 'updated_at'
    ];

    public function add($request){
        $upload_staff = $this->create([
            'image'=>$request->upload_image,
            'name'=>$request->name,
            'surname'=>$request->surname,
            'position'=>$request->position,
            'description'=>$request->description
        ]);

        if($upload_staff){
            return true;
        }else{
            return false;
        }
    }

    public function edit($request, $response){
        $current_item = $this->where('id', $request->editId)->first();

        dd($request->upload_image);
        if($response) {
            $upload_staff= $current_item->update([
                'image'=>$request->upload_image,
                'name' => $request->editName,
                'surname' => $request->editSurname,
                'position'=>$request->position,
                'description'=>$request->description
            ]);
        }
        else{
            $upload_staff = $current_item->update([
                'name' => $request->editName,
                'surname' => $request->editSurname,
                'position'=>$request->editPosition,
                'description'=>$request->editDescription
            ]);
        }

        if($upload_staff){
            return true;
        }else{
            return false;
        }
    }

}
