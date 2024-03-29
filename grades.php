<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

  include("connections.php");
  include("functions.php");

  $user_data = check_login($con);

  // include("display_image.php");

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>BMCC Incomplete Grades</title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <style>
.title {
                background-color: #eeeeee;
                background-color: #2F2827;
                background:#4169E1;
                font-family: Arial,Helvetica,sans-serif; 
                font-size: large;
                padding: .2em;
                margin-left: 0em;
                margin-bottom: .1em;
                float: left;
                text-align: left;
                width: auto;
                font-weight: bold;
                font-variant: small-caps;
                text-align:left;
            }
</style>
<!-- <script src="js/cookiemanager.js" ></script> -->
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">BMCC <span class="logo_colour">Incomplete (INC) Grades</span></a></h1>
          <h2>Learn about Incomplete Grades and how to resolve them</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="classes.php">Classes</a></li>
          <li><a href="assignments.php">Assignments</a></li>
          <li class="selected"><a href="grades.php">Grades</a></li>
          <li><a href="logoff.php">Logoff</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1 style="text-align: center;">Profile</h1>
        
        <span class="center"><img src="display_image.php?id=<?php echo $user_data['student_id']; ?>" width="100px" height="100px" alt="profile" /></span> 
        <h4>Name: </h4><h5> <?php echo $user_data['user_name']; ?></h5>
        <!-- <h5>CUNYfirst EMPLID: 24266607</h5>
        <h5>Email: yemoe001@bmcc.cuny.edu</h5>
        <h5>Date of Birth: 10/08/2003</h5> -->
        <p>Learn more about INC Grades by clicking on the link below.<br/><a href="index.php">Read more</a></p>
        <h1>Useful Links</h1>
        <ul>
          <li><a target="_blank" href="https://www.bmcc.cuny.edu/">BMCC Website</a></li>
          <li><a target="_blank" href="https://www.bmcc.cuny.edu/directory/">BMCC Directory</a></li>
          <li><a target="_blank" href="https://www.bmcc.cuny.edu/a-z-index/">A-Z Index</a></li>
          <li><a target="_blank" href="https://www.bmcc.cuny.edu/library/">Library</a></li>
          <li><a target="_blank" href="https://www.bmcc.cuny.edu/academics/advisement/">Academic Advisement</a></li>
        </ul>
      </div>
      <div id="content">
        <h1><strong>Grades</strong></h1>
       
        <p>Keep track of all the grades for your classes.</p>

        <div style="border:solid #ADDC91 1px;background:#FFFFFF;float:left;width:47.9em">
        <div class="title">Data Structures</div><br><br>
        <div class="space">
        <div class="circle">
          <div class="ui-widgets">
            <div class="ui-values">35%</div>
            <div class="ui-labels">Total</div>
          </div>
        </div>
        </div>
        </div>

        <div style="border:solid #ADDC91 1px;background:#FFFFFF;float:left;width:47.9em">
        <div class="title">Software Development</div><br><br>
        <div class="space">
        <div class="circle">
          <div class="ui-widgets">
            <div class="ui-values">25%</div>
            <div class="ui-labels">Total</div>
          </div>
        </div>
        </div>
        </div>

        <div style="border:solid #ADDC91 1px;background:#FFFFFF;float:left;width:47.9em">
        <div class="title">Fundamentals of Computer Systems</div><br><br>
        <div class="space">
        <div class="circle">
          <div class="ui-widgets">
            <div class="ui-values">40%</div>
            <div class="ui-labels">Total</div>
          </div>
        </div>
        </div>
        </div>

        <div style="border:solid #ADDC91 1px;background:#FFFFFF;float:left;width:47.9em">
        <div class="title">Web Programming I</div><br><br>
        <div class="space">
          <div class="circle">
            <div class="ui-widgets">
              <div class="ui-values">15%</div>
              <div class="ui-labels">Total</div>
            </div>
          </div>
          </div>
        </div>
      
        <!-- 
        <script>
          let catalog=new Catalog();
          let x=catalog.getProducts();
          for(let i=0;i<x.length;i++)
          {
           document.writeln
           (`
           <div style="border:solid green 1px;background:#FFFFFF;float:left">
           <div class="title">${x[i].name}</div>
           <span class="left"><img src="images/${x[i].image}" style="width:200px;" onclick="#"/>
           </span>
           <p>${x[i].description}<br/><a href="#" onclick="setCookie('page','${x[i].id}',1);location.href='solopage.html';">More</a>
           <span style="float:right;text-align:left;padding:.5em;">
            <a href="#" onclick="let x=new Cart(getCookie('whoami')); x.addItem(${x[i].id},1);showAlert()";>Add to Cart</a>&nbsp;&nbsp;<a href="cart.html">Go to Cart</a>
           </span>
           </p>
           </div>
           <p> &nbsp </p >
           `);
          }
          </script> -->
      </div>
    </div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="classes.html">Classes</a> | <a href="assignments.html">Assignments</a> | <a target="_blank" href="https://www.bmcc.cuny.edu/about-bmcc/public-affairs/social-media-directory/">Contact Us</a></p>
      <p><a target="_blank" href="https://www.bmcc.cuny.edu/academics/academic-calendar/spring-regular-2024/">Calendar</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/admissions/bmcc-and-beyond/">BMCC & Beyond</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/academics/honors-and-awards/">Honors and Awards</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/academics/success-programs/">Success Programs</a></p>
    </div>
  </div>
  <div style="text-align: center; font-size: 0.75em;">Copyright &copy; 
    Ye Moe - BMCC Tech Innovation HUB Internship @ BMCC TECH LEARNING COMMUNITY</div>
</body>
</html>
