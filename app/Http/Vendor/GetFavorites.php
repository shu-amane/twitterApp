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
        // $favo = [];
        // $max_id = -1;
        // while(true){
            $favorites = $this->twitter->get("favorites/list", [
                'screen_name' => $screenName,
                'count' => 200
                // if ($max_id != -1){
                //     'max_id' => $max_id = -1
                // } else {
                //     'max_id' => $max_id
                // }
            ]
            // $favo[] = $favorites;
            // $max_id =
        );
        // var_dump($favorites);
        return $favorites;
    }
}