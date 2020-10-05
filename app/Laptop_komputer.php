<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop_komputer extends Model
{
    public function kategoriproduk(){
        return $this->belongsTo('App\Laptop_komputer');
    }
}
