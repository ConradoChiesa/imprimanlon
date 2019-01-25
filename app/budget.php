<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class budget extends Model
{
    //
    protected $fillable = ['title', 'description', 'slug', 'status'];

    public function imagenes()
    {
      return $this->hasMany('App\images');
    }
}
