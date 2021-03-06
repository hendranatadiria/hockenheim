@include('pengunjung.header')

<section id="Postingan" class="Postingan pt-5">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h2>{{$post->judul}}</h2>
        <p class="mt-3">Penulis: {{$post->penulis->nama}}<br /><small>Kategori: <a href="/kategori/{{$post->idkategori}}">{{$post->kategori->nama}}</a> | Terakhir diperbarui: {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('d F Y, H:i:s')}}</small> </p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4.5 pb-3">
          @if($post->file_gambar !== null)
        <img src="/img/{{$post->file_gambar}}" alt="gambar" width="400px;">
        @endif

      </div>
    </div>

        <div class="col-md-6 offset-md-3">
          <div class="col text-justify">
            <p>{!! nl2br($post->isipost) !!}

            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>


<!-- List Comment -->
<div class="container">
    <!-- Form -->

    <div class="col-md-6 offset-md-3">
        <h4 class="pt-4 mt-4">Komentar</h4>
        @php $isOwnPost = $post->idpenulis == optional(\Auth::guard('web')->user())->idpenulis; @endphp
        @foreach($komentar as $data)
        <form action="{{$isOwnPost?'/post/deletecomment/'.$data->idkomentar:''}}"" method="POST">
        <div class="form-row pt-2">
          <label for="listkomen"><b>{{$data->penulis->nama}}</b> pada {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d F Y, H:i:s')}}</label>
            @if($isOwnPost) @csrf <button class="ml-3 btn btn-sm btn-danger" type="submit">Delete</button>@endif
        </div>
        <div class="form-row pt-2 pb-4">
          <label for="isi">{!!nl2br($data->isi)!!}</label>
        </div>
        {{--<p>

          <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Reply
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="container">
            <!-- Form -->
            <div class="col-lg-0">
              <form>
                <div class="form-row pt-2">

                  <label for="balaskomen"><b>Username</b></label>
                  <textarea type="text" class="form-control" id="komen" placeholder="Masukkan Komentar..."  required></textarea>
                </div>
                <div class="form-row">
                  <button class="btn btn-dark mt-3 mb-3" type="submit">Comment</button>

                  <label for="balaskomen"><b>{{$data->idpenulis}}</b></label>
                  <textarea type="text" class="form-control" id="komen" placeholder="Masukkan Komentar..."  required></textarea>
                </div>
                <div class="form-row">
                  <a href="post/{{$data->idkomentar}}" button class="btn btn-dark mt-3 mb-3" type="submit">Comment</button>

                </div>
              </form>
              <hr>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>
</section>
@include('pengunjung.footer')

        </div>--}}
        </form>
      @endforeach
    </div>
</div>

<!--Komentar -->
<section id="contact" class="contact bg-light pt-2">
    <div class="container">
      <!-- Form -->
      <div class="col-md-6 offset-md-3">
      <h4 class="pt-4">Berikan Komentar</h4>
      @if(\Auth::guard('web')->check())
        <form action="/post/{{$post->idpost}}/komentar" method="POST">
          <div class="form-row pt-2">
              @csrf
            <label for="validationDefault04">Comment as <i><u><b>{{\Auth::guard('web')->user()->nama}}</b></u></i></label><br />
            <textarea type="text" name="isikomentar" class="form-control" id="validationDefault04" placeholder="Masukkan Komentar..."  required></textarea>
            <label for="validationDefault04"><small>Komentar yang telah dikirim tidak dapat dihapus kecuali oleh pemilik post.</small></label><br />
          </div>
          <div class="form-row">
            <button class="btn btn-dark mt-3 mb-5" type="submit">Kirim</button>
          </div>
        </form>
      @else
      <label for="validationDefault04"><small>Hanya user terdaftar yang bisa memberi komentar.</small></label><br />
      @endif
      </div>
    </div>
  </div>
  </section>


@include('pengunjung.footer')

