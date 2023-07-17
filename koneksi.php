<?php
$koneksi = new mysqli('localhost','root','','coffeeshopu')
or die (mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nmPesanan = $_POST['nmPesanan'];
    $mdPembayaran = $_POST['mdPembayaran'];
    $catatan = $_POST['catatan'];
    $koneksi->query("INSERT INTO pesanan (id, nmPesanan, mdPembayaran, catatan) values ('$id','$nmPesanan','$mdPembayaran','$catatan')");

    header('location:pesanan.php');
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM pesanan where id ='$id'");
    header("location:pesanan.php");
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nmPesanan = $_POST['nmPesanan'];
    $mdPembayaran = $_POST['mdPembayaran'];
    $catatan = $_POST['catatan'];
    $koneksi->query("UPDATE pesanan SET id='$id',nmPesanan='$nmPesanan',mdPembayaran='$mdPembayaran',catatan='$catatan'");

    header("location:pesanan.php");
}
?>