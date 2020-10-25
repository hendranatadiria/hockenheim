@include('pengunjung.header')
<!-- Daftar penulis -->
<section id="dftrpenulis" class="dftrpenulis pb-4">
  <div class="p-5 container-fluid">
    <div class="container-fluid mt-5 pb-5 mb-3 p-5">
      <div class="card ">
        <div class="card-header">Daftar Penulis</div>
        <div class="card-body">
          <br>
          <a href="/admin" class="mb-3 btn btn-primary">Dashboard</a><br><br>
          <br>
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
          <p>Total Penulis =
            {{$penulis->count()}}</p>
          <table class="table table-striped">
            <tr>
              <th>No</th>
              <th>Nama Penulis</th>
              <th>Jumlah Postingan</th>
              <th>Dibuat</th>
              <th>Diubah</th>
              <th>Aksi</th>
            </tr>
          @foreach($penulis as $data)
          <tr>
                <td>{{$data->idpenulis}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->post()->count()}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td>
                <a class="btn btn-danger btn-sm" href="/admin/penulis/resetpass/{{$data->idpenulis}}">Reset Password</a>
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
