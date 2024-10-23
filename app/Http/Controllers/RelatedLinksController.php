<?php

namespace App\Http\Controllers;

use App\Models\RelatedLinks;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RelatedLinksController extends Controller
{
    ## Show Data
    public function index()
    {
        $title = "Link Terkait";
		return view('admin.related_link.index',compact('title'));
    }

    ## Get Data
    public function get_related_link_index(Request $request)
    {

        if ($request->ajax()) {
            $counter = 1;

            $related_link = RelatedLinks::limit(10);

            return DataTables::of($related_link)
            ->addIndexColumn()
            ->addColumn('number', function () use (&$counter) {
                return $counter++;
            })
            ->addColumn('url', function ($v){
                $url = '<a href='.$v->url.' target="_blank">'.$v->url.'</a>';
                return $url;
            })
            ->addColumn('action', function ($v) {
                $btn = '<a href="#" onClick="getData('.$v->id.')" id="'.$v->id.'" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_add_related_link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>';
                $btn .= '<a href="#" onclick="deleteData('.$v->id.')" id="'.$v->id.'" class="warning confirm" data-toggle="tooltip" data-placement="top" title="Hapus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>';
                return $btn;
            })
            ->rawColumns(['url','action'])->make(true);
        }
        
    }

    public function validate(Request $request, $action)
    {
        if ($request->ajax()) {

            $attributes = [
                'name' => 'Nama',
                'url' => 'URL'
            ];

            if($action==="Simpan"){
                $rules = [
                    'name' => 'required',
                    'url' => 'required'
                ];
            } else {
                $rules = [
                    'name' => 'required',
                    'url' => 'required'
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
            $related_link = New RelatedLinks();
            $related_link->fill($request->all());
            $related_link->save();
            
            activity()->log('Create Data RelatedLinks');
            return response()->json(['success' => true,'message' => 'Tambah Data Berhasil']);
        }
    }

    ## Get Data
    public function edit(Request $request,$id)
    {
        if ($request->ajax()) {
            $related_link = RelatedLinks::where('id',$id)->first();
            return response()->json(['success' => true,'data' => $related_link]);
        }
    }

    ## Edit Data
    public function update(Request $request, RelatedLinks $related_link)
    {
        if ($request->ajax()) {
            
            $related_link->name = $request->name;
            $related_link->url = $request->url;
            $related_link->save();
    
            activity()->log('Edit Data RelatedLinks With ID = '.$related_link->id);
            return response()->json(['success' => true,'message' => 'Ubah Data Berhasil']);
        }
    }

    ## Delete Data
    public function delete(Request $request, $related_link)
    {
        if ($request->ajax()) {
            $related_link = RelatedLinks::where('id',$related_link)->first();
            $related_link->delete();
            activity()->log('Delete Data RelatedLinks With ID = '.$related_link->id);
            return response()->json(['success' => true,'message' => 'Hapus Data Berhasil']);
        }
    }

}
