<?php

error_reporting(0);

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil User</title>
    <link rel="website icon" type="png" href="img/bahan lain/logo2.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/profiluser.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body class="bg-secondary">
    <div class="container mt-5 mb-5">
      <!--kolom 1-->
      <div class="card text-center shadow mb-5">
        <div class="card-body px-4 py-4">
          <img src="" class="profile rounded-circle w-50 border border-5" />
          <span class="fw-light d-block mb-3"
            >*Upload foto ukuran 670 x 856</span
          >
          <h1 class="mb-0">User</h1>
        </div>
      </div>
      <!--kolom 2-->

      <form s="form-inline">
        <div class="form-group mx-sm-12 mb-2">
          <label for="inputPassword2" class="sr-only">Mail</label>
          <input class="form-control" placeholder="Email" />
          &nbsp; &nbsp;
          <input class="form-control" placeholder="Username" />
          &nbsp; &nbsp;
          <input class="form-control" placeholder="Password" />
          &nbsp; &nbsp;
        </div>
        <button type="submit" class="btn btn-danger text-light mb-2">
          Simpan
        </button>
        <a
          button
          type="submit"
          class="btn btn-danger text-light mb-2"
          href="dashboard.php"
        >
          Kembali
        </a>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
