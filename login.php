<?php

session_start();

require_once __DIR__ . '/config/db.php';

$email = $pass = "";
$emailErr = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = htmlspecialchars(trim($_POST["email"]));
  $pass = htmlspecialchars(trim($_POST["pass"]));

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Enter valid email!";
  }

  if ((empty($emailErr)) && (isset($_POST["login"]))) {

    $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);

    try {
      $stmt->execute();
      $stmt->fetch(PDO::FETCH_ASSOC);
      if ($user && password_verify($pass, $user['password'])) {
        // Вход выполнен успешно
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["logged_in"] = true;

        header("Location: /views/tasks.php");
        exit;
      } else {
        $loginErr = "Неверный логин или пароль.";
      }
    } catch (PDOException $e) {
      $loginErr = "Ошибка базы данных: " . $e->getMessage();
    }
  }
}




?>

















<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="to-do-application" />
  <title>To Do Application</title>
  <!-- <link rel="icon" href="/img/favicon.ico" type="image/x-icon" /> -->
  <link rel="icon" href="/img/favicon.png" type="image/png" sizes="32x32" />
  <link rel="stylesheet" href="reset.css" />
  <link rel="stylesheet" href="style.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Open Graph tegs -->
  <meta property="og:title" content="title" />
  <meta property="og:description" content="some text" />
  <meta property="og:image" content="https://example.com/preview.jpg" />
  <meta property="og:url" content="https://example.com" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card tegs -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="title" />
  <meta name="twitter:description" content="some text" />
  <meta name="twitter:image" content="https://example.com/preview.jpg" />

</head>

<body>
  <div class="container">
    <header>
      <nav class="nav-bar">
        <a href="index.php" target="_self"><img src="img/logo.ico" alt="logo of the site" class="logo"></a>
        <ul class="main-menu">
          <li><a href="index.php" class="menu-link">Home</a></li>
          <li><a href="about.php" class="menu-link">About</a></li>
          <li><a href="contacts.php" class="menu-link">Contacts</a></li>
        </ul>
      </nav>

    </header>
    <main class="main">
      <h1>Login to your account</h1>
      <div class="form-container">
        <h2>Please log in:</h2>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="post">
          <input type="email" name="email" class="input email" placeholder="Your e-mail" required>
          <input type="password" name="pass" class="input pass" placeholder="Your password" required>
          <input type="submit" value="LOG IN" class="input btn" name="login">
          <button type="button" class="input btn"><a href="register.php">CREATE USER ACCOUNT</a></button>
          <a href="" class="forgot-pass">Forgot Your Password?</a>
        </form>

      </div>
    </main>

    <footer class="footer">

      <p class="footer-text">© 2025 <a href="mailto:arturdko@gmail.com" class="email-class"> Made by me. </a>Made with ❤️ and lots of coffee.</p>
    </footer>
  </div>
</body>

</html>