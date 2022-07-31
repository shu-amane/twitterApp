<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Vendor\CallTwitterApi;
use App\Http\Vendor\GetFavorites;
// use Illuminate\Support\Facades\DB;
use App\Models\regFavos;

class TwitterTestController extends Controller
{
    // 投稿確認（削除予定）
    public function index(Request $request)
    {
        $t = new CallTwitterApi();
        $d = $t->serachTweets("APEX");
        return view('twitter', ['twitter' => $d]);
    }

    //favo取得確認（削除予定）
    public function favorites(Request $request)
    {
        $favo = new GetFavorites;
        $result = $favo->favorites("naente_dev");
        return view("favo", ["favo" => $result]);
    }

    //DB情報取得確認（削除予定）
    public function DBtest(Request $request)
    {
        $items = DB::select('select * from dummy_users');
        return view("DBtest", ["items" => $items]);
    }

    public function regFavo(Request $request)
    {
        $favo = new GetFavorites;
        $results = $favo->favorites("naente_dev");
        foreach ($results as $result)
        {
            regFavos::create([
                "user_id" => 1,
                "text" => $result["text"],
                "screnn_name" => $result["user"]["screen_name"],
                "created_at" => NOW()
            ]);
        }
        return view("regFavo");
    }
}
