<?php
    # memanggil file config / koneksi
    include_once 'config/conn.php';
    # memanggil header
    include_once 'layouts/header.php';
?>


<!--  inidalah bagian didalam body -->
<!-- 
    Tampilan yang saya gunakan ini adalah framework bootstrap v5.1.1
    Bisa anda cek disini juga https://getbootstrap.com/
 -->
<section class="tables-barang">
    <div class="container">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-10">
            <a href="resource/create.php" class="btn btn-success mb-2">Tambah</a>
                <div class="card">
                    <div class="card-body">
                        <!-- Disini adalah tampilan untuk tabelnya -->
                        <table class="table caption-top">
                            <caption>Data Barang</caption>
                            <!-- bagian sini adalah untuk table header -->
                                <thead>
                                    <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">aksi</th>
                                    </tr>
                                </thead>

                                <!-- ini adalah bagian body table untuk menampilkan datanya -->
                                <tbody>
                                    <?php

                                        $no = 1;

                                        // bagian ini untuk menampilkan data
                                        $result = mysqli_query($conn, "SELECT * FROM tbl_barang");
                                        /**
                                         * ini adalah perulangan untuk menampilkan datanya dengan menggunakan perusalangan while
                                         */
                                        while ($data = mysqli_fetch_assoc($result)) { ?>
                                         
                                         <tr>
                                             <td><?php echo $no++?></td>
                                             <td><?php echo $data['nama']?></td>
                                             <td><?php echo $data['harga']?></td>
                                             <td><?php echo $data['deskripsi']?></td>
                                             <td>
                                                 <!-- ini untuk tombol bagian edit dan hapus dan otomatis mengambil datanya-->
                                                 <a href="edit.php?id=<?php echo $data['id']?>"><i class="fas fa-edit"></i></a>
                                                 <a href="resource/destroy.php?id=<?php echo $data['id']?>"><i class="fas fa-trash-alt"></i></a>
                                             </td>
                                         </tr>

                                    <?php
                                        }
                                    ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    include_once 'layouts/footer.php';
?>