@include(pengunjung.header)
<!-- Add kategori -->
<section id="addcategory" class="addcategory bg-light pb-5">
    <div class="pb-5">
        <div class="container-fluid p-5">
            <div class="container-fluid pt-5 pb-5">
                <div class="card w-50 m-auto">
                    <div class="card-header">Tambah Kategori</div>
                    <div class="card-body">
                        <form method="POST" autocomplete="on" action="">
                            <div class="form-group">
                                <label for="kategori">Nama Kategori</label>
                                <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Masukkan kategori...">
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-success " type="submit">Tambah</button>
                                <button class="btn btn-danger" type="submit">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
</section>
@include(pengunjung.footer)