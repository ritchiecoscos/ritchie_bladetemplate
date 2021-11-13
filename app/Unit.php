<?php

namespace App;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function merchandises(){
        return $this->hasOne('App\Merchandice');
    }  
}
