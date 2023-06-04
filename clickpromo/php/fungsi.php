<?php

include 'connect.php';

function tambah_promo($gambar){
    global $conn;

    $id_promo = mysqli_real_escape_string($conn, $_POST["id_promo"]);
    $id_ecom = mysqli_real_escape_string($conn, $_POST["id_ecom"]);
    $nama_promo = mysqli_real_escape_string($conn, $_POST["nm_promo"]);
    $kategori = mysqli_real_escape_string($conn, $_POST["kategori"]);
    $link_promo = mysqli_real_escape_string($conn, $_POST["link_promo"]);
    $tgl_batas = date("Y-m-d", strtotime($_POST["tanggal_batas"]));

    $query = "INSERT INTO promo (id_promo, id_ecom, nama_promo, tgl_batas, link_promo, kategori, gambar_promo) 
              VALUES ('$id_promo', '$id_ecom', '$nama_promo', '$tgl_batas', '$link_promo', '$kategori', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus_promo($id_promo){
    global $conn;

    $id_promo = mysqli_real_escape_string($conn, $id_promo);
    $query = "DELETE FROM promo WHERE id_promo = '$id_promo'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function get_all_promo() {
    global $conn;

    $query = "SELECT * FROM promo ORDER BY tgl_batas ASC";
    $result = mysqli_query($conn, $query);

    $promo_data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $promo_data[] = $row;
    }

    return $promo_data;
}


function tambah_ecom($gambar) {
    global $conn;
    $id_ecom = mysqli_real_escape_string($conn, $_POST["id_ecom"]);
    $nama_ecom = mysqli_real_escape_string($conn, $_POST["nama_ecom"]);
    $link_ecom = mysqli_real_escape_string($conn, $_POST["link_ecom"]);

    $gambar_name = '';
    if (isset($_FILES['gambar_ecom'])) {
        $gambar_name = $_FILES['gambar_ecom']['name'];
        $gambar_tmp = $_FILES['gambar_ecom']['tmp_name'];
        $gambar_path = 'img/e_com/' . $gambar_name;

        move_uploaded_file($gambar_tmp, $gambar_path);
    }

    $query = "INSERT INTO e_comerce (id_ecom, nama_ecom, link_ecom, gambar_ecom) 
              VALUES ('$id_ecom', '$nama_ecom', '$link_ecom', '$gambar_name')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus_ecom($id_ecom) {
    global $conn;
    $id_ecom = mysqli_real_escape_string($conn, $id_ecom);

    mysqli_query($conn, "DELETE FROM e_comerce WHERE id_ecom = '$id_ecom'");

    return mysqli_affected_rows($conn);
}

function get_all_ecom() {
    global $conn;

    $query = "SELECT * FROM e_comerce";
    $result = mysqli_query($conn, $query);

    $ecom_data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $ecom_data[] = $row;
    }

    return $ecom_data;
}

function sendFeedback($feedback, $conn, $id_cust) {
    $resultMessage = '';

    $insertQuery = "INSERT INTO feedback (id_cust, konten) VALUES ('', '$id_cust', '$feedback')";
    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
        // penyimpanan berhasil
        return true;
    } else {
        // terjadi kesalahan saat penyimpanan
        return false;
    }

}

function tambah_wishlist($conn, $id_promo, $id_cust, $link_promo, $tgl_batas, $nama_promo){
    $query = "INSERT INTO wishlist (id_promo, id_cust, link_promo, tgl_batas, Nama_promo) 
              VALUES ('$id_promo', '$id_cust', '$link_promo', '$tgl_batas', '$nama_promo')";
  
    $result = mysqli_query($conn, $query);
  
    if ($result) {
      return mysqli_affected_rows($conn);
    } else {
      return mysqli_error($conn);
    }
}  

function hapus_wishlist(){
    global $conn;
    $id_promo = $_GET["id_promo"];

    mysqli_query($conn, "DELETE FROM promo WHERE id_promo = $id_promo");

    return mysqli_affected_rows($conn);
}

?>