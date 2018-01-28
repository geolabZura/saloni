<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    protected $fillable = [
        'image', 'title', 'created_at', 'updated_at'
    ];

    public function categories(){
        return $this->belongsToMany(ServiceCategory::class,
            'service_category_base',
            'category_id',
            'service_id');
    }
}
