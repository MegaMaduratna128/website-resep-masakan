
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
		if($data['status']==2){
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['status'] = 2;
				// alihkan ke halaman dashboard user vip
				header("location:halamanuservip.php");
		
		}
		else{
	
			// alihkan ke halaman login kembali
			header("location:loginuserbiasa.php?pesan=Gagal Login");
		}	
	}else{
		header("location:loginuserbiasa.php?pesan=Gagal Login");
	}

?>