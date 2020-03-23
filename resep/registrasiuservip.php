<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi User Vip</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<style> /* css untuk mengatur tampilan login supaya berada di tengah */
		#index{
   			margin-top: 100px;
			margin-left: 380px;
		}
	</style>
</head>
<body background="foto/bg-4.jpg"> <!-- untuk memberi background -->
<div id="index"> <!-- memanggil id css index -->
	<div class="container"> <!-- supaya tampilan tidak full satu layar/kepotong -->
    	<div class="card col-sm-6"  style="background-color: #CCCCFF;"> <!-- membuat tabel latar -->
			<div class="card-body"> <!-- membuat tabel latar -->
            
			<form action="cekregistrasiuservip.php" class="inner-login" method="post"> <!-- supaya bisa di proses di ceklogin.php -->
        		<h2 class="text-center title-login">REGISTRASI</h2> 

            	<div class="form-group"> <!-- agar tulisan username dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">USERNAME</label>
               		<input type "text" name="username" class="form-control" value="">
           		</div>

        		<div class="form-group"><!-- agar tulisan password dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">PASSWORD</label>
                	<input type="password" name="password" class="form-control" value="">
				</div>

                <div class="form-group"> <!-- agar tulisan alamat dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">ALAMAT</label>
               		<input type "text" name="alamat_vip" class="form-control" value="">
           		</div>

                <div class="form-group"> <!-- agar tulisan email dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">E-MAIL</label>
               		<input type "text" name="email_vip" class="form-control" value="">
           		</div>

                <div class="form-group"> <!-- agar tulisan no hp dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">NOMER HP</label>
               		<input type "text" name="nohp_vip" class="form-control" value="">
           		</div>

                    <br>
					<input type="submit" name="daftar" id="daftar" class="btn btn-primary btn-md btn-block" value="Daftar" /><br> 
			</form> 
			</div> 
		</div>
	</div>
</div>  <br><br><br><br> 	
</body>
</html>