@include('pengunjung.header')
<!-- Daftar penulis -->
<section id="dftrpenulis" class="dftrpenulis pb-4">
  <div class="p-5 container-fluid">
    <div class="container-fluid mt-5 pb-5 mb-3 p-5">
      <div class="card ">
        <div class="card-header">Daftar Penulis</div>
        <div class="card-body">
          <br>
          <a href="/dashboard" class="mb-3 btn btn-primary">Dashboard</a><br><br>
          <input type="search" name="key" id="key" class="form-control" placeholder="Pencarian...">
          <br>
		  @foreach($penulis as $data)
          <p>Total Penulis = 
		  ($loop->count)</p>
          <table class="table table-striped">
            <tr>
              <th>No</th>
              <th>Nama Penulis</th>
              <th>Jumlah Postingan</th>
              <th>Dibuat</th>
              <th>Diubah</th>
              <th>Aksi</th>
            </tr>
                <td>{{$data->idpenulis}}</td>
                <td>{{$data->nama}}</td>
                <td><!--ini ngga tau digimanain :( --></td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td>
                <a class="btn btn-danger btn-sm" href="#">Reset Password</a>
                </td>
			@endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@include('pengunjung.footer')