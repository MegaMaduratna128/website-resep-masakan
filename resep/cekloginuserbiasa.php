
<?php
include 'koneksi.php';
    session_start();
	$error='';
	$uname = $_POST["username"];
	$pass = $_POST["password"];
	
	$login = mysqli_query($mysqli,"select * from user where username='$uname' and password='$pass'");
// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);
	
	// cek apakah username dan password di temukan pada database
	if($cek > 0){
	
		$data = mysqli_fetch_assoc($login);
	
		// cek jika user login sebagai admin
		if($data['status']==1){
	
			// buat session login dan username
			$_SESSION['username'] = $uname;
			$_SESSION['status'] = 1;
			// alihkan ke halaman dashboard user biasa
			header("location:halamanuserbiasa.php");
	
		}
		else{
	
			// alihkan ke halaman login kembali
			header("location:loginuserbiasa.php?pesan=Gagal Login");
		}	
	}else{
		header("location:loginuserbiasa.php?pesan=Gagal Login");
	}

?>