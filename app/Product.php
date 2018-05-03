<?php namespace App;
use App\Review;
use App\Store;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;
class Product extends Model {

    public function stores(){
      return $this->belongsToMany('App\Store');
    }
    public function reviews(){
      return $this->hasMany('App\Review');
    }
    public function getProducts(){
      return $this->products;
    }
    protected $fillable = [
      'title', 'brand', 'price', 'image', 'description', 'stores'
    ];
}
