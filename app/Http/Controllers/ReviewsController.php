<?php

namespace App\Http\Controllers;
use App\Review;
class ReviewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index(){
      $review = Review::all();
      return response()->json($review);
    }

    //
}
