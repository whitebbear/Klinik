<?php
session_start();

// Username dan password default
$default_username = "admin";
$default_password = "admin123";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Debugging untuk memastikan input diterima
    echo "Input Username: " . htmlspecialchars($username) . "<br>";
    echo "Input Password: " . htmlspecialchars($password) . "<br>";

    // Periksa username dan password
    if ($username === $default_username && $password === $default_password) {
        echo "Login Berhasil!<br>"; // Debugging
        $_SESSION['admin'] = $username; // Simpan username ke session
        header('Location: edit_kamar.php'); // Redirect ke halaman admin
        exit();
    } else {
        $error = "Username atau password salah!";
        echo $error; // Debugging
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin</title>
</head>
<body>
    <h2>Login Admin</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    <?php if (!empty($error)) echo "<p style='color: red;'>$error</p>"; ?>
</body>
</html>
