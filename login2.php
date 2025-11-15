<?php
session_start();
include("connect.php");

// -------------------------------
// AUTO LOGIN USING COOKIE
// -------------------------------
if (!isset($_SESSION['username']) && isset($_COOKIE['remember_user'])) {
    $_SESSION['username'] = $_COOKIE['remember_user'];
    header("Location: display.php");
    exit();
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $_SESSION['username'] = $username;

        // -------- REMEMBER ME COOKIE ----------
        if (isset($_POST['remember'])) {
            setcookie("remember_user", $username, time() + (86400 * 30), "/", "", false, true);
        }

        header("Location: display.php");
        exit();

    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>
<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST" action="">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="checkbox" name="remember"> Remember Me<br><br>
    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
