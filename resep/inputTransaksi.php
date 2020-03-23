<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi User VIP | Transaksi</title>
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

			<form action="inputTransaksi_proses.php" class="inner-login" method="post"> <!-- supaya bisa di proses di ceklogin.php -->

        		<h2 class="text-center title-login">&nbsp;&nbsp;&nbsp;REGISTRASI USER VIP</h2> 

            	<div class="form-group"> <!-- agar tulisan tgl dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">Tanggal Transaksi</label>
               		<input type "text" name="tgl_transaksi" id="tgl_transaksi" class="form-control" placeholder="yyyy-mm-dd">
           		</div>

        		<div class="form-group"><!-- agar tulisan nama dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">Nama</label>
                	<input type="text" name="nama" id="nama" class="form-control">
				</div>

                <div class="form-group"><!-- agar tulisan jmlah dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">Jumlah Transaksi</label>
                	<input type="text" name="jumlah_transaksi" id="jumlah_transaksi" class="form-control">
				</div>

                <div class="form-group"><!-- agar tulisan bukti dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">Bukti Transaksi</label>
                	<input type="file" name="bukti_transaksi" value="upload" id="bukti_transaksi" class="form-control">
				</div>

                
                                    <center> <!-- Tombol simpan, batal, dan back  -->
                                    <th colspan="2" scope="row"><input type="submit" class="btn btn-success" name="simpan" id="simpan" value="Simpan" />
                                    <input type="reset" class="btn btn-success" name="button2" id="button2" value="Batal" /></th>
                                    <center>
                                    <br>
                                    <a class="btn btn-secondary btn-lg btn-block" href="../index.php">kembali</a>
			</form>
			</div>
		</div>
	</div>
</div>	
<br><br><br>
</body>
</html>

