<?php
session_start();

include 'php/connect.php';
include 'php/fungsi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $result = tambah_promo();
    if ($result) {
        // Data berhasil ditambahkan
        echo '<script>alert("Data berhasil ditambahkan.");</script>';
    } else {
        // Terjadi kesalahan saat menambahkan data
        echo '<script>alert("Terjadi kesalahan saat menambahkan data.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit E-commerce</title>
    <link rel="website icon" type="png" href="img/bahan lain/logo2.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="css/edit.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-secondary">
    <div class="container mt-5 mb-5">
        <!--kolom 1-->
        <div class="card text-center shadow mb-5">
            <div class="card-body px-4 py-4">
                <img src="img/shopee/shop1.jpg" class="profile rounded-circle w-50 border border-5" />
            </div>
        </div>
        <!--kolom 2-->

        <form method="POST" class="form-inline">
            <div class="form-group mx-sm-12 mb-2">
                <label for="id_promo" class="sr-only">promo</label>
                <input class="form-control" type="text" name="id_promo" placeholder="id_promo" required />
                &nbsp; &nbsp;
                <input class="form-control" type="text" name="id_ecom" placeholder="id_ecom" required />
                &nbsp; &nbsp;
                <input class="form-control" type="text" name="nm_promo" placeholder="nm_promo" required />
                &nbsp; &nbsp;
                <input class="form-control" type="text" name="kategori" placeholder="kategori" required />
                &nbsp; &nbsp;
                <input class="form-control" type="text" name="link_promo" placeholder="url" required />
                &nbsp; &nbsp;
                <input class="form-control" type="date" name="tanggal_batas" placeholder="tgl_batas_promo" required />
                &nbsp; &nbsp;
            </div>
            <button type="submit" class="btn btn-danger text-light mb-2">Tambah</button>
            <a button type="submit" class="btn btn-danger text-light mb-2" href="administrator.php">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
