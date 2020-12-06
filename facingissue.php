<?php
include 'php/connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Learning</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <style>
    #myDiv {
      border: thick outset lightseagreen;
      height: 450px;
      width: 60%;
    }
    #styled {
    width: 600px;
    height: 120px;
    border: 3px solid #002147;
    padding: 5px;
         }
         #styledtextbox {
    width: 600px;
    border: 3px solid #002147;
    padding: 5px;
         }
         #btn {
              width: 150px;
              background-color: #002147;
              border: none;
              outline: none;
              height: 40px;
              border-radius: 49px;
              color: #fff;
              text-transform: uppercase;
              font-weight: 600;
              margin: 10px 0;
              cursor: pointer;
              transition: 0.5s;
            }
    </style>
</head>

<body>

  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <img src="images/logo.png" class="image" alt="" width="200px" height="70px" />
    </div>

  </header>
  <!--header area end-->

  <!--sidebar start-->
  <div class="sidebar">
    <div class="profile_info">
      <img src="images/personlogo.png" class="profile_image" alt="">
      <h4>Ganesh</h4>
    </div>
    <a href="dashboard.html"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="course.html"><i class="fas fa-book-open"></i><span>Courses</span></a>
    <a href="achievements.html"><i class="fas fa-certificate"></i><span>Achivements</span></a>
    <div class="active"><a href="#"><i class="fas fa-question-circle"></i><span>Facing Issue</span></a></div>
    <a href="login.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
  </div>
  <!--sidebar end-->

  <div class="content">
    <img src="images/coursecover.jpg" class="image" alt="" width="1070" />
        <center>
            <form method="POST" >
            <h2 class="title">Facing any issues?</h2>
            <div>
              <input type="text" id="styledtextbox" placeholder="Enter Subject" name="subject" required/>
            </div>
            <div>
              <h1></h1>
              <h1></h1>
              <h1></h1>
              <h1></h1>
              <h1></h1>
              <textarea name="description" id="styled" placeholder="Enter Description" required ></textarea>
            </div>
            <input type="submit" value="Submit" id="btn" name="submit" />
            <p class="social-text">Feel Free to share your issue with us.</p>
          </form>
        </center>
    </div>
    <script type="text/javascript">
      $(document).ready(function () {
        $('.nav_btn').click(function () {
          $('.mobile_nav_items').toggleClass('active');
        });
      });
    </script>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
$subject=$_POST['subject'];
$description=$_POST['description'];
$con->query("INSERT INTO issues(subject,description) values('$subject','$description')");
      echo "<script>alert('You issues has been recorded, we will try to resolve it soon')</script>";
}
?>