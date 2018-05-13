<!Doctype html>
<html>
<head><title>sign up</title>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/countrypicker.js"></script>
</head>
<body>

  <div class="container">
  	<div class="form-horizontal">
    <center> <b> <u><h1>Sign up</h1></b></u><br></center>
         <form id="reg" method="post" action="insert.php" onSubmit="return formValidation();">
  	         <div class="form-group">
              <label for="name">First Name:</label>
              <input type="text" class="form-control" id="name"  name="first_name" placeholder="Enter FName">
            </div>
            <div class="form-group">
              <label for="name">Last Name:</label>
              <input type="text" name="last_name"  class="form-control" id="name" placeholder="Enter LName">
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth:</label>
              <input type="text" name="date_of_birth" class="form-control" id="dob" placeholder="Enter dob">
            </div>
            <div class="form-group">
            <label for="gender">Gender</label>
            <label class="radio-inline">
              <input type="radio" name="optradio" value="male" >Male</label>
              <label class="radio-inline">
                <input type="radio" name="optradio" value="female" >Female
              </label>
              <label class="radio-inline">
                <input type="radio" name="optradio" value="others" >Others
              </label><br>
            </div>
              <div class="form-group">
                <label for="name">Mob No:</label>
                <input type="text" name="mob_no" class="form-control" id="name" placeholder="Enter Mob No">
              </div>
              <div class="form-group">
                <label for="name">Street:</label>
                 <textarea class="form-control" rows="2" name="street" id="street"></textarea>
              </div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="city">City</label>
                    <select class="form-control" id="select" name="city">
                      <option>Ramgarh</option>
                      <option>Ranchi</option>
                      <option>Hazaribagh</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="others">If Others</label>
                    <input type="others" name="others" class="form-control">
                  </div>
              </div>
            </div>
             <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" id="state" name="state">
                      <option>Jharkhand</option>
                      <option>Orrisa</option>
                      <option>Karnataka</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="others">If Others</label>
                    <input type="others" name="others1" class="form-control">
                  </div>
              </div>
            </div>
             <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="pin">Pin Code</label>
                    <input type="Number" class="form-control" id="pin" name="pin">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="country">Country</label>
                    <select class="form-control" id="country" name="country">
                      <option>Afganistan</option>
                      <option>Albenia</option>
                      <option>Algeria</option>
                      <option>India</option>
                      <option>Indonesia</option>
                      <option>Bhutan</option>
                      <option>France</option>
                      <option>Pakistan</option>
                    </select>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email Id:</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="passw" id="Password" class="form-control">
                </div>      
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="password">Confirm Password</label>
                  <input type="password" name="cpassw" id="password" class="form-control">
                </div> 
              </div>
            </div>
          <center>  <button type="submit" class="btn btn-primary btn-lg">Submit</button></center>


        </body>
        </html>