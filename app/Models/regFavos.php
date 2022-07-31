<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regFavos extends Model
{
    use HasFactory;
    protected $table = "dummy_favorites";
    protected $fillable = ["user_id", "text", "screen_name", "created_at"];
}
