<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenulisController extends Controller
{
    //
    public function tambahPost(){
        $kategori = Kategori::all();

        return view('penulis.addpost', compact('kategori'));
    }

    public function simpanPost(Request $request){
        $post = new Post();
        $post->judul = $request->input('title');
        $post->isipost = $request->input('isipost');
        $post->idkategori = $request->input('kategori');
        $post->idpenulis = Auth::guard('web')->user()->idpenulis;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = time().$gambar->getClientOriginalName();

            if(!is_dir('img')) {
                mkdir('img', 0777, true);
            }
            $request->file('gambar')->move('img/', $fileName);

            $post->file_gambar = $fileName;
        }

        $post->save();

        return redirect('/post/'.$post->idpost);
    }

    public function editPost($id){
        $data = Post::where('idpost', $id)->firstOrFail();

        if ($data->idpenulis == Auth::guard('web')->user()->idpenulis) {

            return view('penulis.editsinglepost', compact('data'));
        }
        return redirect('/post/'.$id);

    }

    public function updatePost(Request $request, $id){
        $post =  Post::where('idpost', $id)->firstOrFail();
        if($post->idpenulis == Auth::guard('web')->user()->idpenulis) {
            $post->judul = $request->input('title');
            $post->isipost = $request->input('isipost');

            $post->save();

        }

        return redirect('/post/'.$post->idpost);
    }

    public function editAkunPenulis($id){
        $data = Penulis::where('idpenulis', $id)->firstOrFail();

        if ($data->idpenulis == Auth::guard('web')->user()->idpenulis) {

            return view('editakunpenulis', compact('data'));
        }
        return redirect('/post/editAkun/'.$id);

    }

    public function updateAkunPenulis(Request $request, $id){
        $data = Penulis::where('idpenulis', $id)->firstOrFail();
        if($data->idpenulis == Auth::guard('web')->user()->idpenulis) {
            $data->nama = $request->input('nama');
            $data->kota = $request->input('kota');
            $data->alamat = $request->input('alamat');
            $data->no_telp = $request->input('no_telp');
            $data->email = $request->input('email');

            $data->save();

        }

        return redirect('/post/editAkun/'.$data->idpenulis);
    }
}
