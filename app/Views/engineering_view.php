<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Engineering || ERA Calibration Register</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
            <a class="nav-link " aria-current="page" href="<?php echo site_url('/cylinder-list') ?>">Cylinder Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link "aria-current="page" href="<?php echo site_url('/quality-list') ?>">Quality Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('/design-list') ?>">Design Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  aria-current="page" href="<?php echo site_url('/vs-list') ?>">Vertical Sliding Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('/dimeco-list') ?>">Dimeco Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('/mpl-list') ?>">MPL Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('/engineering-list') ?>">Engineering Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('/hse-list') ?>">Health & Safety Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('/warehouse-list') ?>">Warehouse Team</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-5 text-center">
  <h2 class="text-danger fw-bold"> Engineering Team Records</h2>
</div>

<div class="container mt-4">
  
   <div class="d-flex justify-content-end">

   <a href="<?php echo site_url('/engineering-form') ?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg></a>
        </div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>


  <div class="mt-3 mb-5 table-responsive ">
    
     <table class="table  table-striped table-columns container table-hover" id="users-list">
       <thead>
          <tr>
             <th>S/O</th>
             <th>Era No</th>
             <th>Tool Type</th>
             <th>Manufacturer Name</th>
             <th>Frequency </th>
             <th>Calibration Due Date</th>
             <th>Edit</th>
             <th>Delete</th>
          </tr>
       </thead>
       <tbody>
          <?php if($engineering): ?>
          <?php foreach($engineering as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['era_no']; ?></td>
             <td><?php echo $user['tool_type']; ?></td>
             <td><?php echo $user['manufacturer_name']; ?></td>
             <td><?php echo $user['frequency']; ?></td>
             <td><?php echo $user['due_date']; ?></td>
             <td>
                    <a href="<?php echo base_url('editengineering-view/'.$user['id']);?>" class="btn btn-danger btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    </a>
                </td>
                <td>
                  <a href="<?php echo base_url('deleteengineering/'.$user['id']);?>" class="btn btn-dark btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg>
                  </a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>


<footer class="container-fluid bg-danger  d-flex flex-wrap justify-content-between align-items-center py-3 text-center mt-6 fixed-bottom ">
    <p class="col-md-12 mb-0 text-light">Copyright &copy; 2022 for ERA Home Security Ltd    ||  Application Designed by <a href="https://www.linkedin.com/in/odianjo-abraham-989759b3/" target="_blank" class="text-light">Abraham Odianjo</a> & <a href="https://www.linkedin.com/in/rotimi-lawal-6a9283156/" target="_blank" class="text-light">Rotimi Lawal</a></p>
  </footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#engineering-list').DataTable();
  } );
</script>
</body>
</html>