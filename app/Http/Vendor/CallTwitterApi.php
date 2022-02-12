<?php

namespace App\Http\Vendor;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Http\Vendor\Connection;

class callTwitterApi
{

    private $t;

    public function __construct()
    {
        $connection = new Connection();
        $this->t = $connection->connection();
    }

    // ツイート検索
    public function serachTweets(String $searchWord)
    {
        $d = $this->t->get("search/tweets", [
            'q' => $searchWord,
            'count' => 3,
         ]);

        return $d->statuses;
    }
}