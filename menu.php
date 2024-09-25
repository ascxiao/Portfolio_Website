<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Carlos Valderrama">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Sidebars · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="./bootstrap/sidebars.css" rel="stylesheet">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

      .sidebar {
        background-color: #4e6151;
      }

      .active{
        background-color: #a9714b !important;
      }

      .main-button{
        color: white !important;
      }

      .main-button:hover,
      .main-button:focus{
        color: rgba(var(--bs-emphasis-color-rgb), .85) !important;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
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


  </head>
  <body>

    <main class="d-flex flex-nowrap">


      <div class="flex-shrink-0 p-3 sidebar" style="width: 280px;">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom text-white">
          <img class="bi pe-none me-2" width="48" height="48" src = "./assets/icon-transparent.png">
          <span class="fs-5 fw-semibold">Kaluroos Linnaeus</span>
        </a>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed main-button" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
              Home
            </button>
            <div class="collapse show" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">About Me</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Contact Me</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed main-button" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Credentials
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Education</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Achievements</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Affiliations</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Certifications</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed main-button" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              Projects
            </button>
            <div class="collapse" id="orders-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">UX Design</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Visual Arts</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Web Design</a></li>
              </ul>
            </div>
          </li>
          <li class="border-top my-3"></li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed main-button" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              Gallery
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Volunteer Works</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Organizations and Events</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Projects Compilation</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">My Hair</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/sidebars.js"></script>
  </body>
</html>
