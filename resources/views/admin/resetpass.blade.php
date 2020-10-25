@include('pengunjung.header')
<!-- Edit Akun Penulis -->
<section id="editakun" class="editakun bg-light pb-4">
    <div class="container-fluid p-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h2>Reset Password {{$data->nama}}</h2>
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
				<label for="email">Password Baru</label>
				<input type="password" name="password" id="email" class="form-control" >
            </div>
            <div class="form-group">
				<label for="email">Konfirmasi Password Baru</label>
				<input type="password" name="passwordconfirm" id="email" class="form-control" >
			</div>
			<div class="mt-4">
				<button class="btn btn-success" type="submit">Reset Password</button>
			</div>
		</form>
		</div>
		</div>
	</div>
        {{--

      --}}
    </section>
@include('pengunjung.footer')
