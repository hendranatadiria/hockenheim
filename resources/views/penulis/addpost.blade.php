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
		<form method="POST" autocomplete="on" enctype="multipart/form-data">
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
				<input type="text" name="title" id="judul" class="form-control" placeholder="Masukkan judul..." required>
			</div>
			<div class="form-group">
				<label for="isipost">Isi Post</label>
				<textarea type="text" name="isipost" id="isipost" class="form-control" rows="6"placeholder="Masukkan isi..."></textarea>
			</div>
			<div class="form-group">
				<label for="kategori">Kategori</label>
				<select class="form-control" id="kategori" name="kategori" required>
					<option value="">Pilih kategori...</option>
					@foreach($kategori as $data)
					<option value="{{$data->idkategori}}">{{$data->nama}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="gambar">File gambar</label>
				<input type="file" name="gambar" id="gambar" class="form-control-file">
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
    <script>
        $(document).ready(function() {
        $('#isipost').summernote();
        });
    </script>
    @include('pengunjung.footer')
