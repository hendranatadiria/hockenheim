<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index() {
        $post = Kategori::orderByDesc('created_at')->get();

        return view('dashboard', compact('post'));
    }

    public function listPenulis(){
        $penulis = Penulis::all();
        return view('admin.daftarpenulis', compact('penulis'));
    }

    public function tambahKategori(){

        return view('admin.addcategory');
    }

    public function listKategori(){
        $kategori = Kategori::all();
        return view('admin.daftarkategori', compact('kategori'));
    }

    public function simpanKategori(Request $request){
        $kategori = new Kategori();
        $kategori->nama = $request->input('nama');

        $kategori->save();

        return redirect('/admin/kategori/daftar/');
    }

    public function hapusKategori($id){
        $kategori = Kategori::where('idkategori', $id)->firstOrFail();

        $kategori->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus.');

    }

    public function editKategori($id){
        $data = Kategori::where('idkategori', $id)->firstOrFail();

        return view('admin.editkategori', compact('data'));

    }

    public function updateKategori(Request $request, $id){
        $kategori =  Kategori::where('idkategori', $id)->firstOrFail();
            $kategori->nama = $request->input('nama');

            $kategori->save();

        return redirect('/admin/kategori/daftar');
    }


    public function resetPassword($id) {
        $data = Penulis::where('idpenulis', $id)->firstOrFail();

        return view('admin.resetpass', compact('data'));
    }

    public function storeresetPassword(Request $request, $id){
        $data = Penulis::where('idpenulis', $id)->firstOrFail();

        if($request->input('password')!== null || $request->input('passwordconfirm') !== null) {
                if (($request->input('password') == $request->input('passwordconfirm'))){
                    $data->password = Hash::make($request->input('password'));
                } else {
                    return redirect()->back()->with('error', 'Password Baru dan konfirmasi password tidak tepat.');
                }
            }

        $data->save();


        return redirect('/admin/penulis/daftar/')->with('success', 'Password berhasil direset');
    }
}
