<?php 
//Session Started
session_start();

//checking that Customer has sign-in or not
if(!isset($_SESSION['OName']))
{
    header('location:../Signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>


    <title>Owner Profile</title>

    <!-- ***** Bootstrap link ***** -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ***** Font style css ***** -->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ***** Style css ***** -->

     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

        <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

        <!--<link rel="stylesheet" href="assets/css/style_2.css">-->

    </head>
    
    <body>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="OwnerProfile.php" class="logo">Luxurito <em> Event</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        
                        <ul class="nav">
                            <li><a href="OwnerAddVenue.php">Add Venue</a></li>
                                <li><a href="OwnerViewVenue.php">View Venues</a></li>
                                <li><a href="OwnerAllVenues.php">All Bookings</a></li>
                            <?php
                            if(isset($_SESSION['OName']))
                            {
                                echo "<li><a href='Logout.php'>Logout</a></li>";
                            }
                               
                           ?>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    <section class="section section-bg" id="call-to-action" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content">
                        <!-- ***** With session getting name of owner ***** -->
                        <!--<img src="https://ui-avatars.com/api/?name=<?php echo $_SESSION['OName'] ?>" class="OwnerIcon">-->
                        <h2>Welcome <em><?php echo $_SESSION['OName'] ?></em></h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="cta-content">
                        <br>
                        <br>
                        <br>
                        <!-- ***** getting name of owner with session ***** -->
                        <h3 class="ODetailrow">Name - <?php echo $_SESSION['OName'] ?></h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="cta-content">
                        <br>
                        <!-- ***** getting email of owner with session ***** -->
                        <h3 class="ODetailrow">Email - <?php echo $_SESSION['OEmail'] ?></h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="cta-content">
                        <br>
                        <!-- ***** getting Phone number of owner with session ***** -->
                        <h3 class="ODetailrow">Phone Number - <?php echo $_SESSION['ONumber'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
   
    
    <!-- ***** Including footer ***** -->
    <?php include 'Footer.php'; ?>

  </body>
</html>