<!DOCTYPE html>
<head>
    <?php 
        include "header.php"; 
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
    <title>Scan Kartu</title>

    <!-- scanning kartu rfid -->
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#cekkartu").load('bacakartu.php')
            }, 2000);
        });
    </script>
</head>
<body>

    <?php include "menu.php"; ?>

<!-- Isi -->

    <div class="container-fluid" style="padding-top: 10%">
        <div id="cekkartu"></div>
        
    </div>
    <br>

    <?php include "footer.php"; ?>
</body>
</html>