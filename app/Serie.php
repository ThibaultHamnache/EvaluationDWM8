<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
  public $timestamps = false;
  public function state()
  {
     return $this->belongsTo('App\State');
  }

  public function categories()
  {
    return $this->belongsToMany('App\Category');
  }
}
