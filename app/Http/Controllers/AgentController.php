<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Pengguna;
use App\Agent;
use App\Property;
use App\Property_Image;
use App\Message;
use App\Reply;
use Storage;
use Validator;
use Alert;
use Auth;
use Carbon\Carbon;
use Pusher\Pusher;


class AgentController extends Controller
{
    public function dashboard()
    {
        if(!Session::get('login')){
            alert()->error('Silahkan login terlebih dahulu!','Aksi Tidak Didukung!')->persistent('Close');
            return redirect('/');
        }
        else{
            $users = DB::table('pengguna')->leftJoin('messages', 'messages.from', '=', 'pengguna.email')->where('to', Session::get('email'))->orderBy('messages.created_at', 'desc')->limit(5)->get();

            $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

            // $proper = Property::where('id_agent', Session::get('id'))->get();
            $proper = DB::table('property')->where('id_agent', Session::get('id'))->paginate(4);

            return view('dashboard', compact('proper', 'users', 'jumlah'));
        }

    }

    public function seller()
    {
        if(!Session::get('login')){
            alert()->error('Silahkan login terlebih dahulu!','Aksi Tidak Didukung!')->persistent('Close');
            return redirect('/');
        }
        else{
            $users = DB::table('pengguna')->leftJoin('messages', 'messages.from', '=', 'pengguna.email')->where('to', Session::get('email'))->orderBy('messages.created_at', 'desc')->limit(5)->get();

            $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

            return view('seller', compact('users', 'jumlah'));
        }
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validasi = $request->validate([
            'id_agent' => 'required',
        ]);
        
        $validator = Validator::make($input, [
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,svg|max:9048',
            'jumlah_lantai' => 'required|numeric',
            'daya_listrik' => 'required|numeric',
            'tipe_properti' => 'required',
            'tipe_iklan' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
            'sertifikat' => 'required',
            'kamar_tidur' => 'required|numeric',
            'kamar_mandi' => 'required|numeric',
            'garasi' => 'required|numeric',
            'harga' => 'required|numeric',
            'minimal_dp' => 'required|numeric',
            'lokasi_pulau' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'kota' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails())
        {
            alert()->error('Periksa kembali kelengkapan data anda!','Penjualan Property Gagal!')->persistent('Close');
            return redirect('seller')->withInput()->withErrors($validator);
        }

        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $owner=$request->id_agent;
                $name=$owner . '-' . $file->getClientOriginalName();
                $file->move('PropertyPicture',$name);
                $images[]=$name;
            }
        }
        

        $data =  new Property();

        $data->title = $request->title;
        $data->id_agent = $request->id_agent;
        $data->images = implode("|",$images);
        $data->jumlah_lantai = $request->jumlah_lantai;
        $data->daya_listrik = $request->daya_listrik;
        $data->tipe_properti = $request->tipe_properti;
        $data->tipe_iklan = $request->tipe_iklan;
        $data->luas_tanah = $request->luas_tanah;
        $data->luas_bangunan = $request->luas_bangunan;
        $data->sertifikat = $request->sertifikat;
        $data->kamar_tidur = $request->kamar_tidur;
        $data->kamar_mandi = $request->kamar_mandi;
        $data->garasi = $request->garasi;
        $data->harga = $request->harga;
        $data->minimal_dp = $request->minimal_dp;
        $data->lokasi_pulau = $request->lokasi_pulau;
        $data->alamat = $request->alamat;
        $data->kecamatan = $request->kecamatan;
        $data->kelurahan = $request->kelurahan;
        $data->kota = $request->kota;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        alert()->success('Property Anda Berhasil Di Iklankan!','Penjualan Berhasil!')->persistent('Close');
        return redirect('/agent');
    }

    // public function chat()
    // {
    //     $pesan = Message::where('to', Session::get('email'))->get();

    //     $users = DB::select("select pengguna.id, pengguna.full_name, pengguna.email, pengguna.picture from pengguna LEFT JOIN message ON pengguna.email = message.from group by pengguna.id, pengguna.full_name, pengguna.email, pengguna.picture");

    //     // $users = DB::table('pengguna')->join('message', 'pengguna.email','=','message.from')->select('pengguna.*','message.*')->get();

    //     return view('chat', compact('pesan', 'users'));
    // }

    public function edit($id)
    {
        $editproper = DB::table('property')->where('id', $id)->get();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('editProperty', compact('editproper', 'jumlah'));
    }

    public function delete($id)
    {
        $destroy = Property::findOrFail($id);
        $destroy->delete();

        alert()->success('Property Berhasil Dihapus!', 'Deleted!')->persistent('Close');
        return redirect('/agent');
    }

    public function update(Request $request)
    {
        DB::table('property')->where('id',$request->id)->update([
            'title' => $request->title,
            'jumlah_lantai' => $request->jumlah_lantai,
            'daya_listrik' => $request->daya_listrik,
            'tipe_properti' => $request->tipe_properti,
            'tipe_iklan' => $request->tipe_iklan,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'sertifikat' => $request->sertifikat,
            'kamar_tidur' => $request->kamar_tidur,
            'kamar_mandi' => $request->kamar_mandi,
            'garasi' => $request->garasi,
            'harga' => $request->harga,
            'minimal_dp' => $request->minimal_dp,
            'lokasi_pulau' => $request->lokasi_pulau,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'kota' => $request->kota,
            'deskripsi' => $request->deskripsi
        ]);

        alert()->success('Property Berhasil Diupdate!', 'Update Berhasil!')->persistent('Close');
        return redirect('/agent');
    }

    public function user($id)
    {
        $akun = DB::table('agent')->where('id', $id)->get();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('akun', compact('akun', 'jumlah'));
    }

    public function editAkun($id)
    {
        $editakun = DB::table('agent')->where('id', $id)->get();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('editAkun', compact('editakun', 'jumlah'));
    }

    public function updateAkun(Request $request, $id)
    {
        // DB::table('agent')->where('id',$request->id)->update([
        //     'picture' => Session::get('picture'),
        //     'full_name' => $request->full_name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'domisili' => $request->domisili,
        //     'file_cv' => Session::get('file_cv'),
        // ]);

        $data = Agent::findOrFail($id);
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
        if (empty($request->file('file_cv'))){
            $data->file_cv = $data->file_cv;
        }
        else{
            unlink('AgentCV/'.$data->file_cv); //menghapus file lama
        
            $file_cv = $request->file('file_cv');
            $ext = $file_cv->getClientOriginalExtension();
            $cv_name = date('YmdHis'). ".$ext";
            $file_cv->move('AgentCV', $cv_name);            
            $data->file_cv = $cv_name;
        }
        $data->save();

        alert()->success('Akun Berhasil Diupdate!', 'Update Berhasil!')->persistent('Close');
        return redirect('/agent');
    }

    public function detailProperty($id)
    {
        $detail = Property::findOrFail($id);

        $comment = DB::table('comment')->orderBy('created_at', 'desc')->get();

        $reply = Reply::all();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('properties-agent-detail', compact('detail', 'comment', 'jumlah', 'reply'));
    }

    public function reply(Request $request)
    {
        if (Session::get('login')) {
            Reply::create([
                'comment_id' => $request->input('comment_id'),
                'from' => $request->input('from'),
                'replies' => $request->input('replies'),
            ]);

            alert()->success('Komentar Balasan Berhasil Dikirim!', 'Balasan Terkirim!')->persistent('Close');

            return redirect()->back();
        }

        alert()->error('Komentar Balasan Gagal Dikirim!', 'Gagal Terkirim!')->persistent('Close');

        return redirect()->back();
    }
}

