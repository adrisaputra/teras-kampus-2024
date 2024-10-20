<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use App\Models\Textbook;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $slider = Slider::get();
        $news = News::orderBy('id', 'DESC')->limit(6)->get();
        $textbook = Textbook::orderBy('id', 'DESC')->limit(5)->get();
        return view('web.home', compact('slider','news','textbook'));
    }
}
