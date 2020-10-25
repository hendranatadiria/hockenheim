<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penulis;
use Illuminate\Http\Request;

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

        return redirect('/admin/kategori/');
    }

    public function editKategori($id){
        $data = Kategori::where('idkategori', $id)->firstOrFail();

        return view('admin.editkategori', compact('data'));

    }

    public function updateKategori(Request $request, $id){
        $kategori =  Kategori::where('idkategori', $id)->firstOrFail();
            $kategori->nama = $request->input('nama');

            $kategori->save();

        return redirect('/admin/kategori');
    }
}
