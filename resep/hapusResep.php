<?php 
include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
 
 //peritah untuk menghapus data sesuai id yang dipilih
if(isset($_GET['id_resep'])){
    if(empty($_GET['id_resep'])){
        echo "<b>Data Yang Dihapus Tidak Ada</b>";
    }
    else {
        $hapus = mysqli_query($mysqli,"DELETE FROM resep WHERE id_resep='$_GET[id_resep]'") 
            or die ("Mysql Error : ".mysqli_error($mysqli)); // query sql hapus data
        if($hapus){
            header("Location:berhasilHapus.php");
            // include "berhasilHapus.php"; //untuk ke link berhasilhapusdata.php
        }
    }
}
?>
