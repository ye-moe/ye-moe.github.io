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
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="classes.php">Classes</a></li>
          <li><a href="assignments.php">Assignments</a></li>
          <li><a href="logoff.php">Logoff</a></li>
        </ul>
      </div>
    </div>
    <!-- --------------------  PLACE SLIDER CODE HERE START---------------- -->
     <div class="container" style="width: 956px; margin-left: auto; margin-right: auto;">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="images/bmccbeyond.jpg" />
                </div>
                <div>
                    <img u="image" src2="images/maxresdefault.jpg" />
                </div>
                <div>
                    <img u="image" src2="images/ontheroad.jpeg" />
                </div>
                <div>
                    <img u="image" src2="images/main-campus.jpg" />
                </div>
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/tutorial/set-bullet-navigator.html -->
            <style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
                .jssorb05 {
                    position: absolute;
                }
                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 16px;
                    height: 16px;
                    background: url(img/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb05 div { background-position: -7px -7px; }
                .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                .jssorb05 .av { background-position: -67px -7px; }
                .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
            
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/tutorial/set-arrow-navigator.html -->
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(img/a11.png) no-repeat;
                    overflow: hidden;
                }
                .jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Carousel</a>
        </div>
        <!-- Jssor Slider End -->
    </div>
    <!-- Wrap the rest of the page in another container to center all the content. -->

    
    
    <!-- --------------------  PLACE SLIDER CODE HERE END ----------------  -->
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
        <h1><strong>What are Incomplete (INC) Grades?</strong></h1>
        <p>Terms work incomplete. 
          Instructor has reasonable expectation that the student can receive 
          a passing grade after completing the missing assignment(s) 
          and agrees to work with the student to make up the missing work. 
          Student must also agree with the faculty to make the missing work before the INC deadline 
          which is published on BMCC Academic Calendar on the web. 
          The “INC” grade reverts to an “FIN” if a change is not made by deadline.</p>

        <h1><strong>Resolving Incomplete (INC) Grades</strong></h1>
        <p>If you are a student who has been assigned an INC grade, 
          it means that you have not completed all of your assignments in your class. 
          Your instructor had reasonable expectation that you can receive a passing grade 
          after completing the missing assignments and agreed to work with you to make up the missing work. 
          You also agreed with your instructor to finish the missing work. 
          You may still have time to finish your missing work to receive a letter grade 
          before your INC grade turns to an “FIN”.</p>

        <h2>Take the following steps: </h2>
        <ul>
          <li>You should reach out to your professor to confirm that 
            it is not too late to submit your missing work and 
            which assignments you need to submit in order to earn a letter grade.</li>
          <li>All missing coursework must be completed no later than the deadline posted on the <a target="_blank" href="https://www.bmcc.cuny.edu/academics/academic-calendar/spring-regular-2024/">academic calendar</a>. 
            If your work is not submitted by that deadline, your INC will become an FIN. 
            An FIN grade factors into a students GPA as an F and 
            a faculty may not be able to change it to a letter grade after the deadline.</li>
        </ul>

        <h5>If you need more information, please visit: If you need additional guidance, contact <a href="#">studentsuccess@bmcc.cuny.edu</a>. 
          If you are a member of ASAP, BLA, College Discovery, or CUNY EDGE, 
          you may choose to contact your advisor.</h5>
      </div>

      <script>
        window.watsonAssistantChatOptions = {
          integrationID: "1fc846c3-376c-445e-be09-e96653810d72", // The ID of this integration.
          region: "us-east", // The region your integration is hosted in.
          serviceInstanceID: "e5751802-8b86-41ae-b412-2164c99efe5e", // The ID of your service instance.
          onLoad: async (instance) => { await instance.render(); }
        };
        setTimeout(function(){
          const t=document.createElement('script');
          t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
          document.head.appendChild(t);
        });
      </script>

      <!-- <script>
        window.watsonAssistantChatOptions = {
          integrationID: "1fc846c3-376c-445e-be09-e96653810d72", // The ID of this integration.
          region: "us-east", // The region your integration is hosted in.
          serviceInstanceID: "e5751802-8b86-41ae-b412-2164c99efe5e", // The ID of your service instance.
          onLoad: async (instance) => { await instance.render(); }
        };
        setTimeout(function(){
          const t=document.createElement('script');
          t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
          document.head.appendChild(t);
        });
      </script> -->

    </div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="classes.php">Classes</a> | <a href="assignments.php">Assignments</a> | <a target="_blank" href="https://www.bmcc.cuny.edu/about-bmcc/public-affairs/social-media-directory/">Contact Us</a></p>
      <p><a target="_blank" href="https://www.bmcc.cuny.edu/academics/academic-calendar/spring-regular-2024/">Calendar</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/admissions/bmcc-and-beyond/">BMCC & Beyond</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/academics/honors-and-awards/">Honors and Awards</a> | 
        <a target="_blank" href="https://www.bmcc.cuny.edu/academics/success-programs/">Success Programs</a></p>
    </div>
  </div>
<div style="text-align: center; font-size: 0.75em;">Copyright &copy; 
  Ye Moe - BMCC Tech Innovation HUB Internship @ BMCC TECH LEARNING COMMUNITY</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.slider.debug.js for debug -->
    <!--
    <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
    -->
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
</body>
</html>
