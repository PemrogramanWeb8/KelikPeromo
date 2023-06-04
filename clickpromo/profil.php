<?php
error_reporting(0);
session_start();

include 'php/connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cust_id = $_SESSION["akun-user"]["id_cust"];

    $updateQuery = "UPDATE customer SET Username = '$username', Email = '$email', Password = '$password' WHERE id_cust = $cust_id";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        echo '<script>alert("Data customer berhasil diperbarui.");</script>';
    } else {
        echo '<script>alert("Terjadi kesalahan saat memperbarui data customer.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil User</title>
    <link rel="website icon" type="png" href="img/bahan lain/logo2.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
          crossorigin="anonymous" />
    <link rel="stylesheet" href="css/profiluser.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-secondary">
<div class="container mt-5 mb-5">
    <!--kolom 1-->
    <div class="card text-center shadow mb-5">
        <div class="card-body px-4 py-4">
            <h1 class="mb-0">User</h1>
        </div>
    </div>
    <!--kolom 2-->

    <form method="POST" class="form-inline">
        <div class="form-group mx-sm-12 mb-2">
            <label for="email" class="sr-only">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required />
            &nbsp; &nbsp;
            <label for="username" class="sr-only">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required />
            &nbsp; &nbsp;
            <label for="password" class="sr-only">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
            &nbsp; &nbsp;
        </div>
        <button type="submit" class="btn btn-danger text-light mb-2">
            Simpan
        </button>
        <a button type="submit" class="btn btn-danger text-light mb-2" href="dashboard.php">
            << Kembali
        </a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
