@include('pengunjung.header')
<!-- Add Post -->
<section id="addpost" class="addpost bg-light pb-4">
    <div class="container-fluid p-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h2>Tambah Postingan</h2>
        </div>
      </div>

	<div class="container-fluid mt-5 pb-4">
		<div class="card w-50 m-auto">
		<div class="card-body h-50">
		<form method="POST" autocomplete="on" action="">
			@csrf
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
			<div class="form-group">
				<label for="judul">Judul</label>
				<input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul...">
			</div>
			<div class="form-group">
				<label for="isipost">Isi Post</label>
				<textarea type="text" name="isipost" id="isipost" class="form-control" rows="6"placeholder="Masukkan isi..."></textarea>
			</div>
			<div class="form-group">
				<label for="kategori">Kategori</label>
				<select class="form-control" id="kategori">
					<option value="--">Pilih kategori...</option>
					@foreach($kategori as $data)
					<option value="{{$data->idkategori}}">{{$data->nama}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="gambar">File gambar</label>
				<input type="file" name="judul" id="judul" class="form-control-file">
			</div>
			<div class="mt-4">
				<button class="btn btn-success" type="submit">Tambah</button>
				<button class="btn btn-danger" type="cancel">Cancel</button>
			</div>
		</form>
		</div>
		</div>
	</div>
    </section>
    @include('pengunjung.footer')
=======
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
            @empty
            <div class="col-md pt-4 text-center">
                <h5>Tidak ada hasil ditemukan.</h5>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        @endforelse
        </div>
    <br><br><br><br><br><br><br><br><br><br>
    </section>
@include(pengunjung.footer)
