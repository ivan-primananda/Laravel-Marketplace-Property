<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Session;
use App\Message;
use App\Agent;
use Storage;
use Validator;
use Alert;

class SaleController extends Controller
{
    public function registration()
    {
        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('sale', compact('jumlah'));
    }

    public function registration_proses(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'picture' => 'required|image|mimes:jpeg,jpg,png|max:10000',
            'full_name' => 'required|string|max:50',
            'email' => 'required|email|unique:agent',
            'password' => 'required|min:8',
            'phone' => 'required|numeric',
            'domisili' => 'required',
            'file_cv' => 'required|mimes:pdf|max:10000',
        ]);

        if ($validator->fails())
        {
            alert()->error('Periksa kembali kelengkapan data anda!','Registrasi Gagal!')->persistent('Close');
            return redirect('sale#formRegister')->withInput()->withErrors($validator);
        }

        $data =  new Agent();
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

        // upload file CV
        $file_cv = $request->file('file_cv');
        $ext = $file_cv->getClientOriginalExtension();
        $cv_name = date('YmdHis'). ".$ext";
        $file_cv->move('AgentCV', $cv_name);            
        $data->file_cv = $cv_name;
        $data->save();
        // upload file cv end

        alert()->success('Selamat datang Agent!', 'Registrasi Berhasil!')->persistent('Close');

        return redirect('/');


    }
}
