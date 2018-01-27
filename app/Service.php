<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service_category';

    protected $fillable = [
        'name', 'price', 'created_at', 'updated_at'
    ];

    public function add($service){
        $added_service = $this->create([
            'name'=>$service->name,
            'price'=>$service->price
        ]);

        return $added_service;
    }
}
