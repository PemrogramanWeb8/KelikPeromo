<?php
include 'connect.php';
require_once 'fungsi.php';

if (isset($_POST['id_promo'])) {
  $promoId = $_POST['id_promo'];

  $promo_query = "SELECT * FROM promo WHERE id_promo = ?";
  $stmt = mysqli_prepare($conn, $promo_query);
  mysqli_stmt_bind_param($stmt, "i", $promoId);
  mysqli_stmt_execute($stmt);
  $promo_result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($promo_result) > 0) {
    $promo_row = mysqli_fetch_assoc($promo_result);

    $id_promo = $promo_row['id_promo'];
    $id_cust = $_SESSION['id_cust'];
    $link_promo = $promo_row['link_promo'];
    $tgl_batas = $promo_row['tgl_batas'];
    $nama_promo = $promo_row['Nama_promo'];

    tambah_wishlist($conn, $id_promo, $id_cust, $link_promo, $tgl_batas, $nama_promo);
  } else {
    echo "<script>alert('Promo tidak ditemukan.');</script>";
  }
}
?>
