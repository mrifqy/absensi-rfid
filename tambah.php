<?php
    include "koneksi.php";

    session_start(); 
    //echo $_SESSION['username'];

    if(empty($_SESSION['username'])) {
        echo "
            <script>
                alert('Anda belum login. Silakan login terlebih dahulu.');
                document.location.href = 'index.php';
            </script>
        ";
    }
        

    // Jika tombol simpan diklik
    if(isset($_POST['btnSubmit'])){
        // baca isi inputan form
        $nokartu = $_POST['nokartu'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        // simpan ke tabel karyawan
        $simpan = mysqli_query($konek, "insert into karyawan(no_kartu, nama, alamat) values('$nokartu', '$nama', '$alamat')");

        // Jika berhasil tersimpan, tampilkan pesan tersimpan kembali ke data karyawan
        if($simpan){
            echo "
                <script>
                    alert('Tersimpan');
                    location.replace('datakaryawan.php');
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Gagal Tersimpan');
                    location.replace('datakaryawan.php');
                </script>
            ";
        }

    }

    // kosongkan tabel tmprfid
    mysqli_query($konek, "delete from tmprfid")
?>

<!DOCTYPE html>
 <html>
 <head>
     <?php include "header.php"; ?>
     <title>Tambah Data Karyawan</title>

     <!-- pembacaan no kartu otomatis -->
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#norfid").load('nokartu.php')
            }, 0); //pembacaan file nokartu.php, tiap 1 detik
        });
    </script>
 </head>
 <body>
    <?php include "menu.php"; ?>

    <!-- isi -->
    <div class="container">
        <h3>Tambah Data Karyawan</h3>

        <form action="" method="POST">
            <div id="norfid"> </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="nama" placeholder="Nama Karyawan" name="nama">
                <label for="nama">Nama Karyawan</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <textarea class="form-control" placeholder="Alamat" id="alamat" name="alamat" style="height: 100px"></textarea>
                <label for="alamat">Alamat</label>
            </div>

            <input class="btn btn-primary mb-5" name="btnSubmit" type="submit" value="Simpan">
        </form>
        
    </div>
     
    <?php include "footer.php"; ?>
 </body>
 </html>