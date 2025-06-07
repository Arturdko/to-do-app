<?php

session_start();

require_once __DIR__ . '/config/db.php';

$email = $emailErr = $otp = $otpErr = $pass = $passErr = $confirm = $confirmErr = $otpExpired = $messSuccess = "";

function isValidPass($data)
{
  if (strlen($data) < 8) {
    return false;
  }

  if (!preg_match('/[A-Z]/', $data)) {
    return false;
  }

  if (!preg_match('/[a-z]/', $data)) {
    return false;
  }

  if (!preg_match('/[0-9]/', $data)) {
    return false;
  }

  if (!preg_match('/[\W_]/', $data)) {
    return false;
  }
  return true;
};


// Input validation:
if (($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["submit"])) {
  $email = filter_var(htmlentities(trim($_POST["email"])), FILTER_VALIDATE_EMAIL);
  $otp = htmlentities(trim($_POST["otp"]));
  $pass = htmlspecialchars(trim($_POST["pass"]));
  $confirm = htmlspecialchars(trim($_POST["confirm"]));

  // take otp from db and compare with input one:
  $stmt = $pdo->prepare("SELECT reset_code, reset_expires FROM users WHERE email = :email");
  $stmt->execute(['email' => $email]);
  $user = $stmt->fetch();


  if ($user["reset_code"] !== $otp) {
    $otpErr = "*One time password is wrong!";
  }

  if (!(strtotime($user['reset_expires']) < strtotime('+30 minutes'))) {
    $otpExpired = "One time password was expired!";
    exit;
  }

  if (!isValidPass($pass)) {
    $passErr = "*Weak password";
  }

  if ($confirm !== $pass) {
    $confirmErr = "*Password doesn't match!";
  }


  // Saving new password
  $hash = password_hash($pass, PASSWORD_DEFAULT);

  if (empty($passErr) && empty($confirmErr) && empty($otpErr) && empty($otpExpired)) {

    // Insertion to database
    $stmt = $pdo->prepare("UPDATE users SET password = :pass, reset_code = NULL, reset_expires = NULL WHERE email = :email");

    $stmt->execute([
      'pass' => $hash,
      'email' => $email
    ]);

    $messSuccess = "Your new password was created! You will be automatically redirected to login page." .
      "<script>
    setTimeout(function() {
      window.location.href = 'login.php';
    }, 5000);
  </script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="to-do-application" />
  <title>New password</title>

  <link rel="icon" href="/img/favicon.png" type="image/png" sizes="32x32" />
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/styles/reset.css" />
  <link rel="stylesheet" href="public/styles/login.css?v=<?= filemtime('public/styles/login.css') ?>">
  <link rel="stylesheet" href="public/styles/index.css?v=<?= filemtime('public/styles/index.css') ?>">



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
                <a class="nav-link menu-link me-5 text-white" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link me-5 text-white" href="about.php">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link me-5 text-white" href="contacts.php">CONTACTS</a>
              </li>
            </ul>
            <a class="btn-my btn-login d-none" type="button" href="login.php">LOG IN</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main class="main">
    <div class="form-container">
      <h2>Create new password:</h2>

      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="post">
        <input type="email" name="email" class="input email" placeholder="Your e-mail" required>
        <?php echo "<span class='error-message'>$emailErr</span>" ?>
        <input type="text" name="otp" class="input pass" placeholder="OTP" required>
        <?php echo "<span class='error-message'>$otpErr</span>" ?>
        <?php echo "<span class='error-message'>$otpExpired</span>" ?>
        <input type="password" name="pass" class="input pass" placeholder="New password" required>
        <?php echo "<span class='error-message'>$passErr</span>" ?>
        <input type="password" name="confirm" class="input pass" placeholder="Repeate password" required>
        <?php echo "<span class='error-message'>$confirmErr</span>" ?>
        <input type="submit" value="SAVE" class="input btn" name="submit">
        <?php echo
        "<span class='error-message' style='color: green; text-align: center;'>$messSuccess</span>"
        ?>
      </form>

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