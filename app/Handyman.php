<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handyman extends Model
{
    protected $fillable = ['handy_id'];

    public function handy(){
        return $this->belongsTo('App\Handy','handy_id', 'id');
    }
}
