<!Doctype html>
<html>
<head><title>sign up</title>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  	<div class="jumbotron">
  <h2>Sign up</h2><br>
  <form method="post" action="insert.php">
  	<div class="form-group">
      <label for="name">username:</label>
      <input type="text" name="user_name" class="form-control" id="name" placeholder="Enter userName">
     </div>
  	<div class="form-group">
      <label for="name">First Name:</label>
      <input type="text" class="form-control" id="name"  name="first_name" placeholder="Enter FName">
     </div>
     <div class="form-group">
      <label for="name">Last Name:</label>
      <input type="text" name="last_name" class="form-control" id="name" placeholder="Enter LName">
     </div>
     <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="text" name="date_of_birth" class="form-control" id="dob" placeholder="Enter dob">
     </div>
     <h5><B>Gender</B></h5>
    <label class="radio-inline">
      <input type="radio" name="optradio">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Female
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Others
    </label>
     <div class="form-group">
      <label for="email">Email id:</label>
      <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="name">Mob No:</label>
      <input type="text" name="mob_no" class="form-control" id="name" placeholder="Enter Mob No">
     </div>
    <div class="form-group">
      <label for="name">Address:</label>
      <input type="Address" name="address" class="form-control" id="name" placeholder="Enter Address">
     </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>

  </form>
</div>
</div>
</body>
</html>