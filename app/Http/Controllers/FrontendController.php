<?php

namespace App\Http\Controllers;

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

    public function lihatpost($id) {
        $post = Post::where('idpost', $id)->firstOrFail();

        return view('pengunjung.templatesatuan', compact('post'));
    }
}
