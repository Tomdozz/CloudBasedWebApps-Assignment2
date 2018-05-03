<?php namespace app;
use App\Store;
use App\Product;
use Illuminate\Database\Eloquent\Model;
class Product_Store extends Model{
  //Each store has many products
  //and every product has many stores
  public function stores()
  {
    return $table->hasMany('App/Store');
  }
  public function products()
  {
    return $table->hasMany('App/Product');
  }
}
