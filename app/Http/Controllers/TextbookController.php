<?php

namespace App\Http\Controllers;

use App\Models\Textbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class TextbookController extends Controller
{
    ## Show Data
    public function index()
    {
        $title = "Buku Ajar";
        return view('admin.textbook.index',compact('title'));
    }

    ## Get Data
    public function get_textbook_index(Request $request)
    {

        if ($request->ajax()) {
            $counter = 1;

            $textbook = Textbook::limit(10);

            return DataTables::of($textbook)
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
            ->addColumn('action', function ($v) {
                $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_textbook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>';
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
                'category' => 'Kategori',
                'title' => 'Judul',
                'cover' => 'Cover',
                'file' => 'File'
            ];

            if($action==="Simpan"){
                $rules = [
                    'category' => 'required',
                    'title' => 'required',
                    'cover' => 'image|mimes:jpeg,png,jpg|max:5000',
                    'file' => 'mimes:pdf|max:5000'
                ];
            } else {
                $rules = [
                    'category' => 'required',
                    'title' => 'required',
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
            $textbook = New Textbook();
            $textbook->fill($request->all());
            $textbook->user_id = Auth::user()->id;
            
            if($request->cover){
                $textbook->cover = '1'.time().'.'.$request->cover->getClientOriginalExtension();
                $request->cover->move(public_path('upload/textbook'), $textbook->cover);
            }

            if($request->file){
                $textbook->file = '2'.time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path('upload/textbook'), $textbook->file);
            }

            $textbook->save();
            
            activity()->log('Create Data Textbook');
            return response()->json(['success' => true,'message' => 'Tambah Data Berhasil']);
        }
    }

    ## Get Data
    public function edit(Request $request,$id)
    {
        if ($request->ajax()) {
            $textbook = Textbook::where('id',$id)->first();
            return response()->json(['success' => true,'data' => $textbook]);
        }
    }

    ## Edit Data
    public function update(Request $request, Textbook $textbook)
    {
        if ($request->ajax()) {
            $textbook->category = $request->category;
            $textbook->title = $request->title;
            $textbook->author = $request->author;
            $textbook->publication_date = $request->publication_date;
            $textbook->desc = $request->desc;

            if ($textbook->cover && $request->file('cover') != "") {
                $cover_path = public_path() . '/upload/textbook/' . $textbook->cover;
                unlink($cover_path);
            }
    
            if($request->file('cover')){	
                $covername = '1'.time().'.'.$request->cover->getClientOriginalExtension();
                $request->cover->move(public_path('upload/textbook'), $covername);
                $textbook->cover = $covername;
            }
		
            if ($textbook->file && $request->file('file') != "") {
                $file_path = public_path() . '/upload/textbook/' . $textbook->file;
                unlink($file_path);
            }
    
            if($request->file('file')){	
                $filename = '2'.time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path('upload/textbook'), $filename);
                $textbook->file = $filename;
            }
		
            $textbook->save();
    
            activity()->log('Edit Data Textbook With ID = '.$textbook->id);
            return response()->json(['success' => true,'message' => 'Ubah Data Berhasil']);
        }
    }

    ## Delete Data
    public function delete(Request $request, $textbook)
    {
        if ($request->ajax()) {
            $textbook = Textbook::where('id',$textbook)->first();

            if ($textbook->cover) {
                $cover_path = public_path() . '/upload/textbook/' . $textbook->cover;
                unlink($cover_path);
            }
        
            if ($textbook->file) {
                $file_path = public_path() . '/upload/textbook/' . $textbook->file;
                unlink($file_path);
            }
        
            $textbook->delete();
            activity()->log('Delete Data Textbook With ID = '.$textbook->id);
            return response()->json(['success' => true,'message' => 'Hapus Data Berhasil']);
        }
    }

}
