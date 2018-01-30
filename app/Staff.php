<?php

namespace App;

use App\Events\Delete;
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

        if($response) {
            $upload_staff= $current_item->update([
                'image'=>$request->upload_image,
                'name' => $request->editName,
                'surname' => $request->editSurname,
                'position'=>$request->editPosition,
                'description'=>$request->editDescription
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

    public function remove($id){
        $deletable_staff = $this->find($id);

        if(!is_null($deletable_staff)){
            event(new Delete($deletable_staff->image));
            $deletable_staff->delete();

            return true;
        }

        return false;
    }
}
