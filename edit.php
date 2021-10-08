<?php
    # memanggil file config / koneksi
    include_once 'config/conn.php';
    # memanggil header
    include_once 'layouts/header.php';


    $id = $_GET['id'];

    if(isset($id) && $id != ""){
        $sql = mysqli_query($conn, "SELECT * FROM tbl_barang where id = $id");
        $barang = mysqli_fetch_assoc($sql);
        if(mysqli_num_rows($sql) <= 0){
            header("location:../index.php");
            exit();
        }
    }else{
        header("location:../index.php");
	    exit();
    }
    
?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-md-8">
        <section>
            <h4>Edit Barang</h4>
            <p>Halaman ini untuk mengupdate sebuah barang</p>

            <!-- form action untuk mengarahkan proses ke file store.php -->
            <form action="resource/update.php" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="" name="nama" value="<?php echo $barang['nama']?>">
                    <input type="hidden" name="id" value="<?php echo $barang['id']?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" id="" value="<?php echo $barang['harga']?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"><?php echo $barang['deskripsi']?></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Perbarui</button>
                </div>
            </form>

        </section>
        </div>
    </div>
</div>

<?php
    include_once 'layouts/footer.php';
?>