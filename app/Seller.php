<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'first_name','last_name'
    ];
    
    public function products(){
        return $this->belongsToMany('App\Product');
    }
}
