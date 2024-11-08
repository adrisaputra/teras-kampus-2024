<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    ## Show Data
    public function index(Request $request)
    {
        $page = Page::where('menu',  $request->segment(1))->first();
        $title =  $page->title;
        return view('admin.page.index', compact('title', 'page'));
    }

    public function validation(Request $request)
    {
        if ($request->ajax()) {

            $request->validate([
                'text' => 'string',
                'image' => 'max:2000',
            ]);
    
            return response()->json(['success' => true]);
        }
    }

    
    ## Edit Data
    public function update(Request $request, Page $page)
    {
        if ($request->ajax()) {
            $page->text = $request->text;

            if ($page->image && $request->file('image') != "") {
                $image_path = public_path() . '/upload/page/' . $page->image;
                unlink($image_path);
            }
    
            if($request->file('image')){	
                $filename = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/page'), $filename);
                $page->image = $filename;
            }

            $page->save();
    
            activity()->log('Edit Data Page With ID = '.$page->id);
            return response()->json(['success' => true,'message' => 'Ubah Data Berhasil']);
        }
    }


}
