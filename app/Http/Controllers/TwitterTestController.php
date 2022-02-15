<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Vendor\CallTwitterApi;
use App\Http\Vendor\GetFavorites;

class TwitterTestController extends Controller
{
    // 投稿
    public function index(Request $request)
    {
        $t = new CallTwitterApi();
        $d = $t->serachTweets("APEX");
        return view('twitter', ['twitter' => $d]);
    }

    public function favorites(Request $request)
    {
        $favo = new GetFavorites;
        $result = $favo->favorites("gleipnil");
        // dd($result);
        return view("favo", ["favo" => $result]);
        // return view("favo", compact("result"));
    }
}
