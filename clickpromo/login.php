<?php
session_start();

include 'php/connect.php';

$username = "";
$password = "";
$loginError = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Validasi login admin
    $adminQuery = "SELECT * FROM administrator WHERE Username = '$username' AND Password = '$password'";
    $adminResult = mysqli_query($conn, $adminQuery);

    // Validasi login pengguna biasa
    $userQuery = "SELECT * FROM customer WHERE Username = '$username' AND Password = '$password'";
    $userResult = mysqli_query($conn, $userQuery);

    if (mysqli_num_rows($adminResult) > 0) {
        $adminData = mysqli_fetch_assoc($adminResult);
        $_SESSION["akun-user"] = [
            "username" => $username,
            "password" => $password,
            "role" => "admin",
            "id_admin" => $adminData["id_admin"]
        ];
        header("Location: administrator.php");
        exit;    
    } elseif (mysqli_num_rows($userResult) > 0) {
        $userData = mysqli_fetch_assoc($userResult);
        $_SESSION["akun-user"] = [
            "id_cust" => $userData["id_cust"],
            "username" => $username,
            "password" => $password,
            "role" => "user"
        ];
        header("Location: dashboard.php");
        exit;    
    } else {
        $loginError = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/regg_style.css">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <?php if ($loginError) { ?>
            <div class="alert alert-danger alert-dismissible">
                Username atau password salah
                <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php } ?>
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Belum punya akun? <a href="register.php">Daftar di sini</a>.</p>
        </form>
    </div>
</body>
</html>
