<?php

session_start();

$message = '';

if (isset($_SESSION["success"])) {
  $message = $_SESSION["success"];
  unset($_SESSION["success"]);
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
  <link rel="stylesheet" href="public/css/reset.css" />
  <link rel="stylesheet" href="public/css/style.css" />

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

    <main class="main-page">
      <?php echo "<h1 class='success-message'>$message</h1>"; ?>
      <h1 class="success-message">Now you can log in</h1>
      <button><a href="login.php">Log in</a></button>
    </main>

    <footer class="footer">
      <p class="footer-text down">© 2025 <a href="mailto:arturdko@gmail.com" class="email-class"> Made by me. </a>Made with ❤️ and lots of coffee.</p>
    </footer>
  </div>
</body>

</html>