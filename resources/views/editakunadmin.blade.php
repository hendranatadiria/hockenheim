@include('pengunjung.header')
<!-- Edit Akun Admin -->
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
			@forelse($admin as $data)
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" class="form-control" value="{{$data->nama}}">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" value="{{$data->email}}">
            </div>
            <div class="form-group">
				<label for="email">Password Lama</label>
				<input type="password" name="oldpassword" id="email" class="form-control" >
            </div>
            <div class="form-group">
				<label for="email">Password Baru</label>
				<input type="password" name="password" id="email" class="form-control" >
            </div>
            <div class="form-group">
				<label for="email">Konfirmasi Password Baru</label>
				<input type="password" name="passwordconfirm" id="email" class="form-control" >
			</div>
			<div class="mt-4">
				<button class="btn btn-success" type="submit">Selesai</button>
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
