<?php

# memanggil header.php
include_once '../layouts/header.php';

?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-md-8">
        <section>
            <h4>Tambah Barang</h4>
            <p>Halaman ini untuk menambahkan sebuah barang</p>

            <!-- form action untuk mengarahkan proses ke file store.php -->
            <form action="store.php" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="" name="nama">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                </div>
            </form>

        </section>
        </div>
    </div>
</div>


<?php
# memanggil footer.php
include_once '../layouts/footer.php';
?>