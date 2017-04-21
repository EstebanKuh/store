<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name','price','category_id','amount','provider_id'
    ];

    
    public function providers(){
        return $this->hasOne('App\Provider');
    }
    
    public function sellers(){
        return $this->belongsTo('App\Seller');
    }
    
    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
