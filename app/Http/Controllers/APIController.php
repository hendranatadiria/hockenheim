<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller {

    public function lihatPost($id) {
        $post = Post::with('kategori', 'penulis')->where('idpost', $id)->firstOrFail();
        $komentar = Komentar::with('penulis')->where('idpost', $id)->get();

        return compact('post', 'komentar');
    }

    public function cariPost(Request $request){
        $post = Post::with('kategori', 'penulis')->where('judul', 'like', '%'.$request->q.'%')->orWhere('isipost', 'like', '%'.$request->q.'%')->get();

        return $post;
    }

    public function listpost() {
        $post = Kategori::all();

        return $post;
    }

    public function index() {
        $post = Post::with('kategori', 'penulis')->orderByDesc('created_at')->get();

        return $post;
    }

    public function kategoriPost($id){
        $kategori = Kategori::where('idkategori', $id)->firstOrFail();
        $post = Post::with('kategori', 'penulis')->where('idkategori', $id)->get();

        return compact('kategori', 'post');
    }
}
