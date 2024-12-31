<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    ## Simpan Data
    public function store(Request $request)
    {
        $attributes = [
            'name' => 'Nama User',
            'email' => 'Email',
            'address' => 'Alamat',
            'phone' => 'No. HP/Telepon',
            'password' => 'Password'
        ];

        $rules = [
            'name' => 'required|alpha_dash|unique:users',
            'email' => 'required|unique:users',
            'address' => 'required',
            'phone' => 'required|numeric',
            'password' => 'required|string|min:8|confirmed'
        ];

        $request->validate($rules, [],$attributes);

        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->group_id = 2;
        $user->status = 'Active';
        $user->save();

		return redirect('/page-login')->with('status','Registrasi Berhasil, silahkan login !');

    }

    ## Edit Data
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
            'foto_ktp' => 'mimes:jpg,jpeg,png|max:300',
            'password' => 'required|string|min:8|confirmed'
        ]);

		$user->fill($request->all());
        if($request->password){
            $user->password = Hash::make($request->password);
        }
		
		if($request->file('foto_ktp') == ""){}
    	else
    	{	
            $filename = time().'.'.$request->foto_ktp->getClientOriginalExtension();
            $request->foto_ktp->move(public_path('upload/foto_ktp'), $filename);
            $user->foto_ktp = $filename;
		}
		
    	$user->save();
		
		return redirect('/login_w')->with('status', 'Data Berhasil Diubah');
    }
}
