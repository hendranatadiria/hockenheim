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


  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="img/speech-bubble.png" width="20%" height="25%">
      <h1 class="display-4">Peluang Berbicara</h1>
      <p class="lead"><b>Melalui ini mengutarakan isi pikiran yang menjadi sebuah kalimat didalamnya terdapat makna yang tersirat</b></p>
    </div>
  </div>

  <!-- about -->
  <section id="tentang" class="tentang pt-3">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center">
          <h2>Tentang</h2>
        </div>
      </div>

      <div id="B">
        <div class="row text-center">
          <div class="col-md-6 offset-md-3">
            <div class="col text-justify">
              <p>Peluang Berbicara dibuat pada tahun 2020, isi dari Peluang Berbicara adalah kumpulan kata-kata, cerita pendek, puisi. Inspirasi mungkin berasal dari khayalan, keluh kesah. Daripada disimpan lebih baik ditulis dan dapat dibaca oleh orang lain. gak apa-apa terlihat dramatis dan sok puitis dimata orang lain. Yang penting inspirasi terwujudkan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- terbaru -->
  <section id="terbaru" class="terbaru bg-light pb-4">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h2>Terbaru</h2>
        </div>
      </div>

      <div class="row">
        @foreach($post as $data)
        <div class="col-md-3 pt-4">
          <div class="card">
            <img src="img/{{$data->file_gambar}}" class="card-img-top" alt="gambar">
            <div class="card-body">
              <h5 class="card-title">{{$data->judul}}</h5>
              <p class="card-text">{{\Illuminate\Support\Str::limit($data->isipost, 35, $end='...') }}</p>
              <a href="post/{{$data->idpost}}"  class="btn btn-success">Lanjut Baca</a>
            </div>
          </div>
        </div>
        @endforeach
        {{--
      
      --}}
    </section>

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
