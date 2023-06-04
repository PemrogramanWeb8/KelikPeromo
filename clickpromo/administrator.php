<?php
error_reporting(0);

session_start();
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
    <title>ADMIN</title>
    <link rel="website icon" type="png" href="img/bahan lain/logo2.png" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/admin1.css" />
  </head>

  <body>
    <div class="sidebar close">
      <div class="logo-details">
        <i class="bx bx-book"></i>
        <span class="logo_name">
          <?php
            if (isset($_SESSION["akun-user"])) {
                $nama = $_SESSION["akun-user"]["username"];
                echo $nama;
            }
          ?>
        </span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="administrator.php">
            <i class="bx bx-home"></i>
            <span class="link_name">Dasboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="">Dasboard</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="">
              <i class="bx bx-collection"></i>
              <span class="link_name">Promo</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="edpromo.php">Tambah Promo</a></li>
                    <li><a href="delpromo.php">Delete Promo</a></li>
                </ul>
        </li>
        <li>
        <div class="iocn-link">
            <a href="">
            <i class="bx-collection"></i>
            <span class="link_name">E-Commerce</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="edcom.php">Tambah E-Commerce</a></li>
                    <li><a href="delcom.php">Delete E-Commerce</a></li>
                </ul>
        </li>
        <li>
          <a href="edadmin.php">
            <i class="bx bx-user"></i>
            <span class="link_name">Profil</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="bx bx-arrow-back"></i>
            <span class="link_name">Keluar</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="section">
  <div class="content">
    <h1>Dashboard</h1>
    <i onclick="chonclick(this)" class="bx bx-chevron-right"></i>
    <div id="boxes">
      <div class="dash-users">
        <h2 class="bx bx-user">User :</h2>
        <?php
          include 'php/connect.php';
          $result = mysqli_query($conn, "SELECT COUNT(*) as total_users FROM customer");
          $row = mysqli_fetch_assoc($result);
          $totalUsers = $row['total_users'];
          echo "<h2>".$totalUsers." User</h2>";
        ?>
      </div>
      <div class="dash-topics">
        <h2 class="bx bx-detail">E-Commerce :</h2>
        <?php
          $result = mysqli_query($conn, "SELECT COUNT(*) as total_partners FROM e_comerce");
          $row = mysqli_fetch_assoc($result);
          $totalPartners = $row['total_partners'];
          echo "<h2>".$totalPartners." Partner</h2>";
        ?>
      </div>
      <div class="dash-comments">
        <h2 class="bx bx-comment">Feedback :</h2>
        <?php
          $result = mysqli_query($conn, "SELECT COUNT(*) as total_feedback FROM feedback");
          $row = mysqli_fetch_assoc($result);
          $totalFeedback = $row['total_feedback'];
          echo "<h2>".$totalFeedback." Feedback</h2>";
        ?>
      </div>
    </div>
  </div>
</div>


    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-md-12 text-capitalize text-center text-light">
          Copyright <span>Click Promo</span> 2023 - CLICKPROMO.COM
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
    <script>
      let arrow = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
          let arrowParent = e.target.parentElement.parentElement;
          arrowParent.classList.toggle("showMenu");
          let mainContent = document.querySelector(".section");
          mainContent.classList.toggle("shifted");
        });
      }
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".bx-chevron-right");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        let mainContent = document.querySelector(".section");
        mainContent.classList.toggle("shifted");
      });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
  </body>
</html>
