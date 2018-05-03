<?php

namespace App\Http\Controllers;
use App\Product;
use App\Product_Store;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function index()
    {
      $products = Product::all();
      return response()->json($products);
    }
    public function show($id){
      $product = Product::find($id);
      $product->reviews = $product->reviews;
      $product->stores = $product->stores;
      return response()->json($product);
    }
    public function create(Request $request){
      $product = new Product;
      $product->title = $request->input('title');
      $product->brand = $request->input('brand');
      $product->price = $request->input('price');
      $product->image = $request->input('image');
      $product->description = $request->input('description');
      $time = Carbon::now();
      $product->created_at = $time;
      $product->save();

      foreach ($request->input("stores") as $store)
      {
          $productStore= new Product_Store;
          $productStore->store_id = $store;
          $productStore->product_id = $product->id;
          //Model::insert($productStore);
          //$productStore->save();
          DB::table('product_store')->insert([
            'product_id'=> $productStore->product_id,
            'store_id'=> $productStore->store_id,
            "created_at"=>date("Y-m-d H:i:s"),
            "updated_at"=>date("Y-m-d H:i:s")
            ]);
      }
      return response()->json([
        "success" => true
      ]);
    }
}
