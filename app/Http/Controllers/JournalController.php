<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class JournalController extends Controller
{
    ## Show Data
    public function index()
    {
        $title = "Jurnal";
        return view('admin.journal.index',compact('title'));
    }

    ## Get Data
    public function get_journal_index(Request $request)
    {

        if ($request->ajax()) {
            $counter = 1;

            $journal = Journal::limit(10);

            return DataTables::of($journal)
            ->addIndexColumn()
            ->addColumn('number', function () use (&$counter) {
                return $counter++;
            })
            ->addColumn('created_at', function ($v){
                return date('d M Y', strtotime($v->created_at));
            })
            ->addColumn('user', function ($v) {
                return $v->user ? $v->user->name : '';
            })
            ->addColumn('action', function ($v) {
                $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_journal">
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

    public function validate(Request $request, $action)
    {
        if ($request->ajax()) {

            $attributes = [
                'title' => 'Judul',
                'cover' => 'Cover',
                'file' => 'File'
            ];

            if($action==="Simpan"){
                $rules = [
                    'title' => 'required',
                    'cover' => 'required|image|mimes:jpeg,png,jpg|max:5000',
                    'file' => 'mimes:pdf|max:5000'
                ];
            } else {
                $rules = [
                    'title' => 'required',
                    'cover' => 'cover|mimes:jpeg,png,jpg|max:5000',
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
            $journal = New Journal();
            $journal->fill($request->all());
            $journal->user_id = Auth::user()->id;
            
            if($request->cover){
                $journal->cover = '1'.time().'.'.$request->cover->getClientOriginalExtension();
                $request->cover->move(public_path('upload/journal'), $journal->cover);
            }

            if($request->file){
                $journal->file = '2'.time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path('upload/journal'), $journal->file);
            }

            $journal->save();
            
            activity()->log('Create Data Journal');
            return response()->json(['success' => true,'message' => 'Tambah Data Berhasil']);
        }
    }

    ## Get Data
    public function edit(Request $request,$id)
    {
        if ($request->ajax()) {
            $journal = Journal::where('id',$id)->first();
            return response()->json(['success' => true,'data' => $journal]);
        }
    }

    ## Edit Data
    public function update(Request $request, Journal $journal)
    {
        if ($request->ajax()) {
            $journal->title = $request->title;
            $journal->author = $request->author;
            $journal->publication_date = $request->publication_date;
            $journal->issn = $request->issn;
            $journal->doi = $request->doi;
            $journal->desc = $request->desc;

            
            if ($journal->cover && $request->file('cover') != "") {
                $cover_path = public_path() . '/upload/journal/' . $journal->cover;
                unlink($cover_path);
            }
    
            if($request->file('cover')){	
                $covername = '1'.time().'.'.$request->cover->getClientOriginalExtension();
                $request->cover->move(public_path('upload/journal'), $covername);
                $journal->cover = $covername;
            }
		
            if ($journal->file && $request->file('file') != "") {
                $file_path = public_path() . '/upload/journal/' . $journal->file;
                unlink($file_path);
            }
    
            if($request->file('file')){	
                $filename = '2'.time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path('upload/journal'), $filename);
                $journal->file = $filename;
            }
		
            $journal->save();
    
            activity()->log('Edit Data Journal With ID = '.$journal->id);
            return response()->json(['success' => true,'message' => 'Ubah Data Berhasil']);
        }
    }

    ## Delete Data
    public function delete(Request $request, $journal)
    {
        if ($request->ajax()) {
            $journal = Journal::where('id',$journal)->first();

            if ($journal->cover) {
                $cover_path = public_path() . '/upload/journal/' . $journal->cover;
                unlink($cover_path);
            }
        
            if ($journal->file) {
                $file_path = public_path() . '/upload/journal/' . $journal->file;
                unlink($file_path);
            }
        
            $journal->delete();
            activity()->log('Delete Data Journal With ID = '.$journal->id);
            return response()->json(['success' => true,'message' => 'Hapus Data Berhasil']);
        }
    }

}
