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
        @forelse($post as $data)
        @php $isOwnPost = $post->idpenulis == \Auth::guard('web')->user()->idpenulis; @endphp
            <div class="col-md">
                <div class="card text-right">
                    <img src="img/{{$data->file_gambar}}" class="card-img-top" alt="gambar">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$data->judul}}</h5>
                            <p class="card-text text-center">Kategori :{{$data->idkategori}}</p>
                            <a href="post/{{$data->idpost}}"  class="btn btn-success">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
	        </div>
            <div class="col-md pt-4 text-center">
                <h5>Tidak ada hasil ditemukan.</h5>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        @endforelse
        </div>
    <br><br><br><br><br><br><br><br><br><br>
    </section>
@include(pengunjung.footer)