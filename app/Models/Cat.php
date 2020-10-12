<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'breed_id',
        'name',
        'date_of_birth',
        'gender',
        'photo'
    ];

    //relacion, un gato a una raza
    public function breed(){
        return $this->belongsTo('App\Models\Breed');
    }
}
