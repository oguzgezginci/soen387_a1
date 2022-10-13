<!DOCTYPE html">



<html>

<head>
  <title>Sign up as a student</title>
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
    <h2>Register</h2>
    <form name="signup" method="post" action="signup_server.php">
      <div class="form-group">
        <label for="first_Name">First Name</label>
        <input type="text" class="form-control" id="first_Name" name="first_Name" placeholder="Enter first name">
      </div>
      <div class="form-group">
        <label for="last_Name">Last Name</label>
        <input type="text" class="form-control" id="last_Name" name="last_Name" placeholder="Enter last name">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label class="form-label" for="phone_Number">Phone number</label>
        <input type="tel" id="phone_Number" name="phone_Number" class="form-control" />
      </div>
      <div class="form-group">
        <label class="form-label" for="date_of_birth">Birthday:</label>
        <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" />
      </div>
      <div class="form-group">
        <label class="form-label" for="password">Please choose a password:</label>
        <input type="password" id="password" class="form-control" name="password" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>
<script>
</script>