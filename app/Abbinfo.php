<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abbinfo extends Model
{
  protected $fillable = ['user_id', 'city'];

  public function user(){
      return $this->belongsTo('App\User','user_id', 'id');
  }
}