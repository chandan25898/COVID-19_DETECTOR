<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <body>
    <div>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="https://www.google.com/search?q=covid&rlz=1C1RLNS_enIN805IN805&sxsrf=ALeKk03WdHsiG1eWwQ8rtZIZRqF_dZlv8A:1594878547900&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi-vrrKidHqAhUH4HMBHfyOBwwQ_AUoAnoECCMQBA&biw=1536&bih=731" target="_blank">Gallery</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="loginbox">
      <img src="login.png" class="user">
      <h1>Login Panel</h1>
      <form name="f1" action = "log.php" onsubmit = "return validation()" method = "POST">
        <p> <i class="fa fa-user-circle" aria-hidden="true"></i>   User Name</p>
        <input type="text" name="username" placeholder="Enter Email / Mobile Number" id="username">
        <p><i class="fa fa-key" aria-hidden="true"></i> User password</p>
        <input type="password" name="password" placeholder="Enter Password" id="password">
        <span class="eye" onclick="iconShowHide();">
          <i id="enable" class="fa fa-eye" aria-hidden="true"></i>
          <i id="disable" class="fa fa-eye-slash" aria-hidden="true"></i>
        </span>
        <p>
            <input type="submit" name="loginbtn" id = "btn" value = "Login" />
        </p>
        <a href="#">Forgotten Password</a><br><br>
          </form>
        <form action="register.php">
          <input type="submit" name="registerbtn" value="Register" id= "btn1">
        </form>




    </div>
    <script>
      function iconShowHide(){
        var x = document.getElementById("password");
        var y = document.getElementById("enable");
        var z = document.getElementById("disable");
        if(x.type === 'password'){
          x.type = "text";
          y.style.display = "block";
          z.style.display = "none";
        }
        else{
          x.type = "password";
          y.style.display = "none";
          z.style.display = "block";
        }
      }
    </script>
    <script>
            function validation()
            {
                var id=document.f1.user.value;
                var ps=document.f1.pass.value;
                if(id.length=="" && ps.length=="") {
                    alert("User Name and Password fields are empty");
                    return false;
                }
                else
                {
                    if(id.length=="") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Password field is empty");
                    return false;
                    }
                }
            }
        </script>
    <div id="particles-js"></div>
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>


  </body>
</html>
