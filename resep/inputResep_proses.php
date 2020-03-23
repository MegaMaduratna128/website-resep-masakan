<?php
// memanggil file conSQL.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['simpan'])) {

	// membuat variabel untuk menampung data dari form
  
  $id_jenis = $_POST['id_jenis'];
  $nama_resep = $_POST['nama_resep'];
  $bahan_resep = $_POST['bahan_resep'];
  $cara_resep = $_POST['cara_resep'];
  $foto_resep = $_POST['foto_resep'];

  // jalankan query INSERT untuk menambah data ke database
  // $query = "INSERT INTO resep_biasa VALUES (NULL, '$nama_resepbiasa', '$bahan_resepbiasa', '$cara_resepbiasa', '$foto_resepbiasa')";

  // $result = mysqli_query($mysqli, $query);

  $data = mysqli_query($mysqli,"INSERT INTO resep SET id_resep=NULL,id_jenis='$id_jenis', nama_resep='$nama_resep',bahan_resep='$bahan_resep',cara_resep='$cara_resep', foto_resep='$foto_resep'") 
  or die ("data salah : ".mysqli_error($mysqli));

  if(!$result){
    echo 'Data berhasil di simpan! '; 
    echo '<a href="resepAdm.php?id='.$id.'"> Kembali</a>';
    
  }else{
    echo 'Gagal menyimpan data! ';
    echo '<a href="inputResep.php?id='.$id.'"> Kembali</a>';
    
  }
}

// melakukan redirect (mengalihkan) ke halaman dataAdmin.php
header("location:resepAdm.php");
?>