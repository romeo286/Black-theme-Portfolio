
 <?php
// // Initialize the session
 session_start();
 
 // Check if the user is logged in, if not then redirect him to login page
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     header("location: login.php");
    exit;
 }
 ?>







<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="harrnish">

      <title>Portfolio Website | MegaByte</title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="style.css">

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="animate.css">
      <script src="wow.min.js"></script>

</head>
<body>
      <div class="wrapper">

            <!--------------- navbar starts here --------------->
            <nav>
                  <span id="brand">
                        <a href="welcome.php">Megabyte</a>
                  </span>

                  <ul id="menu">
                        <li><a href="welcome.php">home<span>.</span></a></li>
                        <li><a href="work.php">work<span>.</span></a></li>
                        <li><a href="about.php">about me<span>.</span></a></li>
                        <li><a href="contact.php">contact<span>.</span></a></li>
                  </ul>

                  <div id="toggle">
                        <div class="span">menu</div>
                  </div>

            </nav>

            <div id="resize">
                  <div class="close-btn">close</div>

                  <ul id="menu">
                  <li><a href="welcome.php">home<span>.</span></a></li>
                        <li><a href="work.php">work<span>.</span></a></li>
                        <li><a href="about.php">about me<span>.</span></a></li>
                        <li><a href="contact.php">contact<span>.</span></a></li>
                  </ul>
            </div>

            <!--------------- navbar ends here --------------->


            <!--------------- hero image starts here --------------->
            <div class="container">
                  <div class="row">
                        <div class="col-lg-12 about image wow fadeInUp" data-wow-delay="1s"></div>
                  </div>
            </div>
            <!--------------- hero image ends here --------------->


            <!--------------- hero section starts here --------------->
            <div class="container">
                  <div class="hero-content">
                        <br><br>

                        <div class="row">
                              <div class="col-lg-12">
                                    <h3 class="wow fadeInUp" data-wow-delay="1.2s">about me.</h3><br>

                                    <p class="wow fadeInUp">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi libero fugiat corporis aut rerum expedita? Accusantium repudiandae blanditiis tempora dicta architecto ducimus, laborum totam sunt impedit inventore iste dolorem accusamus?</p>

                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet consectetur adipisicing elit. At porro illum, facilis modi sed soluta neque, cupiditate repellat atque necessitatibus dicta, sapiente dolor quae sint ea in asperiores consectetur dignissimos!</p>

                              </div>
                        </div>
                  </div>
            </div>
            <!--------------- hero section ends here --------------->

            <div class="whitespace"></div>

            <!--------------- footer starts here --------------->
            <div class="footer">
                  <div class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <p class="wow fadeInUp">Got an interesting project? I can help you.</p>
                                    </div>
                              </div>
                        </div>

                        <br>

                        <div class="hr">
                              <div class="row"></div>
                        </div>

                        <br><br>

                        <div class="info">
                              <div class="row">
                                    <div class="col-lg-4" id="personal">
                                          <p class="wow fadeInUp">connect with me</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">ig @Megabyte</h4>
                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="media">
                                          <p class="wow fadeInUp" data-wow-delay="0s">follow me</p>

                                          <ul>
                                                <li id="fb" class="wow fadeInUp" data-wow-delay="0.4s"><a href="facebook.com">fb</a></li>
                                                <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s"><a href="facebook.com">tw</a></li>
                                                <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s"><a href="facebook.com">git</a></li>
                                                <li id="yt" class="wow fadeInUp" data-wow-delay="1s"><a href="facebook.com">insta</a></li>
                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="address">
                                          <p class="wow fadeInUp" data-wow-delay="0s">say hi</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">Megabyte@gmail.com</h4>
                                          <br><br>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <!--------------- footer ends here --------------->

            <br><br><br><br>

      </div>

      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script type="text/javascript">

      // navigation starts here
      $("#toggle").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $("#resize ul li a").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $(".close-btn").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      // navigation ends here

      // nav animation

      TweenMax.from("#brand", 1, {
            delay: 0.4,
            y: 10,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom("#menu li a", 1, {
            delay: 0.4,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

      // nav animation ends

      new WOW().init();


      </script>
</body>
</html>
