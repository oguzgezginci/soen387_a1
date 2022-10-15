<?php

?>
<html>

<head>
  <title>Admin home</title>
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
    <h2>Admin home</h2>
    <form name="report1"  method="post" action="report1.php">
      <div class="form-group">
        <label class="form-label" for="course_code">Report 1: Input course code:</label>
        <input type="course_code" id="course_code" class="form-control" name="course_code" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <form name="report2"  method="post" action="report2.php">
      <div class="form-group">
        <label class="form-label" for="student_id">Report 2: Input student id:</label>
        <input type="student_id" id="student_id" class="form-control" name="student_id" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>
<script>
</script>