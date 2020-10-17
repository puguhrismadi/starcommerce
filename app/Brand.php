<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function laptop_komputer(){
        return $this->hasMany("App\Laptop_komputer");
    }
    public function hardware_software(){
        return $this->hasMany("App\Brand");
    }
}
