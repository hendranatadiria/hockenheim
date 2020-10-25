<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //

    public function index() {
        $post = Post::orderByDesc('created_at')->get();

        return view('pengunjung.index', compact('post'));
    }

    public function lihatPost($id) {
        $post = Post::where('idpost', $id)->firstOrFail();
        $komentar = Komentar::where('idpost', $id)->get();

        return view('pengunjung.singlepost', compact('post', 'komentar'));
    }

    public function cariPost(Request $request){
        $post = Post::where('judul', 'like', '%'.$request->q.'%')->orWhere('isipost', 'like', '%'.$request->q.'%')->get();

        return view('search', compact('post'));
    }

    public function kategoriPost($id){
        $kategori = Kategori::where('idkategori', $id)->firstOrFail();
        $post = Post::where('idkategori', $id)->get();

        return view('pengunjung.kategori', compact('post', 'kategori'));
    }

    public function storeKomentar(Request $request, $id){
        $komentar = new Komentar();
        $komentar->idpost = $id;
        $komentar->idpenulis = Auth::guard('web')->user()->idpenulis;
        $komentar->isi = $request->isikomentar;
        $komentar->save();

        return redirect()->back();

    }

    public function deleteKomentar($id){
        $komentar = Komentar::where('idkomentar', $id)->firstOrFail();
        if ($komentar->post->idpenulis == Auth::guard('web')->user()->idpenulis) {
            $komentar->delete();
        }

        return redirect()->back();
    }
}
