<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Law;
use App\Models\News;
use App\Models\User;
use App\Helpers\Helpers;

class HomeController extends Controller
{
    ## Show Data
    public function index()
    {
        $title = "Dashboard";
        $news = News::count();
        $user = User::count();
		return view('admin.home',compact('title','news','user'));
    }
    
}
