<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="to-do-application" />
  <title>Do More.</title>

  <link rel="icon" href="/img/favicon.png" type="image/png" sizes="32x32" />
  <link rel="stylesheet" href="public/styles/reset.css" />
  <!-- <link rel="stylesheet" href="public/styles/style.css" /> -->
  <link rel="stylesheet" href="home.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

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
  <style>
    body {
      /* background-image: url("/public/styles/bgi.jpg"); */
    }
  </style>
</head>

<body>

  <div class="container">

    <header>
      <div class="header-container">
        <nav class="nav-bar">
          <a href="index.php" target="_self"><img src="img/logo2.png" alt="logo of the site" class="logo"></a>
          <ul class="main-menu">
            <li><a href="index.php" class="menu-link">HOME</a></li>
            <li><a href="about.php" class="menu-link">ABOUT</a></li>
            <li><a href="contacts.php" class="menu-link">CONTACTS</a></li>
            <li><a href="login.php" class="btn btn-login">LOG IN</a></li>
          </ul>
        </nav>
      </div>
    </header>


    <main>
      <div class="main-container">
        <div class="content-container">
          <div class="content">
            <h1 class="title">Stay Organized. Boost Your Productivity.</h1>
            <h2 class="subheading">A beautifully simple To-Do app that helps you take control of your time and tasks — anytime, anywhere.</h2>
            <p class="description">Welcome to your personal productivity companion. Whether you're managing daily errands, long-term goals, or team projects, our intuitive and distraction-free interface lets you stay focused on what matters most. Add tasks, set priorities, and mark your progress — all in one place.

              Key Highlights (can be in a bulleted list or icon grid)
              🧠 Smart Task Management – Create, edit, and complete tasks effortlessly

              🌙 Clean & Minimalist Design – No clutter, just clarity

              🔒 Secure & Private – Your tasks are safe with us

              📱 Fully Responsive – Works seamlessly on mobile, tablet, and desktop

              ⏰ No More Missed Deadlines – Stay on track with built-in reminders (optional)</p>

            <a href="register.php" class="btn btn-reg">
              <span class="content-wrapper">
                <span class="btn-text">
                  SIGN UP
                </span>
                <span class="btn-icon">
                  <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>
                </span>

              </span>
            </a>
            <a href="about.php" class="btn btn-info">
              <span class="content-wrapper">
                <span class="btn-text">
                  MORE INFO
                </span>
                <span class="btn-icon">
                  <svg class="arrow-second" xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>
                </span>

              </span>
            </a>

          </div>
          <img class="image first-img" src="img/mehrpouya-h-YdQ_Ick_qBQ-unsplash.jpg" alt="">

        </div>
      </div>
    </main>

    <footer class="footer-text">
      <p>© 2025 Made with ❤️ and lots of coffee in Budweis. South Bohemia </p>
    </footer>

  </div>
</body>

</html>