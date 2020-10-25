@include('pengunjung.header')
<!-- Edit kategori -->
<section id="editkategori" class="editkategori bg-light pb-5">
  <div class="pb-5">
    <div class="container-fluid p-5">
      <div class="container-fluid pt-3 pb-5">
        <div class="card w-50 m-auto">
          <div class="card-header">Edit Kategori</div>
          <div class="card-body">
            <form method="POST" autocomplete="on" action="">
                @csrf
              <div class="form-group">
                <label for="kategori">Nama Kategori</label>
                <input type="text" name="nama" id="kategori" class="form-control" value="{{$data->nama}}">
              </div>
              <div class="mt-4">
                <button class="btn btn-success " type="submit">Selesai</button>
                <a class="btn btn-danger" onclick="window.history.back();">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
  </section>
@include('pengunjung.footer')
