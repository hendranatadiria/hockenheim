<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap dist/css/bootstrap.min.css">
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap dist/js/bootstrap.min.js"></script>
  <title>Peluang Berbicara</title>
</head>
<style>
  body{
    background-image: url(img/2244.jpg);
    background-size: 2000px;
  }

</style>
<body class="mt-5">

  <!-- sign up -->
  <section id="signup" class="signup pt-5">
    <div class="container">
      <div class="row pt-5 mb-4">
        <div class="col text-center">
          <h2>Sign Up</h2>
        </div>
      </div> 


      <!-- Form -->
	  <div class="row justify-content-center">
      <div class="col-lg-0 pt-4 mt-2"> </div>

      <div class="col-lg-4">
        <form>
		  <div class="form-row pt-2">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama..." required>
          </div>

          <div class="form-row pt-2">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email..." required>
          </div>
          <div class="form-row pt-2">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="Password" placeholder="Masukkan Password..."  required>
          </div>
          <div class="form-row">
            <button class="btn btn-dark mt-3 col-lg-12" type="submit">Sign Up</button>     
          </div>
		  <div class="row pt-2">
			<div class="col text-center">
				<h6>Punya akun? <a href="login.html"><i>Masuk</i></a></h6>
			</div>
		  </div>
        </form>
      </div>
    </div>
  </div>
</section>


</body>
</html>