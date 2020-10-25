@include(pengunjung.header)
<!-- Edit kategori -->
<section id="editkategori" class="editkategori bg-light pb-5">
  <div class="pb-5">
    <div class="container-fluid p-5">
      <div class="container-fluid pt-3 pb-5">
        <div class="card w-50 m-auto">
          <div class="card-header">Edit Kategori</div>
          <div class="card-body">
            <form method="POST" autocomplete="on" action="">
              <div class="form-group">
              @foreach($kategori as $data)
                <label for="kategori">Nama Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="{{$data->nama}}">
              </div>
              @endforeach
              <div class="mt-4">
                <button class="btn btn-success " type="submit">Selesai</button>
                <button class="btn btn-danger" type="submit">cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
  </section>
@include(pengunjung.footer)