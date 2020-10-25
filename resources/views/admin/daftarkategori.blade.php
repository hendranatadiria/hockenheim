@include('pengunjung.header')
<!-- Daftar kategori -->
<section id="dftrcategory" class="dftrcategory pb-4">
  <div class="p-5 container-fluid">
    <div class="container-fluid mt-5 pb-5 mb-3 p-5">
      <div class="card">
        <div class="card-header">Daftar Kategori</div>
        <div class="card-body">
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
          <br>
          <a href="/dashboard" class="mb-3 btn btn-primary">Dashboard</a>
          <a href="/admin/kategori/tambah" class="mb-3 btn btn-outline-info ml-2">+ Kategori</a><br><br>
          <br>
          <p>Total Kategori =
			{{$kategori->count()}}
		  </p>
          <table class="table table-striped">
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Jumlah Postingan</th>
              <th>Jumlah Penulis</th>
              <th>Dibuat</th>
              <th>Diubah</th>
              <th>Aksi</th>
            </tr>
		  @foreach($kategori as $data)
            <tr>
				<td>{{$data->idkategori}}</td>
				<td>{{$data->nama}}</td>
				<td>{{$data->post()->count()}}</td>
				<td>{{$data->post()->groupBy('idpenulis')->count()}}</td>
				<td>{{$data->created_at}}</td>
				<td>{{$data->updated_at}}</td>
				<td>
				  <a class="btn btn-warning btn-sm" href="/admin/kategori/edit/{{$data->idkategori}}">Edit</a>
                  <form action="/admin/kategori/hapus/{{$data->idkategori}}" method="POST">@csrf
                  <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                  </form>
                </td>
            </tr>
			@endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@include('pengunjung.footer')
