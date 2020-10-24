@include('pengunjung.header')
<!-- Edit Akun Penulis -->
<section id="editakun" class="editakun bg-light pb-4">
    <div class="container-fluid p-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h2>Edit Akun</h2>
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
			@forelse($penulis as $data)
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" class="form-control" value="{{$data->nama}}">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea type="text" name="alamat" id="alamat" class="form-control" rows="5" value="{{$data->alamat}}"></textarea>
			</div>
			<div class="form-group">
				<label for="kota">Kota</label>
				<input type="text" name="kota" id="kota" class="form-control" value="{{$data->kota}}">
			</div>
			<div class="form-group">
				<label for="no_telp">Nomor Telepon</label>
				<input type="tel" name="no_telp" id="no_telp" class="form-control" value="{{$data->no_telp}}">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" value="{{$data->email}}">
			</div>
			<div class="mt-4">
				<button class="btn btn-success" type="submit">Selesai</button>
				<button class="btn btn-danger ml-2" type="submit">Ubah Password</button>
			</div>
		</form>
		</div>
		</div>
	</div>
        @endforelse
        {{--
      
      --}}
    </section>
@include('pengunjung.footer')