<?php
session_start();

include 'php/connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $admin_id = $_SESSION["akun-user"]["id_admin"];

    // Update data admin di database sesuai dengan nilai yang diinputkan
    $updateQuery = "UPDATE administrator SET Username = '$username', Email = '$email', Password = '$password' WHERE id_admin = $admin_id";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        echo '<script>alert("Data admin berhasil diperbarui.");</script>';
        echo '<script>window.location.href = "administrator.php";</script>';
    } else {
        echo '<script>alert("Terjadi kesalahan saat memperbarui data admin.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Admin</title>
    <link rel="website icon" type="png" href="img/profil/alang1.jpg" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/profil.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="bg-secondary">
    <div class="container mt-5 mb-5">
        <!--kolom 1-->
        <div class="card text-center shadow mb-5">
            <div class="card-body px-4 py-4">
                <h1 class="mb-4">GANTI PROFIL</h1>
                <form method="POST">
                    <div class="form-group">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required />
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                    </div>
                    <button type="submit" class="btn btn-danger text-light mt-3 mb-2">Simpan</button>
                    <a href="administrator.php" class="btn btn-danger text-light mt-3 mb-2">&lt;&lt; Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-capitalize text-center">
                    &copy; 2023 - Click Promo
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
