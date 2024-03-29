<?php
session_start();

  if(isset($_SESSION['student_id'])){
    unset($_SESSION['student_id']);
  }

  header("Location: login.php");
  die;
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>BMCC Incomplete Grades</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
<!--
  <script src="js/cookiemanager.js"></script>
  <script src="js/Login.js"></script>

  <script>
    function logoff()
    {
        delCookie("flag","",-1);
        delCookie("whoami", "", -1);
        location.href="login.html";
    }
  </script>
-->
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="login.php">BMCC <span class="logo_colour">Incomplete (INC) Grades</span></a></h1>
          <h2>Learn about Incomplete Grades and how to resolve them</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <!-- <script src="js/menu.js"></script> -->
          <li class="selected"><a href="logoff.php">Logoff</a></li>
        </ul>
      </div>
    </div>
    <p style="padding:5.5px"></p><p></p>
    <div id="site_content">
      <div id="content" style="width:67em;">
        <h1 style="text-align:center;">Logoff</h1>
        <p style="padding:4px;text-align:center;margin-left:3px;"><strong>You have successfully logged off:</strong> Log in Again to Manage Your Class Activities. <br/><br/>
            <span style="float:left;text-align:left;padding:.5px;">
                <a href="login.php">Login</a>
              </span>
        <p></p>
        </p>
        
      </div>
    </div><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><br/><br/><br/>
    <div id="footer">
      <div class="space"></div>
      <p><a href="register.php">Registration</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/academics/academic-calendar/spring-regular-2024/">Calendar</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/about-bmcc/public-affairs/social-media-directory/">Contact Us</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/admissions/bmcc-and-beyond/">BMCC & Beyond</a></p>
    </div>
    </div>
    <div style="text-align: center; font-size: 0.75em;">Copyright &copy; 
      Ye Moe - BMCC Tech Innovation HUB Internship @ BMCC TECH LEARNING COMMUNITY</div>
</body>
</html>
