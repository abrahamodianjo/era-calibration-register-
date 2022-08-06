<!DOCTYPE html>
<html>
<head>
  <title>ERA Edit Register</title>
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
  <div class="container mt-5">
    <form method="post" id="update_cylinder" name="update_cylinder" action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $cylinder_obj['id']; ?>">
      <div class="form-group">
        <label>ERA No</label>
        <input type="text" name="era_no" class="form-control" value="<?php echo $cylinder_obj['era_no']; ?>">
      </div>
      <div class="form-group">
        <label>Tool Type</label>
        <input type="text" name="tool_type" class="form-control" value="<?php echo $cylinder_obj['tool_type']; ?>">
      </div>
      <div class="form-group">
        <label>Manufacturer Name</label>
        <input type="text" name="manufacturer_name" class="form-control" value="<?php echo $cylinder_obj['manufacturer_name']; ?>">
      </div>
      <div class="form-group">
        <label>Frequency</label>
        
        <select name="frequency" value="<?php echo $cylinder_obj['frequency']; ?>">
            <option value="">--- Select Frequency ---</option>
            <option value="6 Months">6 Months</option>
            <option value="12 Months">12 Months</option>
            <option value="24 Months">24 Months</option>
        </select>  
    </div>
      <div class="form-group">
        <label>Due Date</label>
        <input type="date" name="due_date" class="form-control" value="<?php echo $cylinder_obj['due_date']; ?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_cylinder").length > 0) {
      $("#update_cylinder").validate({
        rules: {
          era_no: {
            required: true,
          },
          tool_type: {
            required: true,
            maxlength: 60,
            tool_type: true,
          },
        },
        manufacturer_name: {
            manufacturer_name: {
            required: "manufacturer name is required.",
          },
          frequency: {
            required: "frequency is required.",
            frequency: "It does not seem to be a valid frequency.",
            maxlength: "The frequency should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>
</html>