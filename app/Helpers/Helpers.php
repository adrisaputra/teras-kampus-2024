<?php

namespace App\Helpers;

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
        $value = number_format($value,0,",",".");;
        return $value;
    }
    
}
