<?php

namespace App\Helpers;

use App\Models\Catalog;
use App\Models\News;
use App\Models\RelatedLinks;
use App\Models\Setting;   //nama model

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
        $textbook = Catalog::where('type','textbook')->orderBy('id', 'DESC')->limit(5)->get();
        return $textbook;
    }
    
    public static function related_links()
    {
        $related_links = RelatedLinks::orderBy('id', 'DESC')->limit(10)->get();
        return $related_links;
    }
    
}
