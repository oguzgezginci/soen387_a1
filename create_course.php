<!DOCTYPE html">



<html>

<head>
  <title>Add course</title>
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
    <h2>Add course</h2>
    <form name="create_course" class="validated_form" method="post" action="create_course_server.php">
      <div class="form-group">
        <label for="course_code">Course Code</label>
        <input type="text" class="form-control" id="course_code" name="course_code" placeholder="Enter course code">
      </div>
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter course title">
      </div>
      <div class="form-group">
        <label for="semester">Semester:</label>
        <select class="form-control" id="semester" name="semester">
          <option value="F">Fall</option>
          <option value="W">Winter</option>
          <option value="S">Summer</option>
        </select>
      </div>
      <div class="form-group">
        <label for="days">Days: (multiple select with ctrl)</label>
        <select class="form-control" id="days" name="days" multiple>
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
        </select>
      </div>
      <div class="form-group">
        <label for="time">When does the class start:</label>
        <input class="form-control" type="time" id="time" name="time" min="08:00" max="18:00" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="instructor">Instructor name:</label>
        <input type="text" id="instructor" class="form-control" name="instructor" />
      </div>
      <div class="form-group">
        <label class="form-label" for="room">Room number</label>
        <input type="room" id="room" class="form-control" name="room" />
      </div>
      <div class="form-group">
        <label class="form-label" for="start_date">Start date:</label>
        <input type="date" id="start_date" class="form-control" name="start_date" />
      </div>
      <div class="form-group">
        <label class="form-label" for="end_date">End date:</label>
        <input type="date" id="end_date" class="form-control" name="end_date" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>
<script>
</script>