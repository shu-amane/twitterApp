<?php

namespace App\Http\Vendor;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Support\Facades\Log;

class Connection
{
    public function __construct(){
        Log::info(__CLASS__ . "開始");
    }

    public function connection() {
        Log::info(__FUNCTION__ . "開始" );
        $connection = new TwitterOAuth(
            env("CONSUMER_KEY"),
            env("CONSUMER_KEY_SECRET"),
            env("ACCESS_TOKEN"),
            env("CCESS_TOKEN_SECRET"));
        $connection -> setTimeouts (10, 15);
        Log::info(__FUNCTION__ . "終了");
        return $connection;
    }
}