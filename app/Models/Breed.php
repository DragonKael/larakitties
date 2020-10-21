<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'breed'
    ];
    //relacion, una raza tiene mucho gatos
    public function cats(){
        return $this->hasMany('App\Models\Cat');
    }
}
