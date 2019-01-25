<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    //
    protected $fillable = ['image_dir', 'budget_id', 'status'];

    protected $table = 'imagenes';

    public function budget()
    {
      return $this->belongsTo('App\budget');
    }
}
