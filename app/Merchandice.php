<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandice extends Model
{
    //
    public function unit(){
        return $this->belongsTo('App\Unit');        
        }
    public function category(){
        return $this->belongsTo('App\Category');          
    }
}
