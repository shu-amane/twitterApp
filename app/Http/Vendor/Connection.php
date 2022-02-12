<?php

namespace App\Http\Vendor;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class Connection
{
    public function connection() {
        $connection = new TwitterOAuth(
            env("CONSUMER_KEY"),
            env("CONSUMER_KEY_SECRET"),
            env("ACCESS_TOKEN"),
            env("CCESS_TOKEN_SECRET"));
    
        $connection -> setTimeouts (10, 15);
        return $connection;
    }
}