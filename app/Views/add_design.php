<!DOCTYPE html>
<html>
<head>
  <title>Design Team</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-dark bg-danger ">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/">ERA CALIBRATION SYSTEM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-danger" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link "  href="<?php echo site_url('/cylinder-list') ?>">Cylinder Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?php echo site_url('/quality-list') ?>">Quality Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('/design-list') ?>">Design Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  aria-current="page" href="<?php echo site_url('/vs-list') ?>">Vertical Sliding Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"aria-current="page" href="<?php echo site_url('/dimeco-list') ?>">Dimeco Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('/mpl-list') ?>">MPL Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('/engineering-list') ?>">Engineering Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('/hse-list') ?>">Health & Safety Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Warehouse</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</nav>
  <div class="container mt-5 mb-5">
    <h3 class="text-danger fw-bold text-center mb-5">Add New Design Equipment</h3>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form-design') ?>">
      <div class="form-group">
        <label>ERA No</label>
        <input type="text" name="era_no" class="form-control">
      </div>
      <div class="form-group">
        <label>Tool Type</label>
        <input type="text" name="tool_type" class="form-control">
      </div>
      <div class="form-group">
        <label>Manufacturer Name</label>
        <input type="text" name="manufacturer_name" class="form-control">
      </div>
      <div class="form-group">
        <label>Frequency </label>
        <select name="frequency" class="form-control">
            <option value="">--- Select Frequency ---</option>
            <option value="6 Months">6 Months</option>
            <option value="12 Months">12 Months</option>
            <option value="24 Months">24 Months</option>
        </select>  
      </div>
      <div class="form-group">
        <label>Due Date</label>
        <input type="date" name="due_date" class="form-control">
      </div>
     
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">SAVE</button>
      </div>
    </form>
  </div>

  <footer class="container-fluid bg-danger  d-flex flex-wrap justify-content-between align-items-center py-3 text-center mt-6  fixed-bottom">
    <p class="col-md-12 mb-0 text-light">Copyright &copy; 2022 for ERA Home Security Ltd    ||  Application Designed by <a href="https://www.linkedin.com/in/odianjo-abraham-989759b3/" target="_blank" class="text-light">Abraham Odianjo</a> & <a href="https://www.linkedin.com/in/rotimi-lawal-6a9283156/" target="_blank" class="text-light">Rotimi Lawal</a></p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          frequency: {
            required: true,
          }
        }, 
      })
    }
  </script>
</body>
</html>