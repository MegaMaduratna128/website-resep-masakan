<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi User Biasa</title>
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

			<form action="cekregistrasiuserbiasa.php" class="inner-login" method="post"> <!-- supaya bisa di proses di ceklogin.php -->

        		<h2 class="text-center title-login">REGISTRASI AKUN USER BIASA</h2> 

            	<div class="form-group"> <!-- agar tulisan username dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">USERNAME</label>
               		<input type "text" name="username" class="form-control" value="">
           		</div>

        		<div class="form-group"><!-- agar tulisan password dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">PASSWORD</label>
                	<input type="password" name="password" class="form-control" value="">
				</div>

                
                                    <center> <!-- Tombol simpan, batal, dan back  -->
                                    <th colspan="2" scope="row"><input type="submit" class="btn btn-success" name="daftar" id="daftar" value="Daftar" />
                                    <input type="reset" class="btn btn-success" name="button2" id="button2" value="Batal" /></th>
                                    <center>
                                    <br>
                                    <a class="btn btn-secondary btn-lg btn-block" href="../index.php">kembali</a>
			</form>
			</div>
		</div>
	</div>
</div>	
</body>
</html>