<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login (Example: Check against a database)
    // Dummy authentication (not secure for production)
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $login_error = "Invalid username or password";
    }
}
?>

<h2>Login</h2>
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Login</button>
    <?php if (isset($login_error)) { echo "<p>$login_error</p>"; } ?>
</form>
