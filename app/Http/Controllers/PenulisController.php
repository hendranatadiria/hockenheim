<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $post->judul = $request->input('judul');
            $post->isipost = $request->input('isipost');

            $post->save();

        }

        return redirect('/post/'.$post->idpost);
    }

    public function deletePost(Request $request, $id){
        $post =  Post::where('idpost', $id)->firstOrFail();
        if($post->idpenulis == Auth::guard('web')->user()->idpenulis) {
            $post->delete();
        }

        return redirect('/mypost')->with('success', 'Postingan berhasil dihapus');
    }

    public function postSaya(){
        $post = Post::where('idpenulis', Auth::guard('web')->user()->idpenulis)->orderByDesc('created_at')->get();

        return view('penulis.mypost', compact('post'));
    }

    public function editAkunPenulis($id){
        $data = Penulis::where('idpenulis', $id)->firstOrFail();

        if ($data->idpenulis == Auth::guard('web')->user()->idpenulis) {

            return view('editakunpenulis', compact('data'));
        }
        return redirect('/post/editAkun/'.Auth::guard('web')->user()->idpenulis);

    }

    public function updateAkunPenulis(Request $request, $id){
        $data = Penulis::where('idpenulis', $id)->firstOrFail();
        if($data->idpenulis == Auth::guard('web')->user()->idpenulis) {
            $data->nama = $request->input('nama');
            $data->kota = $request->input('kota');
            $data->alamat = $request->input('alamat');
            $data->no_telp = $request->input('no_telp');
            $data->email = $request->input('email');

            if($request->input('oldpassword') !== null || $request->input('password')!== null || $request->input('passwordconfirm') !== null) {
                if (Hash::check($request->input('oldpassword'), $data->password) && ($request->input('password') == $request->input('passwordconfirm'))){
                    $data->password = Hash::make($request->input('password'));
                } else {
                    return redirect()->back()->with('error', 'Password Lama, Password Baru, atau konfirmasi password tidak tepat.');
                }
            }

            $data->save();

        }

        return redirect('/post/editAkun/'.$data->idpenulis)->with('success', 'Profile berhasil diupdate');
    }
}
