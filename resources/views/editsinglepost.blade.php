@include(pengunjung.header)
<!-- Edit Post -->
<section id="editpost" class="editpost bg-light pb-4">
    <div class="container-fluid p-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h2>Edit Postingan</h2>
        </div>
      </div>

	<div class="container-fluid mt-5 pb-4">
		<div class="card w-50 m-auto">
			<div class="card-body h-50">
			<form method="POST" autocomplete="on" action="">
			@foreach($post as $data)
			<div class="form-group">
				<label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{$data->judul}}">    
			</div>
			<div class="form-group">
				<label for="isipost">Isi Post</label>
                <textarea type="text" name="isipost" id="isipost" class="form-control" rows="6"value="{{$data->isipost}}"></textarea>   
			</div>
			<div class="mt-4">
                <button class="btn btn-success " type="submit">Simpan</button>
                <button class="btn btn-danger" type="submit">Cancel</button>
              </div>
			</form>
		  </div>
		  @endforeach
				{{--
			
			--}}
		</div>
	</div>
</section>
@include(pengunjung.footer)