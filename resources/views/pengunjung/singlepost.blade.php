@include('pengunjung.header')
<section id="Postingan" class="Postingan pt-5">
  <div class="container ">
    <div class="row text-center">
      <div class="col">
        <h2>Kita</h2>
        <p class="mt-3">Penulis</p>
        <div class="col">
          <p class="">Create at</p>
        </div>
      </div>
    </div>


    <div class="row justify-content-center">
      <div class="col-lg-4.5 pb-3">
        <img src="img/bc.jpg" alt="gambar" width="400px;">
      </div>
    </div>

    <div id="B">
      <div class="row text-center">
        <div class="col-md-6 offset-md-3 mb-5">
          <div class="col text-justify">
            <p>Jika suatu saat nanti bukan kita yang akan bersama aku ingin kamu menjadi seperti bunga, walaupun daunnya telah gugur dan pergi dihembus lembut dengan angin, namun bunganya tetap tumbuh dengan indah dan selalu bertahan sampai ada seseorang yang memetiknya.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--Komentar -->
<section id="comment" class="comment bg-light pt-2">
  <div class="container">
    <!-- Form -->
    <div class="col-md-6 offset-md-3">
      <form>
        <div class="form-row pt-2">
          <label for="komen">Comment as</label>
          <textarea type="text" class="form-control" id="komen" placeholder="Masukkan Komentar..."  required></textarea>
        </div>
        <div class="form-row">
          <button class="btn btn-dark mt-3 mb-3" type="submit">Comment</button>     
        </div>
      </form>
      <hr>
    </div>
  </div>

  <!-- List Comment -->
  <div class="container">
    <!-- Form -->
    <div class="col-md-6 offset-md-3">
      <form>
        <div class="form-row pt-2">
          <label for="listkomen"><b>Username</b></label>
        </div>
        <div class="form-row pt-2">
          <label for="isi">isi coment isi comentisi comentisi comentisi comentisi comentisi comentisi coment</label>
        </div>
        <p>
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