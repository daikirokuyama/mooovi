<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product
use View;

class RankingController extends Controller
{
    public $layout = "layouts.review_site";

    public function __construct()
    {
        $productRanks = Product::take(5)->get();
        View::share('ranking', $productRanks);
    }
}
