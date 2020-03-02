<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Pengguna;
use Storage;
use Validator;
use Alert;

class RegisterController extends Controller
{
    
    public function register()
    {
     	return view('register');   
    }

    public function register_proses(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'picture' => 'required|image|mimes:jpeg,jpg,png|max:10000',
            'full_name' => 'required|string|max:50',
            'email' => 'required|email|unique:pengguna',
            'password' => 'required|min:8',
            'phone' => 'required|numeric',
            'domisili' => 'required',
        ]);

        if ($validator->fails())
        {
            alert()->error('Periksa kembali kelengkapan data anda!','Registrasi Gagal!')->persistent('Close');
            return redirect('sale#formRegister')->withInput()->withErrors($validator);
        }

        $data =  new Pengguna();

        // upload picture
        $picture = $request->file('picture');
        $ext = $picture->getClientOriginalExtension();
        $picture_name = date('YmdHis'). ".$ext";
        $picture->move('UserPicture', $picture_name);
        $data->picture = $picture_name;
        // upload picture end
        
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->phone = $request->phone;
        $data->domisili = $request->domisili;
        $data->save();
        
        alert()->success('Selamat datang!', 'Registrasi Berhasil!')->persistent('Close');

        return redirect('/');


    }
}
