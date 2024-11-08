<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    ## Show Data
    public function index()
    {
        $title = "Pengaturan";
        $setting = Setting::find(1);
		return view('admin.setting.index',compact('title','setting'));
    }

    public function validation(Request $request)
    {
        if ($request->ajax()) {

            $request->validate([
                'application_name' => 'required',
                'short_application_name' => 'required',
            ]);
    
            return response()->json(['success' => true]);
        }
    }

    ## Edit Data
    public function update(Request $request, Setting $setting)
    {
        if ($request->ajax()) {
            $setting->address = $request->address;
            $setting->phone = $request->phone;
            $setting->email = $request->email;
            $setting->application_name = $request->application_name;
            $setting->short_application_name = $request->short_application_name;

            if ($setting->small_icon && $request->file('small_icon') != "") {
                $image_path = public_path() . '/upload/setting/' . $setting->small_icon;
                unlink($image_path);
            }
    
            if($request->file('small_icon')){	
                $filename = '1'.time().'.'.$request->small_icon->getClientOriginalExtension();
                $request->small_icon->move(public_path('upload/setting'), $filename);
                $setting->small_icon = $filename;
            }
                    
            if ($setting->large_icon && $request->file('large_icon') != "") {
                $image_path = public_path() . '/upload/setting/' . $setting->large_icon;
                unlink($image_path);
            }

            if($request->file('large_icon')){	
                $filename = '2'.time().'.'.$request->large_icon->getClientOriginalExtension();
                $request->large_icon->move(public_path('upload/setting'), $filename);
                $setting->large_icon = $filename;
            }
                  
            if ($setting->background_login && $request->file('background_login') != "") {
                $image_path = public_path() . '/upload/setting/' . $setting->background_login;
                unlink($image_path);
            }

            if($request->file('background_login')){	
                $filename = '3'.time().'.'.$request->background_login->getClientOriginalExtension();
                $request->background_login->move(public_path('upload/setting'), $filename);
                $setting->background_login = $filename;
            }

            $setting->save();
    
            activity()->log('Edit Data Setting With ID = '.$setting->id);
            return response()->json(['success' => true,'message' => 'Ubah Data Berhasil']);
        }
    }

}

