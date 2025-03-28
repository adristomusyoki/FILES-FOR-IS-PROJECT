<?php
session_start();
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepare the SQL statement
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;

                $_SESSION['success'] = "✅ Login successful! Redirecting...";
                header("Location: userdashboard.php"); // Redirect to dashboard
                exit();
            } else {
                $_SESSION['error'] = "Incorrect password or Username!";
            }
        } else {
            $_SESSION['error'] = "❌ User not found!";
        }

        $stmt->close();
    } else {
        $_SESSION['error'] = "❌ Database error: " . $conn->error;
    }

    $conn->close();
    header("Location: login.php"); // Redirect back to login with error
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - You Lose & We Find</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="image.2.webp" alt="You Lose & We Find">
        </div>
        <h1>You Lose & We Find</h1>
    </header>
    <main>
        <section>
            <h1>Login</h1>

            <!-- Show error or success messages -->
            <?php
            if (isset($_SESSION['error'])) {
                echo "<div class='error'>" . $_SESSION['error'] . "</div>";
                unset($_SESSION['error']); // Clear error after displaying
            }
            if (isset($_SESSION['success'])) {
                echo "<div class='success'>" . $_SESSION['success'] . "</div>";
                unset($_SESSION['success']); // Clear success message
            }
            ?>

            <form id="loginForm" action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required />
                </div>
                <button type="submit">Login</button>
                <p class="signup-link">Don't have an account? <a href="signup.php">Sign up here</a></p>
            </form>
        </section>
    </main>
    <footer>
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:feedback@youlosewefind.com" class="contact-link">Compose For Feedback</a></p>
        <p>Phone: <a href="tel:+254790661716" class="contact-link">Call For Assistance</a></p>
        <p>&copy; 2025 You Lose & We Find. All rights reserved.</p>
    </footer>
</body>
</html>
