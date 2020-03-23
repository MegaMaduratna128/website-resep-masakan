<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $id_resep = $_POST['id_resep'];
    $id_jenis = $_POST['id_jenis'];
    $nama_resep = $_POST['nama_resep'];
    $bahan_resep = $_POST['bahan_resep'];
    $cara_resep = $_POST['cara_resep'];
    $foto_resep = $_POST['foto_resep'];

  $query = "UPDATE resep SET id_jenis='$id_jenis',nama_resep='$nama_resep', bahan_resep='$bahan_resep', cara_resep='$cara_resep', foto_resep='$foto_resep' WHERE resep.id_resep='$id_resep'";

  $result = mysqli_query($mysqli, $query);

  if(!$result){
    echo 'Data berhasil di simpan! '; 
    echo '<a href="resepAdm.php?id_resep='.$id_resep.'"> Kembali</a>';
    
  }else{
    echo 'Gagal menyimpan data! ';
    echo '<a href="editResep.php?id='.$id_resep.'"> Kembali</a>';
    
  }
}

//lakukan redirect ke halaman dataAdmin.php
header("location:resepAdm.php");

?>