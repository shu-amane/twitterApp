<?php

namespace App\Http\Vendor;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Http\Vendor\Connection;

class GetFavorites
{

    private $twitter;

    public function __construct()
    {
        $connection = new Connection();
        $this->twitter = $connection->connection();
    }

    // お気に入りを取得
    public function favorites(String $screenName)
    {
        $favo = [];
        $max_id = null;
        while(true){
            if($max_id === null){
                var_dump("最初通過");
                $favorites = $this->twitter->get("favorites/list", [
                    'screen_name' => $screenName,
                    'count' => 200,
                    // 'max_id' => $max_id
                ]);
            } else {
                var_dump("ループ通過");
                $favorites = $this->twitter->get("favorites/list", [
                    'screen_name' => $screenName,
                    'count' => 200,
                    'max_id' => $max_id
                ]);
            }
            $array = json_decode(json_encode($favorites), true);
            $last_key = array_key_last($array);
            if(isset($array[$last_key]["id_str"]) === false){
                var_dump("break通過");
                break;
            };
            // var_dump($last_key);
            // var_dump($array[$last_key]["id_str"]);
            // var_dump($array[$last_key]["id_str"]);
            // var_dump($max_id);
            // var_dump($array);
            $max_id = $array[$last_key]["id_str"] - 1;
            $favo[] = $array;
        // var_dump($favorites);
        }
        // var_dump($favo)
        return $favo;
    }
}