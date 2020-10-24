@include(pengunjung.header)
<!-- dashboard -->
<section id="dashboard" class="dashboard pt-3">
  <div class="container">
    <div class="row mb-3">
      <div class="col text-center pt-3">
        <h2>Dashboard</h2>
      </div>
    </div>
    <div id="B">
      <div class="row text-center pt-2">
        <div class="col-md-8 offset-md-2">
          <div class="col mr-auto">
            <a href="/daftarpenulis" button type="button" class="btn btn-outline-info btn-lg" ><img src="img/writing.png" width="60" height="60" class="mr-3">Daftar Penulis</button>
            <a href="/daftarkategori" button type="button" class="btn btn-outline-info btn-lg ml-3" ><img src="img/clipboard.png" width="60" height="60" class="mr-3 ">Daftar Kategori</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include(pengunjung.footer)