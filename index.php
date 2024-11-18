<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="./sass/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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
              <a href="../../index.php" class="nav-link btn-outline-success active border-bottom" aria-current="page">Home</a>
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


  <!-------------------- Header End Slider Area Start--------------->
  <div id="content">
    <div class="slider_area  py-5 ">
      <div class="single_area mt-5">
        <div class="container mt-5">
          <div class="pb-5 ">
            <div class=" container pt-5">
              <h1 class="definition mt-2 fw-bold">
                Hey There I am Nevzat
              </h1> <br>
              <p class="definition fw-bold">
                Web Developer
              </p> <br>
              <a href="./dist/pagesworks.html" class="btn btn-outline-warning fw-bold fs-5">
                View Works</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----------------- Slider Area End Download Area Start  -------------------->
    <div class="download-area pt-5">
      <div class="container">
        <div class="container row">
          <h3 class="fw-bold ms-3">
            I’m a Web Developer student based on Bitlis, who loves clean, simple & unique design. I also like to tackle
            problems.
          </h3>
        </div>
        <div class="container row mt-5 justify-content-between ">
          <div class="container col-lg-6 col-sm-12">
          
            <button id="view-cv" class="btn btn-outline-warning btn-lg m-5" onclick="viewCvFunktion()">View CV</button>
            <img class="img-fluid hidden mb-5" id="cv" srcset="" src="./image/cv.png" alt="">
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="container row p-0">
              <span class="col-6 fw-medium text-start fs-5">web </span>
              <span class="col-6 text-end fw-medium p-0 fs-5">%85</span>
            </div>
            <div class="progress my-3" role="progressbar" aria-label="example" aria-valuenow="25" aria-valuemin="0"
              aria-valuemax="100" style="height: 5px;">
              <div class="progress-bar bg-warning" style="width: 85%"></div>
            </div>
            <div class="container row p-0">
              <span class="col-6 fw-medium text-start fs-5">programming</span>
              <span class="col-6 text-end fw-medium p-0 fs-5">%60</span>
            </div>
            <div class="progress my-3" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100" style="height: 5px;">
              <div class="progress-bar bg-warning" style="width: 60%"></div>
            </div>
            <div class="container row p-0">
              <span class="col-6 fw-medium text-start fs-5">database</span>
              <span class="col-6 text-end fw-medium p-0 fs-5">%20</span>
            </div>
            <div class="progress my-3" role="progressbar" aria-label="Warning example" aria-valuenow="75"
              aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
              <div class="progress-bar bg-warning" style="width: 20%"></div>
            </div>
            <div class="container row p-0">
              <span class="col-6 fw-medium text-start fs-5">network</span>
              <span class="col-6 tnext-end fw-medium p-0 fs-5">%10</span>
            </div>
            <div class="progress my-3" role="progressbar" aria-label="Danger example" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
              <div class="progress-bar bg-warning" style="width: 10%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!------------------Download Area End Services Area Start  -------------------->
    <div class="services_area p-5">
      <div class="container pb-5">
        <div class="row pt-5">
          <div class="col-xl-12">
            <div class="section_title mb-5">
              <h3 class="fs-1 ms-4">My Services</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_services text-center pt-5">
              <div class="icon">
                <i class="fa-solid fa-web-awesome fs-1 mb-4"></i>
              </div>
              <h3>Software</h3>
              <p class="pb-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa ad delectus
                mollitia omnis modi.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single_services text-center pt-5">
              <div class="icon">
                <i class="fa-solid fa-code fs-1 mb-4"></i>
              </div>
              <h3>Web Development</h3>
              <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magni libero vel vitae
                dolores quas!</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single_services text-center pt-5">
              <div class="icon">
                <i class="fa-solid fa-network-wired fs-1 mb-4"></i>
              </div>
              <h3>UI/UX Design</h3>
              <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magni libero vel vitae dol
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-------------------Services Area End Footer Area ------------------------>
    <div class="footer_area py-5">
      <div class="container py-5">
        <div class="row">
          <div class="button_wrapper col-xl-3">
            <a  href="https://github.com/nvzt13" target="_blank" class="btn btn-outline-light btn-lg fs-1 w-100">Github <i
                class="fa-brands fa-github"></i></a>
          </div>
          <div class="button_wrapper col-xl-3">
            <a href="https://www.linkedin.com/in/nevzat-atalay-6b5164335/" class="btn btn-outline-light btn-lg fs-1 w-100" target="_blank">Linkedin <i
                class="fa-brands fa-linkedin"></i></a>
          </div>
          <div class="button_wrapper col-xl-3">
            <a  href="https://x.com/nvzt_atly" class="btn btn-outline-light btn-lg fs-1 w-100"> Twitter <i
                class="fa-brands fa-x-twitter" target="_blank"></i></a>
          </div>
          <div class="button_wrapper col-xl-3">
            <a class="btn btn-outline-light btn-lg fs-1 w-100" target="_blank">Medium <i
                class="fa-brands fa-medium"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <!------------------ Footer Area End JavaScript cdn start ----------------------->
    
  <script src="./dist/js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>