<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Shop</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>

   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <h1 class="call_text">Call Us : +94 772068500</h1>
                  </form>
                  <div class="search_icon">
                     <ul>
                        <!--<li><a href="#"><img src="images/search-icon.png"></a></li>-->
                        <li><a href="login.html">LOGIN</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->

      <!-- shop section start -->
      <div class="our_section layout_padding">
         <div class="container">
            <h1 class="our_text">OUR SERVICES</h1>
            <p class="sub_text">Choose between a variety of machinery and equipment at your preference</p>
            <!-- services section start -->
         <div class="container">
            <div class="services_section2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><a href="rent.html"><img src="images/icon-1.png"></a></div>
                     <?php
                     $servername="localhost";
                     $username="root";
                     $password="";
                     $dbname="shine_machinery";
                     $bulldozer_count=0;
                     $excavator_count=0;
                     $crane_count=0;
                     $boom_lift_count=0;
                     $scissor_lift_count=0;
                     $tool_sets_count=0;
                     $scaffolding_sets_count=0;
                     $steer_loader_count=0;
                     $forklift_count=0;

                     //create connection
                     $conn=mysqli_connect($servername,$username,$password,$dbname);
                     if(!$conn){
                        die("connection failed:".mysqli_connect_error());

                     }
                     $sql="SELECT machine_type, amount FROM machinary";
                     $result=mysqli_query($conn, $sql);

                     if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)) {
                           switch($row['machine_type'])
                           {
                           case 'Bulldozer':
                           {
                           $bulldozer_count = $row['amount'];
                           break;
                           }
                           case 'Excavator':
                           {
                           $excavator_count = $row['amount'];
                           break;
                           }
                           case 'Crane':
                           {
                           $crane_count = $row['amount'];
                           break;
                           }
                           case 'Boom Lift':
                           {
                           $boom_lift_count = $row['amount'];
                           break;
                           }
                           case 'Scissor Lift':
                           {
                           $scissor_lift_count = $row['amount'];
                           break;
                           }
                           case 'Tool Sets':
                           {
                           $tool_sets_count = $row['amount'];
                           break;
                           }
                           case 'Scaffolding Sets':
                           {
                           $scaffolding_sets_count = $row['amount'];
                           break;
                           }
                           case 'Steer Loader':
                           {
                           $steer_loader_count = $row['amount'];
                           break;
                           }
                           case 'Forklift':
                           {
                           $forklift_count = $row['amount'];
                           break;
                           }
                           }

                        }
                     }


                     ?>
                     <h2 class="types_text">Heavy Machinery </h2>
                     <p class="types_subtext">All types of heavy machinery requirements </p>
                     <p class="types_subtext"><u>Availability</u></p>
                     <p class="types_subtext1">Bulldozer : <?php echo "<b>".$bulldozer_count."</b>"; ?> </p>
                     <p class="types_subtext1">Excavator : <?php echo "<b>".$excavator_count."</b>"; ?>  </p>
                     <p class="types_subtext1">Crane : <?php echo "<b>".$crane_count."</b>"; ?> </p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><a href="rent.html"><img src="images/icon-2.png"></a></div>
                     <h2 class="types_text">Equipment </h2>
                     <p class="types_subtext">Different types of construction and related equipment</p>
                     <p class="types_subtext"><u>Availability</u></p>
                     <p class="types_subtext1">Boom Lift : <?php echo "<b>".$boom_lift_count."</b>"; ?>  </p>
                     <p class="types_subtext1">Scissor Lift : <?php echo "<b>".$scissor_lift_count."</b>"; ?> </p>
                  </div>
                 <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><a href="rent.html"><img src="images/icon-3.png"></a></div>
                     <h2 class="types_text">Hardware</h2>
                     <p class="types_subtext">Hand-held tools and electric construction equipment</p>
                     <p class="types_subtext"><u>Availability</u></p>
                     <p class="types_subtext1">Tool Sets : <?php echo "<b>".$tool_sets_count."</b>"; ?> </p>
                     <p class="types_subtext1">Scaffolding Sets : <?php echo "<b>".$scaffolding_sets_count."</b>"; ?> </p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><a href="rent.html"><img src="images/icon-4.png"></a></div>
                     <h2 class="types_text">Light Machinery </h2>
                     <p class="types_subtext1">Variety of Light construction equipment</p>
                     <p class="types_subtext1"><u>Availability</u></p>
                     <p class="types_subtext1">Steer Loader : <?php echo "<b>".$steer_loader_count."</b>"; ?> </p>
                     <p class="types_subtext1">Forklift : <?php echo "<b>".$forklift_count."</b>"; ?> </p>

                  </div>

                  <button class="rent_button">
                     <a href="rent.html">Rent Now!</a>
                  </button>
                     

               </div>
         </div>
      </div>
      <!-- shop section end -->
      
      <!-- copyright section start -->
      <div class="copyright_section">
      <div class="container">
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="images/fb-icon.png"></a></li>
               <li><a href="#"><img src="images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
            </ul>
         </div>
         <p class="copyright_text">INTE 21233 - Web Application Development I | &copy; Group 3</p>
      </div>
      <!-- copyright section end -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    

   </body>
   
</html>