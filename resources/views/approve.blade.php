<!DOCTYPE html>
<html lang="en">
<head>
  <title>Approval Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  <h2 class="text-center">Request Approval</h2>
  <br>
  <form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group"> Name:</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
    <label>Paybill/Phone number:</label>
    <input type="text" class="form-control" placeholder="Paybill" name="paybill">

    <label>Money:</label>
    <input type="text" class="form-control" placeholder="Money" name="money"><br>

    <button type="submit"  value = "Add approval" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
