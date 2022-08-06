<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ERA Calibration Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="p-3 bg-danger">
    <header class="d-flex flex-wrap justify-content-center ">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
       
        <span class="fs-4">ERA CALIBRATION SYSTEM </span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link text-light" aria-current="page">Quality</a></li>
        <li class="nav-item"><a href="<?php echo site_url('/cylinder-list') ?>" class="nav-link text-light">Cylinder</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-light">Dimeco </a></li>
        <li class="nav-item"><a href="#" class="nav-link text-light">MPL</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-light">Engineering</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-light">HSE</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-light">Warehouse</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-light">Design</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-light">Vertical Sliding</a></li>
      </ul>
    </header>
  </div>

<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/cylinder-form') ?>" class="btn btn-danger mb-2">Add New Equipment</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table  table-striped-colunms container table-hover" id="users-list">
       <thead>
          <tr>
             <th>S/O</th>
             <th>Era No</th>
             <th>Tool Type</th>
             <th>Manufacturer Name</th>
             <th>Frequency </th>
             <th>Calibration Due Date</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($cylinder): ?>
          <?php foreach($cylinder as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['era_no']; ?></td>
             <td><?php echo $user['tool_type']; ?></td>
             <td><?php echo $user['manufacturer_name']; ?></td>
             <td><?php echo $user['frequency']; ?></td>
             <td><?php echo $user['due_date']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-view/'.$user['id']);?>" class="btn btn-danger btn-sm">Edit</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-dark btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#cylinder-list').DataTable();
  } );
</script>
</body>
</html>