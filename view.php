<!DOCTYPE html">
<?php
$con=mysqli_connect("localhost","root","","assignment1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Student");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
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
    <style type="text/css">
      body {
        background-color: #f0e68c;
      }
      h2 {
        font-family: arial, sans-serif;
        color: blue;
      }
      input {
        background-color: blue;
        color: yellow;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <h2>Insert to MySQL database.</h2>
    <form method="post" action="server1.php">
      <div>
        <p>
          First Name
          <input name="first_Name" type="text" value=<?php echo reset($result)?> size="20" /><br />
        </p>
        <p>
          Last Name
          <input name="last_Name" type="text" value="xxxx" size="40" />
        </p>
        <br />
        <p>
          Address
          <input name="address" type="text" value="xxx" size="20" />
        </p>
        <br />
        <p>
          Email
          <input name="email" type="text" value="xxxx" size="20" />
        </p>
        <p>
          Phone number
          <input name="phone_Number" type="text" value="xxxx" size="20" />
        </p>
        <p>
          Birthday
          <input name="date_of_birth" type="text" value="xxxx" size="20" />
        </p>
        <br />
        <input type="submit" value="Insert to DB" />
      </div>
    </form>

    <h2>Querying a MySQL database.</h2>
    <form method="post" action="server2.php">
      <div>
        <p>
          Select a field to display:
          <!-- add a select box containing options -->
          <!-- for SELECT query -->
          <select name="select">
            <option selected="selected">*</option>
            <option>ID</option>
            <option>Title</option>
            <option>Category</option>
            <option>ISBN</option>
          </select>
        </p>
        <input type="submit" value="Send Query" />
      </div>
      <br />
    </form>
  </body>
</html>
