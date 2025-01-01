<?php

namespace App\Helpers;

use App\Models\Cart;
use App\Models\Catalog;
use App\Models\News;
use App\Models\RelatedLinks;
use App\Models\SellingMaster;
use App\Models\Setting;   //nama model
use Illuminate\Support\Facades\Auth;

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
    
    public static function count_cart()
    {
        
        $selling_master = SellingMaster::where('status','CART')->where('user_id',Auth::user()->id)->latest()->first();
        $count_cart = Cart::where('selling_master_id',$selling_master->id)->sum('qty');
            
        return $count_cart;
    }
    
    public static function cart()
    {
        
        $selling_master = SellingMaster::where('status','CART')->where('user_id',Auth::user()->id)->latest()->first();
        $cart = Cart::where('selling_master_id',$selling_master->id)->get();
            
        return $cart;
    }
    
}
