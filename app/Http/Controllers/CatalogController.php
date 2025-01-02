<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class CatalogController extends Controller
{
   ## Show Data
   public function index(Request $request)
   {
       if($request->segment(1)=="textbook"){
            $title = "Buku Ajar";
            return view('admin.textbook.index',compact('title'));
       } elseif($request->segment(1)=="monograph"){
            $title = "Monograf";
            return view('admin.monograph.index',compact('title'));
       } elseif($request->segment(1)=="reference"){
            $title = "Referensi";
            return view('admin.reference.index',compact('title'));
       } elseif($request->segment(1)=="novel"){
            $title = "Novel";
            return view('admin.novel.index',compact('title'));
       }
   }

   ## Get Data
   public function get_catalog_index($type, Request $request)
   {

       if ($request->ajax()) {
           $counter = 1;

           $catalog = Catalog::where('type', $type)->limit(10);

           return DataTables::of($catalog)
           ->addIndexColumn()
           ->addColumn('number', function () use (&$counter) {
               return $counter++;
           })
           ->addColumn('publication_date', function ($v){
               return date('d-m-Y', strtotime($v->publication_date));
           })
           ->addColumn('user', function ($v) {
               return $v->user ? $v->user->name : '';
           })
           ->addColumn('action', function ($v) use ($type) {
                if($type=='textbook'){
                        $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_textbook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>';
                } elseif($type=='monograph'){
                        $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_monograph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>';
                } elseif($type=='reference'){
                        $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_reference">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>';
                } elseif($type=='novel'){
                        $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_novel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>';
                }
                $btn .= '<a href="#" onclick="deleteData('.$v->id.')" id="'.$v->id.'" class="warning confirm" data-toggle="tooltip" data-placement="top" title="Hapus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>';
                return $btn;
           })
           ->rawColumns(['cover','action'])->make(true);
       }
       
   }

   public function validation(Request $request, $action)
   {
       if ($request->ajax()) {

           $attributes = [
               'title' => 'Judul',
               'cover' => 'Cover',
               'selling_price' => 'Harga Jual (Rp)',
               'stock' => 'Stok Saat Ini',
               'file' => 'File'
           ];

           if($action==="Simpan"){
               $rules = [
                   'title' => 'required',
                   'selling_price' => 'required',
                   'stock' => 'required',
                   'cover' => 'image|mimes:jpeg,png,jpg|max:5000',
                   'file' => 'mimes:pdf|max:5000'
               ];
           } else {
               $rules = [
                   'title' => 'required',
                   'selling_price' => 'required',
                   'stock' => 'required',
                   'cover' => 'image|mimes:jpeg,png,jpg|max:5000',
                   'file' => 'mimes:pdf|max:5000'
               ];
           }
           
           $request->validate($rules, [],$attributes);
           
           return response()->json(['success' => true]);
       }
   }

   ## Save Data
   public function store(Request $request)
   {
       if ($request->ajax()) {
           $catalog = New Catalog();
           $catalog->fill($request->all());

           if($request->segment(1)=="textbook"){
                $catalog->type = 'textbook';
           } elseif($request->segment(1)=="monograph"){
                $catalog->type = 'monograph';
           } elseif($request->segment(1)=="reference"){
                $catalog->type = 'reference';
           } elseif($request->segment(1)=="novel"){
                $catalog->type = 'novel';
           }

           if($request->selling_price){
                $catalog->selling_price = str_replace(".", "", $request->selling_price);
           }

           if($request->stock){
                $catalog->stock = str_replace(".", "", $request->stock);
           }

           $catalog->user_id = Auth::user()->id;
           
           if($request->cover){
               $catalog->cover = '1'.time().'.'.$request->cover->getClientOriginalExtension();
               $request->cover->move(public_path('upload/catalog'), $catalog->cover);
           }

           if($request->file){
               $catalog->file = '2'.time().'.'.$request->file->getClientOriginalExtension();
               $request->file->move(public_path('upload/catalog'), $catalog->file);
           }

           $catalog->save();
           
           activity()->log('Create Data Catalog');
           return response()->json(['success' => true,'message' => 'Tambah Data Berhasil']);
       }
   }

   ## Get Data
   public function edit(Request $request,$id)
   {
       if ($request->ajax()) {
           $catalog = Catalog::where('id',$id)->first();
           return response()->json(['success' => true,'data' => $catalog]);
       }
   }

   ## Edit Data
   public function update(Request $request, Catalog $catalog)
   {
       if ($request->ajax()) {
           $catalog->category = $request->category;
           $catalog->title = $request->title;
           $catalog->author = $request->author;
           $catalog->publication_date = $request->publication_date;
           $catalog->desc = $request->desc;
           $catalog->url = $request->url;
           
           if($request->selling_price){
                $catalog->selling_price = str_replace(".", "", $request->selling_price);
           }

           if($request->stock){
                $catalog->stock = str_replace(".", "", $request->stock);
            }

           if ($catalog->cover && $request->file('cover') != "") {
               $cover_path = public_path() . '/upload/catalog/' . $catalog->cover;
               unlink($cover_path);
           }
   
           if($request->file('cover')){	
               $covername = '1'.time().'.'.$request->cover->getClientOriginalExtension();
               $request->cover->move(public_path('upload/catalog'), $covername);
               $catalog->cover = $covername;
           }
       
           if ($catalog->file && $request->file('file') != "") {
               $file_path = public_path() . '/upload/catalog/' . $catalog->file;
               unlink($file_path);
           }
   
           if($request->file('file')){	
               $filename = '2'.time().'.'.$request->file->getClientOriginalExtension();
               $request->file->move(public_path('upload/catalog'), $filename);
               $catalog->file = $filename;
           }
       
           $catalog->save();
   
           activity()->log('Edit Data Catalog With ID = '.$catalog->id);
           return response()->json(['success' => true,'message' => 'Ubah Data Berhasil']);
       }
   }

   ## Delete Data
   public function delete(Request $request, $catalog)
   {
       if ($request->ajax()) {
           $catalog = Catalog::where('id',$catalog)->first();

           if ($catalog->cover) {
               $cover_path = public_path() . '/upload/catalog/' . $catalog->cover;
               unlink($cover_path);
           }
       
           if ($catalog->file) {
               $file_path = public_path() . '/upload/catalog/' . $catalog->file;
               unlink($file_path);
           }
       
           $catalog->delete();
           activity()->log('Delete Data Catalog With ID = '.$catalog->id);
           return response()->json(['success' => true,'message' => 'Hapus Data Berhasil']);
       }
   }

}
