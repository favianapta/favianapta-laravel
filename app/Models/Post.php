<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Post extends Model
{
    private static $email="favianapta@gmail.com";

    public static function getEmail()
    {
        return self::$email;
    }

    // private static $notelp="+62 xxxx";
    // public static function getNotelp()
    // {
    //     return self::$notelp;
    // }

    public static function getNotelp()
    {
        $data = collect(['+62 xxxx']);
        return $data->first();
    }
}
