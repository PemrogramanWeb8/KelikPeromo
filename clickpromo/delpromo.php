<?php
session_start();

include 'php/connect.php';
include 'php/fungsi.php';

$promo_data = get_all_promo();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id_promo = $_POST["id_promo"];
    $result = hapus_promo($id_promo);
    if ($result) {
        echo '<script>alert("Data berhasil dihapus.");</script>';

        $gambar_promo = $promo['gambar_promo'];
        $path = 'img/promo/' . $gambar_promo;
        if (file_exists($path)) {
            unlink($path);
        }

        // Refresh halaman
        echo '<script>window.location.href = "delpromo.php";</script>';
    } else {
        // Terjadi kesalahan saat menghapus data
        echo '<script>alert("Terjadi kesalahan saat menghapus data.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Delete Promo</title>
    <link rel="website icon" type="png" href="img/bahan lain/logo2.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="css/delpromo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-secondary">
    <!--kolom-->
    <div class="tabel1 mt-5">
        <?php
        if (!empty($promo_data)) {
            echo '<table id="t01">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID Promo</th>';
            echo '<th>Nama Promo</th>';
            echo '<th>Tanggal Batas</th>';
            echo '<th>Aksi</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($promo_data as $promo) {
                echo '<tr>';
                echo '<td>' . $promo['id_promo'] . '</td>';
                echo '<td>' . $promo['nama_promo'] . '</td>';
                echo '<td>' . $promo['tgl_batas'] . '</td>';
                echo '<td>';
                echo '<form method="POST" action="' . $_SERVER['PHP_SELF'] . '">';
                echo '<input type="hidden" name="id_promo" value="' . $promo['id_promo'] . '">';
                echo '<button type="submit" class="btn btn-danger text-light">Hapus</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>Tidak ada promo yang ditambahkan.</p>';
        }
        ?>
    </div>

    <a button type="submit" class="btn btn-danger text-light mb-2" href="administrator.php"><< Kembali</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
