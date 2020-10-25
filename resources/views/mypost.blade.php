@include(pengunjung.header)
<!-- Postingan Saya -->
<section id="mypost" class="mypost bg-light pb-4">
    <div class="container">
      <div class="row mb-4 pt-5">
        <div class="col text-center">
          <h2>Postingan Saya</h2>
        </div>
      </div>

      <div class="row pt-3">
        <div class="col-md">
          <div class="card text-right">
		  @foreach($post as $data)
		  <!-- ini harusnya ada if idpenulis == yg di login, maka: ((tapi aku ngga tau cara implementasinya maap))-->
            <img src="img/{{$data->file_gambar}}" class="card-img-top" alt="gambar">
            <div class="card-body">
              <h5 class="card-title text-center">{{$data->judul}}</h5>
              <p class="card-text text-center">Kategori :{{$data->idkategori}}</p>
              <a href="post/{{$data->idpost}}"  class="btn btn-success">Lihat Selengkapnya</a>
            </div>
			@endforeach
          </div>
        </div>
	</div>
    <br><br><br><br><br><br><br><br><br><br>
    </section>
@include(pengunjung.footer)