<?php

include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Halaman User Biasa</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="img/core-img/salad.png" alt="">
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="../index.html"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="halamanuservip.php">Home</a></li>
                                    <li><a href="../index.php">Logout</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>


        <!-- Memunculkan Tabel -->
        	<div class="card col-sm-13" style="background-color: #F0F8FF;">
				<div class="card-body">
				<center>
				<h3><b>DAFTAR DATA RESEP VIP</b></h3><br></center>
				<!-- Membuat tabel -->
				<table class="table table-striped" style="background-color: #F0F8FF;">
					<thead>
					<tr>
					<td><b>ID Resep</b></td>
					<td align="left"><b>Nama Resep</b></td>
                    <td align="left"><b>Foto Resep</b></td>
					<td align="left"><b>Lihat Detail Resep</b></td>					
					</tr>
					</thead>
<tbody>
	<?php 
	$data = mysqli_query($mysqli,"SELECT * FROM resep"); // memberikan perintah query sql untuk menampilkan semua data di tabel jual
	//perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
	while ($show = mysqli_fetch_array($data)) {
	?>
	<tr>
	<td><?php echo $show['id_resep'];?></td>
	<td><?php echo $show['nama_resep'];?></td>
    <td><img src="kumresep/<?php echo $show['foto_resep'];?>" width="100px"></td>
	<td>
		<center>
		<div class="btn-group" role="group" aria-label="Basic example">
			<a class="btn btn-warning" href="detailuserVip.php?id_resep=<?php echo $show['id_resep'];?>">DETAIL </a> 
		</div>
		</center>
	</td>
	</tr>
	<?php } ?>
</tbody>
</table>


    </header>
            
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="../index.php"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by by Cindy & Mega</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>