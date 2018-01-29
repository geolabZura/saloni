<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='staff';

    protected $fillable = [
        'image', 'name', 'surname', 'position', 'description', 'created_at', 'updated_at'
    ];


}
