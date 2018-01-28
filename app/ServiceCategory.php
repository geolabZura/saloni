<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'service_category';

    protected $fillable = [
        'name', 'price', 'created_at', 'updated_at'
    ];

    public function services(){
        return $this->belongsToMany(Service::class,
            'service_category_base',
            'category_id',
            'service_id'
            );
    }

    public function add($service){
        $added_service = $this->create([
            'name'=>$service->name,
            'price'=>$service->price
        ]);

        return $added_service;
    }

    public function edit($service){
        $editable_service = $this->where('id', $service->editId)->first();

        if(!is_null($editable_service)) {
            $edited_service = $editable_service->update([
                'name' => $service->editName,
                'price' => $service->editPrice
            ]);

            return $edited_service;
        }

        return false;
    }

    public function remove($id){
        $deletable_service = $this->where('id', $id)->first();

        if(!is_null($deletable_service)){
            $deletable_service->delete();

            return true;
        }

        return false;
    }
}
