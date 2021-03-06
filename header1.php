
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Get Job</title>
    
    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Include the bootstrap stylesheet -->
    <link href="css/bootstrap.css" rel="stylesheet" media="all">

    <!-- Include the Bootstrap responsive utitlities stylesheet -->
    <link href="css/_responsive-utilities.css" rel="stylesheet" media="all">


    <!-- Include the Awesome Font stylesheet -->
    <link href="css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Include the bootstrap responsive stylesheet -->
    <link href="css/responsive.css" rel="stylesheet" media="all">

    <!-- Flexslider stylesheet -->
    <link href="js/flexslider/flexslider.css" rel="stylesheet" media="all">

    <!-- Pretty Photo stylesheet -->
    <link href="js/prettyphoto/prettyPhoto.css" rel="stylesheet" media="all">

    <!-- Pretty Photo stylesheet -->
    <link href="js/swipebox/swipebox.css" rel="stylesheet" media="all">

    <!-- Include the site main stylesheet -->
    <link href="css/main.css" rel="stylesheet" media="all">
    
    <script src="js/ckeditor.js"></script>
	<link rel="stylesheet" href="js/contents.css">
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    
    <![endif]-->

</head>
<body>


<!-- Start Header -->
<div class="header-wrapper" style="border:2px solid #FF0000">

    <div class="container"><!-- Start Header Container -->

        <header id="header" class="clearfix">

            <!-- Logo -->
			<div class="span" align="center">
                            <div class="gallery-2-columns isotope clearfix" >

                                <div class="gallery-item isotope-item on-rent ">
  
                    				<h1 style="color:#FFFFFF"><strong>ARMY WELFARE DEPARTMENT</strong></h1>
            					</div>

			<div class="gallery-item isotope-item on-rent ">
	               <div class="menu-and-contact-wrap">
                <!-- Start Main Menu-->
                <nav class="main-menu">
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="clearfix">
                        <?php
                          $full_name = $_SERVER['PHP_SELF'];
                          $name_array = explode('/',$full_name);
                          $count = count($name_array);
                          $page_name = $name_array[$count-1];
                ?>
                            <li class="<?php echo ($page_name=='update_seeker.php'||$page_name=='Seeker1.php')?'current-menu-item current_page_item':'';?>"><a href="update_seeker.php">Home</a></li>
                            <li class="<?php echo ($page_name=='seekersearch.php'||$page_name=='seekerapply.php')?'current-menu-item current_page_item':'';?>"><a href="seekersearch.php">Search Job</a></li>
							 <li class="<?php echo ($page_name=='viewjob.php')?'current-menu-item current_page_item':'';?>"><a href="viewjob.php">Posted Jobs</a></li>
                            <li class="<?php echo ($page_name=='updateseekerpassword.php')?'current-menu-item current_page_item':'';?>"><a href="updateseekerpassword.php">Update Password</a></li>
                            <li class="<?php echo ($page_name=='seekerlogout.php')?'current-menu-item current_page_item':'';?>"><a href="seekerlogout.php">Logout</a></li>
                            
                          
                        </ul>


                    </div>
                </nav><!-- End Main Menu -->

            </div><!-- End .menu-and-contact-wrap -->

        </header>

    </div> <!-- End Header Container -->

</div><!-- End Header -->
