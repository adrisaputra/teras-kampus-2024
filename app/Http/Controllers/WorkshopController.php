<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class WorkshopController extends Controller
{
    ## Show Data
    public function index()
    {
        $title = "Lokakarya";
        return view('admin.workshop.index',compact('title'));
    }

    ## Get Data
    public function get_workshop_index(Request $request)
    {

        if ($request->ajax()) {
            $counter = 1;

            $workshop = Workshop::limit(10);

            return DataTables::of($workshop)
            ->addIndexColumn()
            ->addColumn('number', function () use (&$counter) {
                return $counter++;
            })
            ->addColumn('start_date', function ($v){
                return 'Mulai Tanggal : '.date('d M Y', strtotime($v->start_date)).' Sampai '.date('d M Y', strtotime($v->end_date));
            })
            ->addColumn('user', function ($v) {
                return $v->user ? $v->user->name : '';
            })
            ->addColumn('action', function ($v) {
                $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_workshop">
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
                'title' => 'Judul'
            ];

            if($action==="Simpan"){
                $rules = [
                    'title' => 'required'
                ];
            } else {
                $rules = [
                    'title' => 'required'
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
            $workshop = New Workshop();
            $workshop->fill($request->all());
            $workshop->user_id = Auth::user()->id;
            $workshop->save();
            
            activity()->log('Create Data Workshop');
            return response()->json(['success' => true,'message' => 'Tambah Data Berhasil']);
        }
    }

    ## Get Data
    public function edit(Request $request,$id)
    {
        if ($request->ajax()) {
            $workshop = Workshop::where('id',$id)->first();
            return response()->json(['success' => true,'data' => $workshop]);
        }
    }

    ## Edit Data
    public function update(Request $request, Workshop $workshop)
    {
        if ($request->ajax()) {
            $workshop->title = $request->title;
            $workshop->location = $request->location;
            $workshop->start_date = $request->start_date;
            $workshop->end_date = $request->end_date;
            $workshop->desc = $request->desc;
            $workshop->save();
    
            activity()->log('Edit Data Workshop With ID = '.$workshop->id);
            return response()->json(['success' => true,'message' => 'Ubah Data Berhasil']);
        }
    }

    ## Delete Data
    public function delete(Request $request, $workshop)
    {
        if ($request->ajax()) {
            $workshop = Workshop::where('id',$workshop)->first();
            $workshop->delete();
            activity()->log('Delete Data Workshop With ID = '.$workshop->id);
            return response()->json(['success' => true,'message' => 'Hapus Data Berhasil']);
        }
    }

}
