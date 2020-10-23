@include('pengunjung.header')
<!-- Search result -->
<section id="result" class="result bg-light pb-4">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h2>Search Result</h2>
        </div>
      </div>

      <div class="row">
        @foreach($post as $data)
        <div class="col-md-3 pt-4">
          <div class="card">
            <img src="img/{{$data->file_gambar}}" class="card-img-top" alt="gambar">
            <div class="card-body">
              <h5 class="card-title">{{$data->judul}}</h5>
              <p class="card-text">{{$data->isipost}}</p>
              <a href="post/{{$data->idpost}}"  class="btn btn-success">Lanjut Baca</a>
            </div>
          </div>
        </div>
        @endforeach
        {{--
      
      --}}
    </section>

    @include('pengunjung.footer')