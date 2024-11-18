<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../..//sass/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!------------------- Header Start ----------------->
  <header>
    <div class="container-fluit">
      <nav class="navbar navbar-expand-lg bg-info px-5">
        <button class="navbar-toggler text-bg-light" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
          <a class="nevzat navbar-brand" href="../../index.php">Nevzat.</a>
          <ul class="navbar-nav me-auto mx-auto ">
            <li class="nav-item">
              <a href="../../index.php" class="nav-link btn-outline-success active border-bottom" aria-current="page"
                href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./works.php">Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./talk.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
          </ul>
        </div>
          <div id="toggleContainer" class="toggle-container">
    <i id="toggleIcon" class="fas fa-moon toggle-icon moon"></i>
  </div>
      </nav>
    </div>
  </header>


  <!-------------------- Header End --------------->

    <div class="container-fluid" id="test">
        <form action="./email.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label text-light">First Name</label>
    <input name="name" type="text" class="form-control bg-light" id="name" aria-describedby="nameHelp">
  </div>
    <div class="mb-3">
    <label for="lastName" class="form-label text-light">Last Name</label>
    <input name="lastName" type="text" class="form-control bg-light" id="lastName" aria-describedby="lastNameHelp">
  </div>
  <div class="mb-3">
    <label for="messageInput" class="form-label text-light">Message</label>
    <textarea name="message" class="form-control bg-light" cols="30" rows="5"></textarea>
  </div>
  <button id="submit" type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>



  <!-------------------- JavaScript --------------->

  <script src="../js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>
</html>