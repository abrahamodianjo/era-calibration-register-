<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Era Home Security</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
      .color-white{
        padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
        font-size: var(--bs-navbar-toggler-font-size);
        line-height: 1;
        color:rgb(255, 169, 169);
        background-color: #fff;
        
        border-radius: var(--bs-navbar-toggler-border-radius);
        transition: var(--bs-navbar-toggler-transition);
      }
      .navbar-toggler-icon{
        color:#fff;
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-danger" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-white">This software was designed to store data and keep track of tools that are used in the warehouse. 
            It is used to keep track of the tools that require calibration. in addition, the software is automated to send alert emails of when the calibration is due.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact Us</h4>
          <ul class="list-unstyled">
            <li>
              <a href="https://www.linkedin.com/in/odianjo-abraham-989759b3"  target="_blank" class="text-white">Connect to Abraham on Linkedin</a></li>
            <li><a href="https://www.linkedin.com/in/rotimi-lawal-6a9283156/" target="_blank" class="text-white">Connect to Rotimi on Linkedin </a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-danger  bg-danger shadow-sm">
    <div class="container  ">
      <a href="/" class="navbar-brand text-white d-flex align-items-center">
        <strong>ERA Home Security </strong>
      </a>
      <button class="navbar-toggler color-white " type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
    </div>
  </div>
</header>
<main>

  <div class="col-lg-6 col-md-8 mt-5  mx-auto text-center">
        <h1 class="fw-light fw-bold text-danger"> Menu</h1>
      </div>

  <div class="album py-5 ">
    <div class="container">
    
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <a class="card shadow-sm" href="<?php echo site_url('/quality-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/quality.png'); ?>" alt="test image">
          </a>  
        </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <a class="card shadow-sm" href="<?php echo site_url('/cylinder-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/cylinder.png'); ?>" alt="test image">
          </a>  </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <a class="card shadow-sm" href="<?php echo site_url('/design-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/design.png'); ?>" alt="test image">
          </a></div>
        </div>

        <div class="col">
              <div class="card shadow-sm">
              <a class="card shadow-sm" href="<?php echo site_url('/dimeco-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/dimeco.png'); ?>" alt="test image">
          </a> </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <a class="card shadow-sm" href="<?php echo site_url('/engineering-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/engineering.png'); ?>" alt="test image">
          </a> 
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <a class="card shadow-sm" href="<?php echo site_url('/hse-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/health.png'); ?>" alt="test image">
          </a>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <a class="card shadow-sm" href="<?php echo site_url('/cylinder-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/cylinder.png'); ?>" alt="test image">
          </a>
          </div>
        </div>
        <div class="col">
          <div class="card ">
          <a class="card " href="<?php echo site_url('/vs-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/vs.png'); ?>" alt="test image">
          </a>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <a class="card shadow-sm" href="<?php echo site_url('/warehouse-list') ?>">
                <img src="<?php echo ('https://eracalibrationsystem.odianjoabraham.xyz/warehouse.png'); ?>" alt="test image">
          </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<footer class="container-fluid bg-danger  d-flex flex-wrap justify-content-between align-items-center py-3 text-center mt-6">
    <p class="col-md-12 mb-0 text-light">Copyright &copy; 2022 for ERA Home Security Ltd  ||  Application Designed by <a href="https://www.linkedin.com/in/odianjo-abraham-989759b3/" target="_blank" class="text-light">Abraham Odianjo</a> & <a href="https://www.linkedin.com/in/rotimi-lawal-6a9283156/" target="_blank" class="text-light">Rotimi Lawal</a></p>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#vs-list').DataTable();
  } );
</script>
</body>
</html>