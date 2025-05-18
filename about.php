<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="to-do-application" />
  <title>About the app</title>


  <link rel="icon" href="/img/favicon.png" type="image/png" sizes="32x32" />
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/styles/reset.css" />
  <link rel="stylesheet" href="public/styles/index.css?v=<?= filemtime('public/styles/index.css') ?>">
  <link rel="stylesheet" href="public/styles/about.css?v=<?= filemtime('public/styles/about.css') ?>">



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
                <a class="nav-link menu-link me-5 active" href="about.php">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link me-5" href="contacts.php">CONTACTS</a>
              </li>
            </ul>
            <a class="btn-my btn-login" type="button" href="login.php">LOG IN</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <h1>Tailored with love & inspiration</h1>
      <p class="descrip"> <strong>Do More</strong> is a simple and effective task management tool designed to help you organize your tasks and boost your productivity.
        With its user-friendly interface, you can easily create, complete, and delete tasks, ensuring that you stay on top of your responsibilities.
      </p>

      <div class="row align-items-center my-5 gap-5">
        <div class="col-sm-12 col-md-12 col-lg">
          <img class="rounded-4" src="img/features.jpg" alt="features">
        </div>
        <div class="col-sm-12 col-md-12 col-lg">
          <h3>FEATURES</h3>
          <p class="about-text">Create tasks in just a couple of clicks, check them off when they’re finished, delete the ones you no longer need, and manage everything through a clean, intuitive interface.
          </p>
        </div>
      </div>

      <div class="row align-items-center my-5 gap-5">
        <div class="col-12 col-md-12 col-lg order-2 order-lg-1">
          <h3>HOW IT WORKS</h3>
          <p class="about-text">Using the <strong>Do More</strong> is easy: add a task by typing it in and clicking “Add,” tick it off when it’s finished, and delete completed items to keep the list clear for new tasks.
          </p>
        </div>
        <div class="col-12 col-md-12 col-lg order-1 order-lg-2"><img class="rounded-4 " src="img/how_it_works.jpg" alt="how it works"></div>
      </div>

      <div class="row align-items-center my-5 gap-5">
        <div class="col-12 col-md-12 col-lg"><img class="rounded-4" src="img/future_updates.jpg" alt="future updates"></div>
        <div class="col-12 col-md-12 col-lg">
          <h3>FUTURE UPDATES</h3>
          <p class="about-text">We’re always improving <strong>Do More</strong> to make your task management even easier. Some features we’re planning to add in the future include: Cloud syncing to keep your tasks accessible across multiple devices. Task categories to help you organize your tasks more effectively. Advanced notifications to remind you of upcoming deadlines. Stay tuned for updates!</p>
        </div>

      </div>
    </div>
  </main>

  <footer class="footer-text">
    <p>© 2025 Made with ❤️ and lots of coffee in Budweis. South Bohemia </p>
  </footer>













  <!-- Bootstrap 5 JS Bundle CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>