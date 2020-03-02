<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Session;
use App\Pengguna;
use App\Agent;
use Validator;
use Alert;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = Agent::where('email',$email)->first();
        $cust = Pengguna::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                    Session::put('id',$data->id);
                    Session::put('picture',$data->picture);
                    Session::put('full_name',$data->full_name);
                    Session::put('email',$data->email);
                    Session::put('password',$data->password);
                    Session::put('phone',$data->phone);
                    Session::put('domisili',$data->domisili);
                    Session::put('file_cv',$data->file_cv);
                    Session::put('login',TRUE);
                    return redirect('/agent');
            }
            else{
                alert()->error('Kombinasi email dan password salah!','Login Gagal!')->persistent('Close');
                return redirect('/');
            }
        }
        else if($cust){
            if(Hash::check($password,$cust->password)){
                Session::put('id',$cust->id);
                Session::put('picture',$cust->picture);
                Session::put('full_name',$cust->full_name);
                Session::put('email',$cust->email);
                Session::put('phone',$cust->phone);
                Session::put('domisili',$cust->domisili);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                alert()->error('Kombinasi email dan password salah!','Login Gagal!')->persistent('Close');
                return redirect('/');
            }
        }
        else{
            alert()->error('Silahkan registrasi terlebih dahulu!','Login Gagal!')->persistent('Close');
            return redirect('/');
        }
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        alert()->success('Anda Berhasil Keluar', 'Logout!');
        return redirect('/');
    }
    
}
