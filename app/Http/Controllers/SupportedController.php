<?php

namespace App\Http\Controllers;

use App\Models\Supported;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SupportedController extends Controller
{
    ## Show Data
    public function index()
    {
        $title = "Support";
		return view('admin.supported.index',compact('title'));
    }

    ## Get Data
    public function get_supported_index(Request $request)
    {

        if ($request->ajax()) {
            $counter = 1;

            $supported = Supported::limit(10);

            return DataTables::of($supported)
            ->addIndexColumn()
            ->addColumn('number', function () use (&$counter) {
                return $counter++;
            })
            ->addColumn('image', function ($v){
                $url_image = asset('upload/supported/'.$v->image);
                $image = '<a href='.$url_image.' target="_blank">'.$v->image.'</a>';
                return $image;
            })
            ->addColumn('action', function ($v) {
                $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_supported">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>';
                $btn .= '<a href="#" onclick="deleteData('.$v->id.')" id="'.$v->id.'" class="warning confirm" data-toggle="tooltip" data-placement="top" title="Hapus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>';
                return $btn;
            })
            ->rawColumns(['image','action'])->make(true);
        }
        
    }

    public function validation(Request $request, $action)
    {
        if ($request->ajax()) {

            if($action==="Simpan"){
                $request->validate([
                    'name' => 'required',
                    'image' => 'required|image|mimes:jpg,png,jpeg|max:2000'
                ]);
            } else {
                $request->validate([
                    'name' => 'required',
                    'image' => 'image|mimes:jpg,png,jpeg|max:2000'
                ]);
            }
    
            return response()->json(['success' => true]);
        }
    }

    ## Save Data
	public function store(Request $request)
    {
        if ($request->ajax()) {
            $supported = New Supported();
            $supported->fill($request->all());

            if($request->image){
                $supported->image = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/supported'), $supported->image);
            }

            $supported->save();
            
            activity()->log('Create Data Supported');
            return response()->json(['success' => true,'message' => 'Tambah Data Berhasil']);
        }
    }

    ## Get Data
    public function edit(Request $request,$id)
    {
        if ($request->ajax()) {
            $supported = Supported::where('id',$id)->first();
            return response()->json(['success' => true,'data' => $supported]);
        }
    }

    ## Edit Data
    public function update(Request $request, Supported $supported)
    {
        if ($request->ajax()) {
            
            $supported->name = $request->name;

            if ($supported->image && $request->file('image') != "") {
                $image_path = public_path() . '/upload/supported/' . $supported->image;
                unlink($image_path);
            }
    
            if($request->file('image')){	
                $imagename = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/supported'), $imagename);
                $supported->image = $imagename;
            }
		
            $supported->save();
    
            activity()->log('Edit Data Supported With ID = '.$supported->id);
            return response()->json(['success' => true,'message' => 'Ubah Data Berhasil']);
        }
    }

    ## Delete Data
    public function delete(Request $request, $supported)
    {
        if ($request->ajax()) {
            $supported = Supported::where('id',$supported)->first();

            if ($supported->image) {
                $image_path = public_path() . '/upload/supported/' . $supported->image;
                unlink($image_path);
            }
       
            $supported->delete();
            activity()->log('Delete Data Supported With ID = '.$supported->id);
            return response()->json(['success' => true,'message' => 'Hapus Data Berhasil']);
        }
    }

}
