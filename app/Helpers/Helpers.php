<?php

namespace App\Helpers;

use App\Models\News;
use App\Models\Setting;   //nama model
use App\Models\Textbook;

class Helpers
{
    
    public static function setting()
    {
        $setting = Setting::find(1);
        return $setting;
    }
    
    public static function format_number($value)
    {
        $value = number_format($value,0,",",".");
        return $value;
    }
    
    public static function news()
    {
        $news = News::orderBy('id', 'DESC')->limit(5)->get();
        return $news;
    }
    
    public static function textbook()
    {
        $textbook = Textbook::orderBy('id', 'DESC')->limit(5)->get();
        return $textbook;
    }
    
}
