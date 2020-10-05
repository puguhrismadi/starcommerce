<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriproduk extends Model
{
    public function laptop_komputer(){
        return $this->hasOne('App\Kategoriproduk');
    }
}
