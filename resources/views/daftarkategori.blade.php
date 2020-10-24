@include(pengunjung.header)
<!-- Daftar kategori -->
<section id="dftrcategory" class="dftrcategory pb-4">
  <div class="p-5 container-fluid">
    <div class="container-fluid mt-5 pb-5 mb-3 p-5">
      <div class="card">
        <div class="card-header">Daftar Kategori</div>
        <div class="card-body">
          <br>
          <a href="/dashboard" class="mb-3 btn btn-primary">Dashboard</a>
          <a href="/addcategory" class="mb-3 btn btn-outline-info ml-2">+ Kategori</a><br><br>
          <input type="search" name="key" id="key" class="form-control" placeholder="Pencarian...">
          <br>
		  @foreach($kategori as $data)
          <p>Total Kategori = 
			($loop->count)
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
				<td>{{$data->idkategori}}</td>
				<td>{{$data->nama}}</td>
				<td><!-- ini ngga tau caranya digimanain :(--></td>
				<td><!-- ini ngga tau caranya digimanain :(--></td>
				<td>{{$data->created_at}}</td>
				<td>{{$data->updated_at}}</td>
				<td>
				  <a class="btn btn-warning btn-sm" href="#">Edit</a>
				  <a class="btn btn-danger btn-sm" href="#">Hapus</a>
				</td>
			@endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@include(pengunjung.footer)