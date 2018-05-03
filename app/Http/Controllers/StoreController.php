<?php

namespace App\Http\Controllers;
use App\Store;
class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
      $stores = Store::all();
      return response()->json($stores);
    }

    //
}
