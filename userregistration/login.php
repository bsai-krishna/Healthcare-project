<html>
<head>
<title>login and registration form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="hero">
<div class="form-box">
<div class="button-box">
<div id="btn"></div>
<button type="button" class="toggle-btn" onclick="login()"> Log In </button>
<button type="button" class="toggle-btn" onclick="register()"> Register </button>
</div>
<div class="social-icons">
<a href="https://www.facebook.com/medcare.medcare.710"><img src="fb.jpg"></a>
<a href="https://twitter.com/medcare83084570"><img src="tw.jpg"></a>
<a href="https://www.instagram.com/medcare2020/"><img src="ig.png"></a>
</div>
<form action="validation.php" method="post" id="login" class="input-group">
    <input type="text" name="user" class="input-field" placeholder="User ID" required>
    <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
    <input type="checkbox" class="check-box"> <span> Remember Password  </span>
    <button type="submit" class="submit-btn"> Log In </button>
</form> 
<form action="registration.php" method="post" id="register" class="input-group">
    <input type="text" name="user" class="input-field" placeholder="User ID" required>
    <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
    <input type="text" class="input-field" placeholder="enter email" required>
    <input type="checkbox" class="check-box"> <span> I agree to the terms & conditions  </span>

    <button type="submit" class="submit-btn"> Register </button>
</form> 

</div>
</div>
<div class = "welcome">
<img src="welcome1.png">
</div>
<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px"
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px"
    

    }   
</script>

</body>
</html>