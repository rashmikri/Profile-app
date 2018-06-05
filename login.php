<!DOCTYPE html>
<html>
<head>
    <title>Sign in</title>
</head>
<body>
    <form method="post"  onsubmit="return validation()" action="validate_login.php">
    <div class="login_box">
        <h1>Login</h1>
        <div class="text_box">
            <label for = "email">Email Id:</label>
            <input type="text" name="email" placeholder="Enter your email id">   
        </div>
        <div class="text_box">
            <label for="password">Password:</label>
            <input type="text" name="password" placeholder="Enter your password">     
        </div>
        <input type="button" class="btn" value="Sign In">    
    </div>
</form>
<script type="text/javascript">
    function validation(){
        var errors = [];
         var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,)3})+$/;
         var email =  document.forms["form_data"]["email"].value;
         var password = document.forms["form_data"]["password"].value;
         if(email === ""){
            errors[email] = "email should not be empty";
         }
         if(!email.match(mailformat)){
            errors["mail"] = "Invalid mail";
         }
         if(password === ""){
            errors["password"] = "password should not be empty";
         }
         if(!password.length >= 8){
            errors["Password"] = "password lenght must be greater than 8"
         }
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
