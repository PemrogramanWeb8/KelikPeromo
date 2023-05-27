<?php
session_start();

include 'config.php';

$Email = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Email = htmlspecialchars($_POST["email"]);
    $password = md5(htmlspecialchars($_POST["password"]));

    $cek_akun_user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customer WHERE Email = '$Email' AND Password = '$password'"));

    if ($cek_akun_user != null) {
        $_SESSION["akun-user"] = [
            "email" => $Email,
            "password" => $password
        ];
    }

    header("Location: index.php");
    exit;
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
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $Email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
        </form>
    </div>
</body>
</html>
