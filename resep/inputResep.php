<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Halaman Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/normalize.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style1.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="admin/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <style> /* css untuk mengatur tampilan login supaya berada di tengah */
		#index{
   			margin-top: 50px;
			margin-left: 380px;
		}
	</style>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="admin/img/message/admin1.png" alt="" />
                    </a>
                    <h3>ADMIN</h3>
                    <strong>ADM</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">RESEP</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="resepAdm.php" class="dropdown-item">Resep</a>
                            </div>
                        </li>
                   
            
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">TRANSAKSI</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="transaksiAdm.php" class="dropdown-item">Transaksi</a>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="admin/img/logo/logo.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="halamanadmin.php" class="nav-link">Home</a>
                                        <li class="nav-item"><a href="../index.php" class="nav-link">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->

            <div id="index"> 
            <div class="container">
            <div class="card col-sm-6" style="background-color: #CCCCFF;"> 
 
            <form action="inputResep_proses.php" class="inner-login" method="post"> 
                  <tr>
                  <th colspan="2" scope="row"><h2><b>&nbsp;&nbsp;&nbsp;&nbsp; INPUT DATA RESEP BARU</b></h2></th> 
                  </tr>

                    <br><br>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row">Jenis Resep </th> <br>
                <td><input type="text" name="id_jenis" id="id_jenis" class="form-control" placeholder="1 (Resep Biasa) / 2 (Resep Vip)"></td>
                </tr>
                </div>
                <br>
                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row">Nama Resep </th> <br>
                <td><input type="text" name="nama_resep" id="nama_resep" class="form-control"></td>
                </tr>
                </div>
                 <br>
                <div class="form-group">
                <tr>
                <label for="exampleFormControlTextarea1">Bahan Resep</label>
                <textarea class="form-control" name="bahan_resep" id="bahan_resep" rows="3"></textarea>
                </tr>
                </div>
                    <br>
                <div class="form-group">
                <tr>
                <label for="exampleFormControlTextarea1">Cara Memasak</label>
                <textarea class="form-control" name="cara_resep" id="cara_resep" rows="3"></textarea>
                </tr>
                </div>
                    <br>
                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row">Gambar Masakan</th> 
                <td><input type="file" name="foto_resep" value="upload" id="foto_resep" size="30" maxlength="30" class="form-control"></td>
                </tr>
                </div>
                <br>
            
                 <tr>
                  <th colspan="2" scope="row">
                  <input type="submit" name="simpan" id="simpan" class="btn btn-success" value="Simpan" />
                  <input type="reset" name="reset" id="reset" class="btn btn-success" value="Batal" /></th>
                  </tr>
                <br>
                <br>
                <tr>
                <p>  <a class="btn btn-success" href="resepAdm.php">Kembali</a></a><p> 
                </tr>
            
        </div>
    </div>
</div>
</form>
           
            <!-- Register Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-register-form" class="adminpro-form">
                           
                                 
                                   
                              
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Register End-->
        </div>
    </div>

     <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Cindy & Mega</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="admin/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="admin/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="admin/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="admin/js/jquery.form.min.js"></script>
    <script src="admin/js/jquery.validate.min.js"></script>
    <script src="admin/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="admin/js/main.js"></script>
</body>

</html>