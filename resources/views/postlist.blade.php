@include('pengunjung.header')
<!-- postlist -->
<section id="terbaru" class="terbaru bg-light pb-4">
    <div class="container">
      <div class="row mb-4 pt-5">
        <div class="col text-center">
          <h2>Kategori Postingan</h2>
        </div>
      </div>

      <div class="row pt-3">
	  @foreach($post as $data)
        <div class="col-md-6">
          <div class="card text-right">
            <img src="img/bc.jpg" class="card-img-top" alt="gambar">
            <div class="card-body">
              <h5 class="card-title text-center">{{$data->nama}}</h5>
              <p class="card-text text-center">Berisi tentang kumpulan {{$data->nama}}</p>
              <a href="/kategori/{{$data->idkategori}}"  class="btn btn-success">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
		@endforeach
		{{--

		--}}
    </section>
@include('pengunjung.footer')
