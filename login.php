<?php
$user;
if ($_GET["user"] == "S") {
  $action = "courses_index.php?";
  $user = "Student";
} else if ($_GET["user"] == "A") {
  $action = "create_course.php?";
  $user = "Administrator";
}
?>
<html>

<head>
  <title><?php echo $user ?> log in</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="js/form-validation.js"></script>
  <style>
    form .error {
      color: #ff0000;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2><?php echo $user ?> log in</h2>
    <form name="login" method="post" action="<?php echo $action ?>">
      <div class="form-group">
        <label class="form-label" for="id">Input <?php echo $user ?> id:</label>
        <input type="id" id="id" class="form-control" name="id" />
      </div>
      <!--       <div class="form-group">
        <label class="form-label" for="password">Input password:</label>
        <input type="password" id="password" class="form-control" name="password" />
      </div> -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>
<script>
</script>