<?php

include 'connect.php';

function tambah_promo(){
    global $conn;

    $id_promo = mysqli_real_escape_string($conn, $_POST["id_promo"]);
    $id_ecom = mysqli_real_escape_string($conn, $_POST["id_ecom"]);
    $nama_promo = mysqli_real_escape_string($conn, $_POST["nm_promo"]);
    $kategori = mysqli_real_escape_string($conn, $_POST["kategori"]);
    $link_promo = mysqli_real_escape_string($conn, $_POST["link_promo"]);
    $tgl_batas = date("Y-m-d", strtotime($_POST["tanggal_batas"]));


    $query = "INSERT INTO promo (id_promo, id_ecom, nama_promo, tgl_batas, link_promo, kategori) 
              VALUES ('$id_promo', '$id_ecom', '$nama_promo', '$tgl_batas', '$link_promo', '$kategori')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_promo(){
    global $conn;
    $id_promo = $_GET["id_promo"];

    mysqli_query($conn, "DELETE FROM promo WHERE id_promo = $id_promo");

    return mysqli_affected_rows($conn);
}

function tambah_ecom(){
    global $conn;
    $id_ecom = htmlspecialchars($_POST["id_ecom"]);
    $nama_ecom = htmlspecialchars($_POST["nama_ecom"]);
    $link_ecom = htmlspecialchars($_POST["link_ecom"]);

    mysqli_query($conn, "INSERT INTO e_comerce (id_ecom, nama_ecom, link_ecom) VALUES ('$id_ecom', '$nama_ecom', '$link_ecom')");

    return mysqli_affected_rows($conn);
}

function hapus_ecom(){
    global $conn;
    $id_ecom = $_GET["id_ecom"];

    mysqli_query($conn, "DELETE FROM promo WHERE id_ecom = $id_ecom");

    return mysqli_affected_rows($conn);
}

function tambah_wishlist(){
    global $conn;
    $nama_promo = htmlspecialchars($_POST["nama_promo"]);
    $tgl_batas = date("Y-m-d", strtotime(htmlspecialchars($_POST["tanggal_batas"])));
    $url = htmlspecialchars($_POST["link_promo"]);
    $kategori = htmlspecialchars($_POST["kategori"]);

    mysqli_query($conn, "INSERT INTO promo (nama_promo, tgl_batas, link_promo, kategori) VALUES ('$nama_promo', '$tgl_batas', '$url', '$kategori')");

    return mysqli_affected_rows($conn);
}

function hapus_wishlist(){
    global $conn;
    $id_promo = $_GET["id_promo"];

    mysqli_query($conn, "DELETE FROM promo WHERE id_promo = $id_promo");

    return mysqli_affected_rows($conn);
}

?>