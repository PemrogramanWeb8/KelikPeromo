<?php

error_reporting(0);

session_start();

include 'php/connect.php';
include 'php/fungsi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $feedback = $_POST["feedback"];
    $id_cust = $_SESSION["akun-user"]["id_cust"];
    $resultMessage = sendFeedback($feedback, $conn, $id_cust);
    echo "<script>alert('$resultMessage');</script>";
    
    if ($result) {
      echo "<script>alert('Feedback berhasil dikirim.'); window.location.href = 'dashboard.php';</script>";
    } else {
      echo "<script>alert('Terjadi kesalahan saat menyimpan feedback.');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/counter.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/home.css" />

    <title>ClickPromo</title>
    <link rel="website icon" type="png" href="img/bahan lain/logo2.png" />
  </head>
  <body>
    <div class="container-fluid" style="background-color: #ffffff">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">CLICKPROMO</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="dashboard.php"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="e-com.php">E-Commerce</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Kontak
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="alang.html">Alang Artha</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="amdila.html"
                    >Amdilla Rahmadi</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="kia.html">Kia Putri</a>
                </div>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="promo.php"
                  tabindex="-1"
                  aria-disabled="true"
                  >Promo</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="profil.php"
                  tabindex="-1"
                  aria-disabled="true"
                  >Profil</a
                >
              </li>
            </ul>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="btn btn-lg btn-danger text-light ml-5" href="wishlist.php"
                  ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i
                ></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!--slider start -->

    <div class="bd-example">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="img/bahan lain/shop 1.jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <p class="slider-title">HANYA DENGAN SATU CLICK</p>
              <p class="slider-text">Terdapat promo menarik setiap harinya</p>
              <p class="buttob mt-5">
                <a href="logout.php" class="btn btn-danger btn-lg"><< KELUAR</a>
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="img/bahan lain/shop 2.jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <p class="slider-title">BURUAN AMBIL PROMO SEKARANG JUGA !!!</p>
              <p class="slider-text">promo menarik dari setiap e-commerce</p>
              <p class="buttob mt-5">
                <a href="logout.php" class="btn btn-danger btn-lg">KELUAR</a>
              </p>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!--slider end-->

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <div class="outer-div">
            <div class="inner-div1">
              <h1 class="zoom-box-text">PRIA</h1>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="outer-div">
            <div class="inner-div2">
              <h1 class="zoom-box-text">WANITA</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--counter start-->
    <div class="container counter">
      <div
        class="row justify-content-center mt-5 mb-2"
        style="padding-top: 150px"
      >
        <h1 class="text-capitalize">
          <strong>Mega sale akan segera dimulai </strong>
        </h1>
      </div>

      <div
        class="row justify-content-center rounded-pill mt-5"
        style="padding-bottom: 100px; font-size: 70px"
        id="countdown"
      ></div>

      <div class="row mt-1 pb-5">
        <div class="col-md-12 text-center">
        </div>
      </div>
    </div>
    <!--counter end-->

    <div class="container">
      <div class="row mt-5 mb-5">
        <div class="col-md-12">
          <h1 class="text-center">Hari Ini</h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel">
        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/baju/baju3.jpg" />
            <div class="card-body">
              <div class="card-title">Product1</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/baju/baju4.jpg" />
            <div class="card-body">
              <div class="card-title">Product2</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img
              class="card-img-top img-fluid"
              src="img/celana/celanapendek.webp"
            />
            <div class="card-body">
              <div class="card-title">Product3</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/jam/jam2.webp" />
            <div class="card-body">
              <div class="card-title">Product4</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/sepatu/sepatu1.webp" />
            <div class="card-body">
              <div class="card-title">Product5</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img
              class="card-img-top img-fluid"
              src="img/celana/promocelana.jpg"
            />
            <div class="card-body">
              <div class="card-title">Product6</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/sendal/sendal1.webp" />
            <div class="card-body">
              <div class="card-title">Product7</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/jam/jam4.jpg" />
            <div class="card-body">
              <div class="card-title">Product8</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row mt-5 mb-5">
        <div class="col-md-12">
          <h1 class="text-center">Akan Datang</h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel">
        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/baju/baju.jpg" />
            <div class="card-body">
              <div class="card-title">Product1</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/celana/celana1.jpg" />
            <div class="card-body">
              <div class="card-title">Product2</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/sepatu/M3.jpg" />
            <div class="card-body">
              <div class="card-title">Product3</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/celana/M4.jpg" />
            <div class="card-body">
              <div class="card-title">Product4</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/celana/M5.jpg" />
            <div class="card-body">
              <div class="card-title">Product5</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/celana/M6.jpg" />
            <div class="card-body">
              <div class="card-title">Product6</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/jam/jam3.jpg" />
            <div class="card-body">
              <div class="card-title">Product7</div>
              <div class="card-text">
                <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="discount">
      <div class="container discount-session-content">
        <div class="row">
          <div class="col-md-6">
            <div class="logo2">
              <img
                src="img/bahan lain/logo2.png"
                class="img-logo2"
                width="300px"
              />
            </div>
          </div>

          <div class="col-md-6">
            <br />
            <h1 1>CLICKPROMO.COM</h1>
            <p class="discount-session-content-text">
              Menyediakan informasi terkini tentang promo dan penawaran dari
              berbagai platform. Sehingga Anda dapat mencari produk tertentu dan
              penawaran yang terbaik juga dari berbagai platform e-commerce.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-12 text-center text-capitalize">
          <h1>e-commerce partners</h1>
        </div>
      </div>
    </div>

    <div class="container mt-5 mb-5">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="img/bahan lain/lazada.png" class="img-fluid" />
        </div>
        <div class="item">
          <img src="img/bahan lain/shopee.webp" class="img-fluid" />
        </div>
        <div class="item">
          <img src="img/bahan lain/uniqlo.svg" class="img-fluid" />
        </div>
        <div class="item">
          <img src="img/bahan lain/zara.svg" class="img-fluid" />
        </div>
        <div class="item">
          <img src="img/bahan lain/zalora.jpg" class="img-fluid" />
        </div>
        <div class="item">
          <img src="img/bahan lain/Bukalapak.jpg" class="img-fluid" />
        </div>
        <div class="item">
          <img src="img/bahan lain/olx.jpg" class="img-fluid" />
        </div>
        <div class="item">
          <img src="img/bahan lain/jdid.jpg" class="img-fluid" />
        </div>
        <div class="item">
          <img src="img/bahan lain/tokopedia.jpg" class="img-fluid" />
        </div>
      </div>
    </div>
    
    <div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-6 service">
      <p class="icon pt-5 pb-2">
        <i class="fa fa-envelope" aria-hidden="true"></i>
      </p>
      <h2 class="text-capitalize">Berikan Masukan Anda Disini</h2>
      <form id="feedbackForm" action="php/fungsi.php" method="POST">
        <div class="form-group mx-sm-12 mb-2">
          <label for="feedback" class="sr-only">Feedback</label>
          <input type="text" class="form-control" placeholder="Masukkan" name="feedback" required>
        </div>
        <button type="submit" class="btn btn-danger text-light mb-2">Kirim</button>
      </form>
      <br />
      <img class="img-fluid" src="img/bahan lain/mail.svg" alt="Mail Icon" />
      <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
    </div>

    <div class="col-md-6 service">
      <p class="icon pt-5 pb-2">
        <i class="fa fa-cogs" aria-hidden="true"></i>
      </p>
      <h2 class="text-capitalize">Pelayanan Kami</h2>
      <p>
        <i class="fa fa-handshake-o" aria-hidden="true"></i> anti ribet.
      </p>
      <p>
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> belanja murah.
      </p>
      <p>
        <i class="fa fa-cart-plus" aria-hidden="true"></i> promo lengkap.
      </p>
      <p>
        <i class="fa fa-shopping-bag" aria-hidden="true"></i> platform luas.
      </p>
    </div>
  </div>
</div>

    <footer class="container-fluid mt-5">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-md-6">
            <section class="footer">
              <div class="box-container">
                <div class="box">
                  <h3>Follow Kami</h3>
                  <a href="#"> <i class="fa fa-facebook-f"></i> facebook </a>
                  <a href="https://wa.me/6287750116539">
                    <i class="fa fa-whatsapp"></i> whatsapp
                  </a>
                  <a href="https://www.instagram.com/cli.ckpromo/">
                    <i class="fa fa-instagram"></i> instagram
                  </a>
                  <a href="#"> <i class="fa fa-linkedin"></i> linkedin </a>
                </div>
              </div>
            </section>
          </div>
          <div class="col-md-3">
            <h3>Produk Promo</h3>
            <div class="media mt-5">
              <img
                class="mr-3 img-fluid"
                src="img/footer images/c31.jpg"
                alt=""
              />
              <div class="media-body">
                <h5>Baju Wanita</h5>
                <del>Rp. 175.000</del> <br />&nbsp;Rp. 135.000
              </div>
            </div>

            <div class="media mt-5">
              <img
                class="mr-3 img-fluid"
                src="img/footer images/c51.jpg"
                alt=""
              />
              <div class="media-body">
                <h5>Atasan Wanita</h5>
                <del>Rp. 123.000</del> <br />&nbsp;Rp. 89.000
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <h3>Top E-Commerce</h3>
            <div class="media mt-5">
              <img
                class="mr-3 img-fluid"
                src="img/bahan lain/zalora.jpg"
                alt=""
              />
            </div>

            <div class="media mt-5">
              <img
                class="mr-3 img-fluid"
                src="img/bahan lain/shopee.webp"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-md-12 text-capitalize text-center text-light">
          Copyright <span>Click Promo</span> 2023 - CLICKPROMO.COM
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="js/counter.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true,
          },
          600: {
            items: 3,
            nav: false,
          },
          1000: {
            items: 4,
            nav: false,
            loop: false,
          },
        },
      });
    </script>
<script>
  document.getElementById("feedbackForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah pengiriman formulir secara default

    // Mengambil data formulir
    var formData = new FormData(this);

    // Mengirim data ke fungsi.php menggunakan AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/fungsi.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        alert(xhr.responseText); // Menampilkan pesan balasan dari server
        // Lakukan tindakan tambahan setelah pengiriman berhasil, jika diperlukan
      }
    };
    xhr.send(formData);
  });
</script>

  </body>
</html>
