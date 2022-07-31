<?php

namespace App\Http\Vendor;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Http\Vendor\Connection;
use Illuminate\Support\Facades\Log;

/**
 * favoritesを取得する関数
 *
 * @param screenName
 * @return favo
 */
class GetFavorites
{

    private $twitter;

    public function __construct()
    {
        Log::info(__CLASS__ . "開始");
        $connection = new Connection();
        $this->twitter = $connection->connection();
    }

    // お気に入りを取得
    public function favorites(String $screenName)
    {
        Log::info(__FUNCTION__ . "開始");
        $favo = [];
        $max_id = null;
        while(true){
            if($max_id === null){
                $favorites = $this->twitter->get("favorites/list", [
                    'screen_name' => $screenName,
                    'count' => 200,
                ]);
            } else {
                $favorites = $this->twitter->get("favorites/list", [
                    'screen_name' => $screenName,
                    'count' => 200,
                    'max_id' => $max_id
                ]);
            }
            $array = json_decode(json_encode($favorites), true);
            $last_key = array_key_last($array);
            if(isset($array[$last_key]["id_str"]) === false){
                break;
            };
            $max_id = $array[$last_key]["id_str"] - 1;
            $favo = array_merge($favo, $array);
        }
        Log::info(__FUNCTION__ . "終了");
        Log::info(__CLASS__ . "終了");
        return $favo;
    }
}