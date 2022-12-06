<!DOCTYPE html>
<head>
    <?php include "header.php"; ?>
    <title>Rekapitulasi Absensi</title>
</head>
<body>

<?php
    include "menu.php";
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
?>

<!-- Isi -->

<div class="container-fluid">
    <h1 class="mb-5">Rekap Absensi</h1>

    <table class="table table-bordered mb-5">
        <thead>
            <tr style="background-color: grey; color:white">
                <th style="width: 10px; text-align: center">No.</th>
                <th style="text-align: center">Nama</th>
                <th style="text-align: center">Tanggal </th>
                <th style="text-align: center">Jam Masuk </th>
                <th style="text-align: center">Jam Pulang </th>
            </tr>
        </thead>
        <tbody>
                <?php 
            

                    //baca tabel absensi dan relasikan dengan tabel mahasiswa berdasarkan nomor kartu rfid untuk tanggal hari ini

                    //baca tanggal saat ini 
                    date_default_timezone_set('Asia/Jakarta');
                    $tanggal = date('Y-m-d');

                    //filter absensi berdasarkan tanggal saat ini
                    $sql = mysqli_query($konek,"SELECT b.nama, a.tanggal, a.jam_masuk, a.jam_pulang FROM absensi a, karyawan b WHERE a.nokartu=b.no_kartu AND a.tanggal='$tanggal'");

                    $no = 0;
                    while($data = mysqli_fetch_array($sql)){
                        $no++;

                ?>
            <tr>
                <td> <?php echo $no; ?></td>
                <td> <?php echo $data['nama']; ?></td>
                <td> <?php echo $data['tanggal']; ?></td>
                <td> <?php echo $data['jam_masuk']; ?></td>
                <td> <?php echo $data['jam_pulang']; ?></td>

                <td></td>
                <td></td>
            </tr>

            <?php
                    }
            ?>
        </tbody>
    </table>
</div >

    <?php include "footer.php"; ?>
</body>
</html>