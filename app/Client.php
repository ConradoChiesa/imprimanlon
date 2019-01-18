<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // Campos que permito enviar en un request
    public $fillable = ['name', 'address', 'email', 'phone'];

}
