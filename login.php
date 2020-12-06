<?php
include 'php/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/mystyle.css" />
    <title>Smart Learning</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required />
            </div> 
            <input type="submit" value="Login" class="btn solid" name="login" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://en-gb.facebook.com/login/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/login?lang=en" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form method="POST"  class="sign-up-form">
            <h2 class="title" style="color:black">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First Name" name="fname" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last Name" name="lname" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
             <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass1" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
             <input type="password" placeholder="Repeat Password" name="pass2" required />
            </div>
            <input type="submit" class="btn" value="Sign up" name="submit" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://en-gb.facebook.com/login/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/login?lang=en" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
            Click on sign up and 
            lets get started!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/logo.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            Lets go!!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/logo.png" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="js/app.js"></script>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$sql_u = "SELECT * FROM registration WHERE email='$email'";
$res_u = mysqli_query($con, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
    echo "<script>alert('You email is already registered with us')</script>";
	  }else{
      $con->query("INSERT INTO registration(fname,lname,email,password) values('$fname','$lname','$email','$pass1')");
      echo "<script>alert('Registered Sucessfully,Please Login')</script>";
    }
}
?>
<?php
if (isset($_POST['login'])) {
$email=$_POST['email'];
$password=$_POST['password'];
$sql_u = "SELECT * FROM registration WHERE email='$email' and password='$password'";
$res_u = mysqli_query($con, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
  echo "<script>alert('Login Sucessfull')</script>";
  echo "<script>window.open('dashboard.html','_self')</script>";
	  }else{
      echo "<script>alert('Invalid username and Password')</script>";
    }
}
?>

