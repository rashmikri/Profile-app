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
  	<div class="form-horizontal">
    <center> <b> <u><h1>Sign up</h1></b></u><br></center>
         <form name="form_data"   id="reg" method="post"  action="validate.php" onsubmit="return validate()" >
  	         <div class="form-group">
              <label for="name">First Name:</label>
              <input type="text" class="form-control" id="fname"  name="first_name" placeholder="Enter FName" >
              <span class="error_form" id="fname_error_msg"></span>
            </div>
            <div class="form-group">
              <label for="name">Last Name:</label>
              <input type="text" name="last_name"  class="form-control" id="lname" placeholder="Enter LName" >
              <span class="error_form" id="laname_error_msg"></span>
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth:</label>
              <input type="text" name="date_of_birth" class="form-control" id="dob" placeholder="Enter dob" >
              <span class="error_form" id="dob_error_msg"></span>
            </div>
            <div class="form-group">
            <label for="gender">Gender</label>
            <label class="radio-inline">
              <input type="radio" name="gender"  value="male" >Male</label>
              <label class="radio-inline">
                <input type="radio" name="gender"  value="female" >Female
              </label>
              <label class="radio-inline">
                <input type="radio" name="gender"  value="others" >Others
              </label><br>
            </div>
              <div class="form-group">
                <label for="mobno">Mob No:</label>
                <input type="text" name="mob_no" class="form-control" id="mobno" placeholder="Enter Mob No" >
                <span class="error_form" id="mob_error_msg"></span>
              </div>
              <div class="form-group">
                <label for="street">Street:</label>
                 <textarea class="form-control" rows="2" name="street" id="street" ></textarea>
                 <span class="error_form" id="street_error_msg"></span>
              </div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="city">City</label>
                    <select class="form-control" id="select" name="city">
                      <option>Ramgarh</option>
                      <option>Ranchi</option>
                      <option>Hazaribagh</option>
                      <option>Bangalore</option>
                    </select>
                  </div>
                </div>
            </div>
             <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" id="state"  name="state">
                      <option>Jharkhand</option>
                      <option>Orrisa</option>
                      <option>Karnataka</option>
                    </select>
                  </div>
                </div>
                  </div>
             <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="pin">Pin Code</label>
                    <input type="Number" class="form-control" id="pin" name="pin" >
                    <span class="error_form" id="pin_error_msg"></span>
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
              <span class="error_form" id="email_error_msg"></span>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" id="password" class="form-control">
                  <span class="error_form" id="pass_error_msg"></span>
                </div>      
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="password">Confirm Password:</label>
                  <input type="password" name="cpassword" id="cpassword" class="form-control">
                  <span class="error_form" id="cpass_error_msg"></span>
                </div> 
              </div>
            </div>
          <center>  <button type="submit" class="btn btn-primary btn-lg" id="submit" >Submit</button></center>
        </form>
        <script type="text/javascript">
          function validate(){

            var errors = [];
            var fname = document.forms["form_data"]["first_name"].value;
            var lname = document.forms["form_data"]["last_name"].value;
            var dob = document.forms["form_data"]["date_of_birth"].value;
            var gender = document.forms["form_data"]["gender"].value;
            var mob_no = document.forms["form_data"]["mob_no"].value;
            var street= document.forms["form_data"]["street"].value;
            var city = document.forms["form_data"]["city"].value;
            var state = document.forms["form_data"]["state"].value;
            var pin = document.forms["form_data"]["pin"].value;
            var country =  document.forms["form_data"]["country"].value;
            var email =  document.forms["form_data"]["email"].value;
            var password = document.forms["form_data"]["password"].value;
            var cpassword = document.forms["form_data"]["cpassword"].value;
            var letters = /^[A-Za-z]+$/;
            var numbers = /^[0-9]+$/;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var phoneno = /^\d{10}$/;

            if(fname === "") {
              errors["fname"] = "Name should not be empty";
            }
            
            if(lname === "") {
              errors["lname"] = "last name should not be empty"; 
            }
            
            if(dob === "") {
              errors["dob"] = "dob should not be empty";
            }
           
            if(gender === "") {
              errors["gender"] = " Must select one";
            }
            if(mob_no === "") {
              errors["mob_no"] = "mobno should not be empty";
            }
            if(street === "") {
              errors["street"] = "Street should  " ;
            }
           
            if(city === "") {
              errors["city"] = " city should not be empty";
            }
            
            if(state === "") {
              errors["state"] = "Must select one";
            }
           
            if(pin === "") {
              errors["pin"] = " Pin should not be empty";
            }
          
            if(country === "") {
              errors["country"] = "Select a country";
            }
            
            if(email === ""){
              errors["email"] = " email should not be empty";
            }
            
            if(password === "" ){
              errors["password"] = "password should not be empty";
            }
            
            if(cpassword === ""){
              errors["cpassword"] = "password should not be empty";
            }

            if(password !== cpassword ){
              errors["checkpass"] = "password mismatch";

            }
            if (password.length  >= 8 ){
              errors["checklength"] = "Password length must be atleast 8";
            }

            if(!fname.match(letters)) {
              errors["fletters"] = "Name should conatain alphabets only";
            }

            if(!lname.match(letters)){
              errors["lletters"] = "it should be a " ;
            }

            if(!mob_no.match(phoneno)) {
              errors["mob"] = "Must be 10 digit number";
            }

            if(!pin.match(numbers)) {
              errors["numbers"] = "it should contain numbers only";
            }
            if(!email.match(mailformat)){
              errors["mail"] = "Invalid mail";
            }
            console.log(errors);
            if (Object.keys(errors).length === 0) {
              return true;
            } 
            else {
              return false;
            }
          }
        </script>
        </body>
        </html>