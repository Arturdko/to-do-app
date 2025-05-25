<?php

session_start();

require_once __DIR__ . '/config/db.php';

$email = $name = $text = $nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $text = htmlspecialchars(trim($_POST["text"]));

  if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
    $emailErr = "Enter valid email";
  }

  if (empty($emailErr) && isset($_POST['login'])) {
  }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="to-do-application" />
  <title>Contacts</title>

  <link rel="icon" href="/img/favicon.png" type="image/png" sizes="32x32" />
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/styles/reset.css" />
  <link rel="stylesheet" href="public/styles/index.css?v=<?= filemtime('public/styles/index.css') ?>">
  <link rel="stylesheet" href="public/styles/contacts.css?v=<?= filemtime('public/styles/contacts.css') ?>">



  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="img/favicon/favicon.svg" />
  <link rel="shortcut icon" href="img/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png" />
  <link rel="manifest" href="img/favicon/site.webmanifest" />


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
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-md my-4">
        <div class="container-fluid">
          <!-- Left: Logo -->
          <a href="index.php" class="navbar-brand">
            <img src="img/logo.png" alt="application logo" class="logo">
          </a>

          <!-- Mobile toggle button -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Right: Navigation links and button -->
          <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav me-3">
              <li class="nav-item">
                <a class="nav-link menu-link me-5 " href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link me-5" href="about.php">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link me-5 active" href="contacts.php">CONTACTS</a>
              </li>
            </ul>
            <a class="btn-my btn-login" type="button" href="login.php">LOG IN</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <div class="container margin-top ">
      <div class="row justify-content-center">
        <div class="col-md-6 mb-5">
          <h1>Say Hello 👋</h1>
          <p class="text">
            I will appreciate your feedback and suggestions. If you have any questions, comments, or ideas for improvement, please reach me out.<br>
            You can contact me via the form below or connect with me on social media. I look forward to hearing from you!</p>
        </div>



        <div class="col-md-6">
          <h1>Write me a message</h1>

          <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

            <input type="text" name="name" class="input mb-2 form-control" placeholder="Your Name" required>


            <input type="email" name="email" class="input mb-2 form-control" placeholder="Your email" required>
            <?php echo "<span class='error-message'>$emailErr</span>" ?>

            <textarea class="input comment form-control mb-2" rows="5" class="comment" name="text" placeholder="Message"></textarea>

            <input type="submit" value="SEND MESSAGE" class="input btn-login" name="login">
          </form>
        </div>

      </div>
  </main>

  <footer class="footer-text py-3">
    <ul class="socials my-4">
      <li>
        <a href="mailto:arturdko@gmail.com" class="social-link" target="_blank">
          <img src="img/gmail.png" class="social-link" alt="gmail_icon">
        </a>
      </li>
      <li>
        <a href="https://github.com/Arturdko" class="social-link" target="_blank">
          <img src="img/github.png" class="social-link" alt="github_icon">
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/arturdko" class="social-link" target="_blank">
          <img src="img/linkedin.png" class="social-link" alt="linkedin_icon">
        </a>
      </li>
    </ul>
    <p class="mb-0">© 2025 Made with ❤️ and lots of coffee in Budweis. South Bohemia </p>
  </footer>







































  <!-- Bootstrap 5 JS Bundle CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>