<!DOCTYPE html">
<?php
$con = mysqli_connect("localhost", "root", "", "assignment1");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM Student");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['first_Name'] . "</td>";
  echo "<td>" . $row['last_Name'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


<html>

<head>
  <title>Sample Database Query</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h2>Insert to MySQL database.</h2>
    <form method="post" action="server1.php">
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>
<script>
  // Data Picker Initialization
  $('.datepicker').datepicker();
</script>