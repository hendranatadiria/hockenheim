<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap dist/css/bootstrap.min.css">
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Peluang Berbicara</title>
</head>
<style>


</style>
<body class="mt-5">

 <!-- Navbar -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PeluangBerbicara</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="home.html">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="detailpost.html">Postingan</a>
        <a class="nav-link" href="profile.html">Profil</a>
        <a class="nav-link" href="galeri.html">Galeri</a>
        <a class="nav-link" href="contact.html">Contact</a>
      </div>
    </div>
  </div>
</nav>

<section id="Postingan" class="Postingan pt-5">
  <div class="container">
    <div class="row text-center">
    @foreach($post as $data)
      <div class="col">
        <h2>{{$data->judul}}</h2>
        <p class="mt-3">Penulis :{{$data->idpenulis}} </p>
      </div>    
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4.5 pb-3">
        <img src="img/{{$data->file_gambar}}" alt="gambar" width="400px;">
      </div>
    </div>

    <div id="B">
      <div class="row text-center">
        <div class="col-md-6 offset-md-3">
          <div class="col text-justify">
            <p>{{$data->isipost}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
        {{--
    
    --}}
</section>


<!--Komentar -->
<section id="contact" class="contact bg-light pt-2">
  <div class="container">
    <!-- Form -->
    <div class="col-md-6 offset-md-3">
      <form>
      @foreach($komentar as $data)
        <div class="form-row pt-2">
          <label for="validationDefault04">Comment as <i><u><b>{{$data->idpenulis}}</b></u></i></label><br />
          <textarea type="text" class="form-control" id="validationDefault04" placeholder="Masukkan Komentar..."  required>{{\Illuminate\Support\Str::limit($data->isi, 35, $end='...') }}</textarea>
        </div>
        <div class="form-row">
          <a href="post/{{$data->idkomentar}}" button class="btn btn-dark mt-3 mb-5" type="submit">Kirim</button>     
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
</section>

<!-- List Comment -->
<div class="container">
    <!-- Form -->
    <div class="col-md-6 offset-md-3">
      <form>
        <div class="form-row pt-2">
         @foreach($komentar as $data)
          <label for="listkomen"><b>{{$data->idpenulis}}</b></label>
        </div>
        <div class="form-row pt-2">
          <label for="isi">{{$data->isi}}</label>
        </div>
        <p>
          <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Reply
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="container">
            <!-- Form -->
            <div class="col-lg-0">
              <form>
                <div class="form-row pt-2">
                  <label for="balaskomen"><b>{{$data->idpenulis}}</b></label>
                  <textarea type="text" class="form-control" id="komen" placeholder="Masukkan Komentar..."  required></textarea>
                </div>
                <div class="form-row">
                  <a href="post/{{$data->idkomentar}}" button class="btn btn-dark mt-3 mb-3" type="submit">Comment</button>     
                </div>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  @endforeach
  {{---

  ---}}

<!-- Footer -->
<footer class="bg-warning text-black pt-3">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <p>PeluangBerbicara2020.</p>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
