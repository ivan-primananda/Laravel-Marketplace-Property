<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Property;
use App\Agent;
use App\Pengguna;
use App\BankBri;
use App\BankBni;
use App\BankBtn;
use App\BankMandiri;
use App\Message;
use App\Comment;
use App\Reply;
use Validator;
use Paginate;
use DB;

class HomeController extends Controller
{
    public function index()
    {   
        $proper = DB::table('property')->paginate(4);

        $carousel = DB::table('property')->orderBy('created_at', 'DESC')->limit(1)->get();
        
        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');
        
        return view('home', compact('proper', 'carousel', 'jumlah'));
    }

    public function properties()
    {
        $proper = DB::table('property')->paginate(10);

        $jumlahProperty = Property::count();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('properties', compact('proper', 'jumlahProperty', 'jumlah'));
    }

    public function cari(Request $request)
    {
        $input = $request->all();

        $title = $request->title;
        $lokasi_pulau = $request->lokasi_pulau;
        $tipe_properti = $request->tipe_properti;

        $validator = Validator::make($input, [
            'title' => 'required',
        ]);

        if ($validator->fails())
        {
            $proper = DB::table('property')->where([
                ['lokasi_pulau', 'like', $lokasi_pulau],
                ['tipe_properti', 'like', $tipe_properti]
            ])->paginate(10);
        }else{
            $proper = DB::table('property')->where('title', 'like', '%'.$title.'%')->paginate(10);
        }

        $jumlahProperty = $proper->count();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('properties', compact('proper', 'jumlahProperty', 'jumlah'));
    }

    public function detail($id)
    {
        $detail = Property::findOrFail($id);

        $comment = DB::table('comment')->orderBy('created_at', 'desc')->get();

        $reply = Reply::all();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('properties-detail', compact('detail', 'jumlah', 'comment', 'reply'));
    }

    public function simulasi($id)
    {
        $sim = Property::findOrFail($id);
        $mandiri = BankMandiri::all();
        $bri = BankBri::all();
        $bni = BankBni::all();
        $btn = BankBtn::all(); 

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('simulasi-kpr', compact('sim', 'mandiri', 'bri', 'bni', 'btn', 'jumlah'));
    }

    public function pertanyaan(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'property_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails())
        {
            alert()->error('Pesan Gagal Dikirim!','Gagal Mengirim!')->persistent('Close');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data =  new Message();

        $data->property_name = $request->property_name;
        $data->property_alamat = $request->property_alamat;
        $data->from = $request->from;
        $data->to = $request->to;
        $data->message = $request->message;
        $data->is_read = 0;
        $data->save();
        
        alert()->success('Pesan Berhasil Dikirim!', 'Pesan Terkirim!')->persistent('Close');

        return redirect()->back();
    }

    public function addComment(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'nama_property' => 'required',
            'from' => 'required',
            'komentar' => 'required',
        ]);

        if ($validator->fails())
        {
            alert()->error('Komentar Gagal Dikirim!','Gagal Mengirim!')->persistent('Close');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data =  new Comment();

        $data->nama_property = $request->nama_property;
        $data->from = $request->from;
        $data->komentar = $request->komentar;
        $data->save();
        
        alert()->success('Komentar Berhasil Dikirim!', 'Komentar Terkirim!')->persistent('Close');

        return redirect()->back();

    }

    public function akun($id)
    {
        $akun = DB::table('pengguna')->where('id', $id)->get();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('user', compact('akun', 'jumlah'));
    }

    public function editUser($id)
    {
        $editakun = DB::table('pengguna')->where('id', $id)->get();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('editUser', compact('editakun', 'jumlah'));
    }

    public function updateUser(Request $request, $id)
    {
        // DB::table('agent')->where('id',$request->id)->update([
        //     'picture' => Session::get('picture'),
        //     'full_name' => $request->full_name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'domisili' => $request->domisili,
        //     'file_cv' => Session::get('file_cv'),
        // ]);

        $data = Pengguna::findOrFail($id);
        if (empty($request->file('picture'))){
            $data->picture = $data->picture;
        }
        else{
            unlink('UserPicture/'.$data->picture); //menghapus file lama
        
            $picture = $request->file('picture');
            $ext = $picture->getClientOriginalExtension();
            $picture_name = date('YmdHis'). ".$ext";
            $picture->move('UserPicture', $picture_name);
            $data->picture = $picture_name;
        }
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->domisili = $request->domisili;
        
        $data->save();

        alert()->success('Akun Berhasil Diupdate!', 'Update Berhasil!')->persistent('Close');
        return redirect('/');
    }
}
