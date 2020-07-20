
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <link rel="stylesheet" type="text/css" href="register_style.css">
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
      <h1>Register Panel</h1>
      <form action="try.php" method="post">
        <p></i> User Name</p>
        <input type="text" name="username" placeholder="Enter Name" id="username">
        <p></i> User Mobile</p>
        <input type="text" name="usermob" placeholder="Enter Mobile Number" id="usermob">
        <p></i> User Email</p>
        <input type="text" name="useremail" placeholder="Enter Email / Mobile Number" id="useremail">
        <p></i> Set Password</p>
        <input type="password" name="password" placeholder="Enter Password" id="password">
        <span class="eye" name="eye1" onclick="iconShowHide();">
          <i id="enable" class="fa fa-eye" aria-hidden="true"></i>
          <i id="disable" class="fa fa-eye-slash" aria-hidden="true"></i>
        </span>
        <p></i> Confirm Password</p>
        <input type="password" name="confirm_password" placeholder="Enter Password" id="password">
        <p></i><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHave you traveled in the last 14 Days ?</strong></p></br>
        <div class="radio-group">
          <label class="radio">
            <input type="radio" value="yes" name="traveled" onclick="alert('You have to stay at home for 14 days.')">
            YES
            <span></span>
          </label>
          <label class="radio">
            <input type="radio" value="no" name="traveled">
            NO
            <span></span>
          </label>
        </div>
        <p></i><strong></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDo you have symptoms of cough and cold ?</strong></p></br>
        <div class="radio-group">
          <label class="radio">
            <input type="radio" value="yes" name="cough" onclick="alert('You have to consult with doctor.')">
            YES
            <span></span>
          </label>
          <label class="radio">
            <input type="radio" value="no" name="cough">
            NO
            <span></span>
          </label>
        </div>
        <input type="submit" name="registerbtn" value="Register">

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
    <div id="particles-js"></div>
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>

  </body>
</html>
