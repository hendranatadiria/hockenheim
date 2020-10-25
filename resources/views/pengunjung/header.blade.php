<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/bootstrap dist/css/bootstrap.min.css">
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/jquery.min.js"></script>
  <script src="/popper.min.js"></script>
  <script src="/bootstrap dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/style.css">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <title>Peluang Berbicara</title>
</head>
<body class="mt-5">


  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Peluang Berbicara</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @php
            $userweb = Auth::guard('web')->user();
            $useradmin = Auth::guard('admin')->user();
            @endphp
            @if($useradmin==null && $userweb == null)
              <li class="nav-item {{ request()->segment(1)==''?'active':''}} {{ request()->segment(1)=='home'?'active':''}}">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item {{ request()->segment(1)=='post'?'active':''}}">
                <a class="nav-link" href="/post">Postingan</a>

            @elseif($useradmin==null)

              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/post/tambah">Tambah Postingan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/post">Postingan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/mypost">Postingan Saya</a>
              </li>

            @elseif($userweb == null)

                <li class="nav-item">
                    <a class="nav-link" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/kategori/tambah">Tambah Kategori</a>
                </li>
            @endif
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/bell.png" width="30" height="30" class="mr-2">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-center" href="#">Notifikasi</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">komentar komentar komentar komentar komentar komentar </a>
            </div>
          </li>
        </ul>


        <form class="form-inline my-2 my-lg-0 " action="/search">
          <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0 mr" type="submit">Search</button>
        </form>
        @php
            $user = \Auth::guard('web')->user();
        @endphp
        @if($user != null)
        @php
        $idpenulis = \Auth::guard('web')->user()->idpenulis;
        $user = \Auth::guard('web')->user();
        @endphp
        @else
        @php
        $user = \Auth::guard('admin')->user();
        $idpenulis = \Auth::guard('admin')->user()->idadmin;
        @endphp
        @endif
        @if($user!==null)
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{\Illuminate\Support\Str::limit($user->nama, 35, $end='...')}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/post/editAkun/@php echo $idpenulis; @endphp">Edit Akun</a>
              <div class="dropdown-divider"></div>
                @if($user == Auth::guard('admin')->user())
                    <a class="dropdown-item" href="/admin/logout">Keluar</a>
                @else
                    <a class="dropdown-item" href="/logout">Keluar</a>
                @endif
            </div>
          </li>
        </ul>
        @else
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/login" >
                Login
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/signup" >
                  Daftar
                </a>
            </li>
        </ul>
        @endif
      </div>
    </div>
  </nav>
