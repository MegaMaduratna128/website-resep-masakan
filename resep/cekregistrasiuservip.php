<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['daftar'])){
$username = $_POST['username']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$password = $_POST['password'];
$alamat_vip = $_POST['alamat_vip'];
$email_vip = $_POST['email_vip'];
$nohp_vip = $_POST['nohp_vip'];


//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO user SET status=2, username='$username',password='$password',alamat_vip='$alamat_vip',email_vip='$email_vip',nohp_vip='$nohp_vip' ") 
or die ("data salah : ".mysqli_error($mysqli));
 
//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
    include "berhasilregistrasi.php"; //berhasilsimpanregister.php berfungsi untuk memberi tahu bahwa data berhasil disimpan
} else {
echo "Gagal Input Data!!!";
echo "<br><a href='registrasiuservip.php'>Kembali</a>"; // berfungsi untuk kembali ke halaman register.php
    }
}
?>
