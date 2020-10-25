@include('pengunjung.header')
<!-- Postingan Saya -->
<section id="mypost" class="mypost bg-light pb-4">
    <div class="container">
        <div class="row mb-4 pt-5">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col text-center">
                <h2>Postingan Saya</h2>
            </div>
        </div>

        <div class="row pt-3">
        @forelse($post as $data)
            <div class="col-md-4 pt-4">
                <div class="card text-right">
                    @if($data->file_gambar!==null)
                    <img src="img/{{$data->file_gambar}}" class="card-img-top" alt="gambar">
                    @endif
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">{{$data->judul}}</h5>
                            <p class="card-text text-center">Kategori: <a href="/kategori/{{$data->idkategori}}">{{$data->kategori->nama}}</a></p>
                            <a href="post/edit/{{$data->idpost}}"  class="btn btn-warning">Sunting</a>
                            <a href="post/{{$data->idpost}}"  class="btn btn-success">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @empty
            <div class="col-md pt-4 text-center">
                <h5>Tidak ada hasil ditemukan.</h5>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        @endforelse
        </div>
    <br><br><br><br><br><br><br><br><br><br>
    </section>
@include('pengunjung.footer')
