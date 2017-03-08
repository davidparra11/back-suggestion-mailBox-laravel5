<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'person';
 
    protected $fillable = ['name', 'email', 'mobile', 'suggest'];
 
    protected $guarded = ['id'];
}
