<?php
// memanggil file conSQL.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['simpan'])) {

	// membuat variabel untuk menampung data dari form
	
  $tgl_transaksi = $_POST['tgl_transaksi'];
  $nama = $_POST['nama'];
  $jumlah_transaksi = $_POST['jumlah_transaksi'];
  $bukti_transaksi = $_POST['bukti_transaksi'];

  // jalankan query INSERT untuk menambah data ke database
  // $query = "INSERT INTO resep_vip VALUES (NULL, '$nama_resepvip', '$bahan_resepvip', '$cara_resepvip', '$foto_resepvip')";

  // $result = mysqli_query($mysqli, $query);
  $data = mysqli_query($mysqli,"INSERT INTO transaksi SET id_transaksi=NULL, id_jenistransaksi=2, tgl_transaksi='$tgl_transaksi',nama='$nama',jumlah_transaksi='$jumlah_transaksi',bukti_transaksi='$bukti_transaksi' ") 
  or die ("data salah : ".mysqli_error($mysqli));

  if(!$result){
    echo 'Data berhasil di simpan! '; 
    echo '<a href="registrasiuservip.php?id='.$id.'"> Kembali</a>';
    
  }else{
    echo 'Gagal menyimpan data! ';
    echo '<a href="inputTransaksi.php?id='.$id.'"> Kembali</a>';
    
  }
}

// melakukan redirect (mengalihkan) ke halaman registrasiuservip.php
header("location:registrasiuservip.php");
?>