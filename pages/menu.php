
<link href="./bootstrap/sidebars.css" rel="stylesheet">

<style>

    .sidebar {
      position: fixed;
      background-color: #4e6151;
      height: 100%;
      max-width: 100%;
      z-index: 1000;
      box-shadow:  12px 0px 12px 6px rgba(52, 66, 54, 50%);
    }

    .sidebar_content{
      position: absolute;
      height: 100%;
      width: 100%;
    }

    .main-button{
    color: white !important;
    }

    .main-button:hover,
    .main-button:focus{
      color: rgba(var(--bs-emphasis-color-rgb), .85) !important;
    }

    .b-example-divider {
    width: 100%;
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
    }

    .bi {
    vertical-align: -.125em;
    fill: currentColor;
    }

    .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
    }

    .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
    --bd-violet-bg: #712cf9;
    --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

    --bs-btn-font-weight: 600;
    --bs-btn-color: var(--bs-white);
    --bs-btn-bg: var(--bd-violet-bg);
    --bs-btn-border-color: var(--bd-violet-bg);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: #6528e0;
    --bs-btn-hover-border-color: #6528e0;
    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
    --bs-btn-active-color: var(--bs-btn-hover-color);
    --bs-btn-active-bg: #5a23c8;
    --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
    z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
    display: block !important;        
    }
    
</style>


<div class = "sidebar_content">
<div class="flex-shrink-0 p-4 sidebar inter-body">
    <a href="index.php" class="d-flex align-items-center pb-3 pr-2 mb-3 link-body-emphasis text-decoration-none border-bottom text-white">
      <img class="pe-none me-2" width="34px" height="43px" src = "./assets/icon-transparent.png">
      <span class="fs-5 fw-semibold rubik-bold" style = "padding-left:10px">kaluroos linnaeus</span>
    </a>
  
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <a href = "index.php">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed main-button home" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            Home
          </button>
        </a>

        
          <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="index.php#about_me" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">About Me</a></li>
              <li><a href="index.php#contact_me" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Contact Me</a></li>
            </ul>
          </div>
      </li>
      <li class="mb-1">
        <a href = "credentials.php">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed main-button credentials" data-bs-toggle="collapse" data-bs-target="#credentials-collapse" aria-expanded="true">
              Credentials
          </button>
        </a>
        <div class="collapse show" id="credentials-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="credentials.php#education" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Education</a></li>
            <li><a href="credentials.php#achievements" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Achievements</a></li>
            <li><a href="credentials.php#affiliations" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Affiliations</a></li>
            <li><a href="credentials.php#certifications" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Certifications</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <a href = "projects.php">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed main-button  " data-bs-toggle="collapse" data-bs-target="#project-collapse" aria-expanded="true">
            Projects
          </button>
        </a>
        <div class="collapse show" id="project-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="projects.php#ui" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">UI Design</a></li>
            <li><a href="projects.php#art" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Artworks</a></li>
            <li><a href="projects.php#game" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Game Art and Development</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <a href = "gallery.php">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed main-button" id = "gallery" data-bs-toggle="collapse" data-bs-target="#gallery-collapse" aria-expanded="true">
            Gallery
          </button>
        </a>
        <div class="collapse show" id="gallery-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="gallery.php#volunteer" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Volunteer Works</a></li>
              <li><a href="gallery.php#org" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white  ">Organizations and Events</a></li>
            </ul>
        </div>
      </li>
    </ul>

    <div class = "d-flex text-white text-center position-absolute bottom-0 mb-2">
      <strong><p id = "date" class = "date" style = "font-size: 1em; padding-right: 10px;"></p></strong>
      <strong><p id = "time" class = "time" style = "font-size: 1em;"></p></strong>
    </div>

    <div class = "d-flex text-white text-center position-absolute bottom-0 mb-1">
    <div id="countdown" style = "font-size: 0.75em"></div>
    </div>


  </div>
</div>

<script src = "script.js"></script>

