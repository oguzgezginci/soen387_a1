<html>

<head>
  <title>Home</title>
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
    <h2>Home</h2>
    <form action="login.php?" method="get">
      <input type="hidden" name="user" value="S" />
      <button type="submit">Log in as a student</button>
    </form>
    <form action="signup.php">
      <input type="submit" value="Sign up as a student" />
    </form>
    <form action="login.php?" method="get">
      <input type="hidden" name="user" value="A" />
      <button type="submit">Log in as an administrator</button>
    </form>
  </div>
</body>

</html>
<script>
</script>