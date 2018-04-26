<!Doctype html>
<html>
<head><title>login</title>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <h2>Sign in</h2><br>
  <form method="post" action="registration.php">
  	<div class="form-group">
      <label for="name">username:</label>
      <input type="text" name="user_name" class="form-control" id="name" placeholder="Enter userName">
     </div>
     <div class="form-group">
      <label for="name">Password:</label>
      <input type="text" name="password" class="form-control" id="name" placeholder="Enter password">
     </div>
     <br>
      <button type="submit" class="btn btn-primary">Login</button>

  </form>
</div>
</body>
</html>