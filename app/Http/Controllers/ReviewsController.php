<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Review;

class ReviewsController extends RankingController
{
    public function create($id)
    {
        $product = Product::find($id);
        $review = new Review();
        return view('reviews.create')->with(array('product' => $product, 'review' => $review));
    }

    public function store($id, Request $request)
    {
        Review::create([
          'nickname'   => $request->nickname,
          'rate'       => $request->rate,
          'review'     => $request->review,
          'product_id' => $id
        ]);
        return redirect('/');
    }
}
