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
  </head>
  <body class="bg-secondary">
    <div class="container mt-5 mb-5">
      <!--kolom 1-->
      <div class="card text-center shadow mb-5">
        <div class="card-body px-4 py-4">
          <img
            src="img/profil/alang1.jpg"
            class="profile rounded-circle w-50 border border-5"
          />
          <h1 class="mb-0">Alang Artha Iwana</h1>
          <span class="fw-light d-block mb-3">Web Developer</span>
          <p class="card-text">
            "Jadilah seseorang yang tak terbatas oleh batasan satu bidang, melainkan melebur dengan keajaiban di setiap aspek teknologi"
          </p>
        </div>
        <div class="card-footer bg-white fs-3">
          <a href="https://facebook.com" class="text-secondary">
            <i class="fa-brands fa-facebook"></i
          ></a>
          <a href="https://instagram.com" class="text-secondary">
            <i class="fa-brands fa-square-instagram"></i
          ></a>
        </div>
      </div>
      <!--kolom 2-->
      <div class="form-group mx-sm-12 mb-2">
        <label for="inputPassword2" class="sr-only">Admin</label>
        <input class="form-control" placeholder="Nama" />
        &nbsp; &nbsp;
        <input class="form-control" placeholder="Email" />
        &nbsp; &nbsp;
        <input class="form-control" placeholder="Username" />
        &nbsp; &nbsp;
        <input class="form-control" placeholder="Password" />
        &nbsp; &nbsp;
      </div>

      <!-- kolom 3 -->
      <div class="card shadow mt-5">
        <div class="card-header bg-light fw-bold">E-Commerce Admin</div>
        <div class="card-body">
          <div class="row row-cols-5 fs-1 text-secondary text-center">
            <div class="col">
              <img src="img/profil/shopee.png"></img>
            </div>
            <div class="col">
                <img src="img/profil/tokopedia.png"></img>
              </div>
            <div class="col">
                <img src="img/profil/zara.png"></img>
              </div> 
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-danger text-light mt-3 mb-2">
        Simpan
      </button>
      <a
        button
        type="submit"
        class="btn btn-danger text-light mt-3 mb-2"
        href="administrator.php"
      >
        Kembali
      </a>

    </div>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-md-12 text-capitalize text-center text-light">
          Copyright <span>Click Promo</span> 2023 - CLICKPROMO.COM
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
