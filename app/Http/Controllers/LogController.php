<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LogController extends Controller
{
    ## Show Data
    public function index()
    {
        $title = "Log";
		return view('admin.log.index',compact('title'));
    }

    ## Get Data
    public function get_log_index(Request $request)
    {

        if ($request->ajax()) {
            $counter = 1;

            $log = Log::limit(10);

            return DataTables::of($log)
            ->addIndexColumn()
            ->addColumn('number', function () use (&$counter) {
                return $counter++;
            })
            ->addColumn('name', function ($v) {
                return $v->user ? $v->user->name : '';
            })
            ->addColumn('execution_time', function ($v) {
                return \Carbon\Carbon::parse($v->created_at)->diffForHumans();
            })
            ->addColumn('action', function ($v) {
                $name = $v->user ? $v->user->name : '';
                $btn = '<a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal' . $v->id . '"><i class="fa fa-list"></i></a>';
                // More action buttons...
                return $btn;
            })
            ->rawColumns(['action'])->make(true);
        }
        
    }
}
