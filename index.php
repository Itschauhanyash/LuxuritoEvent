<?php
//Session Started
session_start();

include './DBC.php';

$prj = "SELECT * FROM event ORDER BY RAND() LIMIT 3";
$stmt = $con->query($prj);
if ($stmt) {
    while ($row = $stmt->fetch_assoc()) {
        $Idrecord[] = $row['Event_ID'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <title>Luxurito Events</title>
        <!--
        
        TemplateMo 548 Training Studio
        
        https://templatemo.com/tm-548-training-studio
        
        -->
        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

        <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
        <link rel="shorticon" href="assets/images/letter_L_PNG98.png"/>
    </head>

    <body>

        <!--     ***** Preloader Start ***** 
            <div id="js-preloader" class="js-preloader">
              <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
             ***** Preloader End ***** -->

        <?php include 'Header.php'; ?>
        <!-- ***** Header Area Start ***** -->
        <!--    <header class="header-area header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="main-nav">
                                 ***** Logo Start ***** 
                                <a href="index.php" class="logo">Luxurito<em> Event</em></a>
                                 ***** Logo End ***** 
                                 ***** Menu Start ***** 
                                <ul class="nav">
                                    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                                    <li class="scroll-to-section"><a href="#features">Venue</a></li>
                                    <li class="scroll-to-section"><a href="#our-classes">Event</a></li>
                                    <li class="scroll-to-section"><a href="#schedule">About</a></li>
                                    <li class="scroll-to-section"><a href="#contact-us">Contact</a></li> 
                                    <li class="scroll-to-section"><a href="Sign-In.php">Sign Up</a></li>
                                </ul>        
                                <a class='menu-trigger'>
                                    <span>Menu</span>
                                </a>
                                 ***** Menu End ***** 
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
             ***** Header Area End ***** -->

        <!-- ***** Main Banner Area Start ***** -->
        <div class="main-banner" id="top">
            <video autoplay muted loop id="bg-video">
                <source src="assets/images/EventVideo3.mp4" type="video/mp4" />
            </video>

            <div class="video-overlay header-text">
                <div class="caption">
                    <h6>Life is a Event, Make it Memorable</h6>
                    <h2>plan with <em>us</em></h2>
                    <div class="main-button scroll-to-section">
                        <a href="Events.php">Book your event</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Main Banner Area End ***** -->



        <!-- ***** main block Starts ***** -->
        <section class="section" id="trainers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2 style="color: black;">Our <em> Events</em></h2>
                            <img src="assets/images/line-dec.png" alt="">
                            <p></p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="container">
                        <div class="row" style="display: inline-flex;">
                            <?php foreach ($Idrecord as $rec) { ?>
                                <div class="col-md-4">
                                    <div class="trainer-item">
                                        <div class="image-thumb1">
                                            <?php
                                            //variable to store the venue id 
                                            $idvenue = $rec;
                                            //query to search the image associated with venue id 
                                            $srcimg = mysqli_query($con, "Select * FROM Eventimage where Venue_ID = $idvenue");
                                            while ($row = $srcimg->fetch_assoc()) {
                                                //fatching image name/path associated with the given id
                                                $id = $row['Venue_Image'];
                                                echo "<img src=\"assets/images/" . "$id\" >";
                                            }
                                            ?>
                                        </div>
                                        <div class="down-content">

                                            <h4>
                                                <?php
                                                //variable to store the venue id
                                                $idvenue = $rec;
                                                //query to select from venue whose venue is as fetched
                                                $srcprice = mysqli_query($con, "Select * FROM event where Event_ID = $idvenue");
                                                while ($row = $srcprice->fetch_assoc()) {
                                                    //fetching venue name associated with the venue id as above
                                                    $id = $row['Event_Name'];
                                                    echo $id;
                                                }
                                                ?></h4>

                                            <h7>Price Per Day ₹<?php
                                                $idvenue = $rec;
                                                $srcprice = mysqli_query($con, "Select * FROM event where Event_ID = $idvenue");
                                                while ($row = $srcprice->fetch_assoc()) {
                                                    $id = $row['Price_PerDay'];
                                                    echo $id;
                                                }
                                                ?>
                                            </h7>
                                            <br>

                                            <h7><i class="fas fa-location-arrow">&nbsp;&nbsp; </i><?php
                                                $idvenue = $rec;
                                                $srcprice = mysqli_query($con, "Select * FROM event where Event_ID = $idvenue");
                                                while ($row = $srcprice->fetch_assoc()) {
                                                    $id = $row['Venue_Address'];
                                                    echo $id;
                                                }
                                                ?>
                                            </h7>
                                            <br>
    <!--                                            <h7><i class="fa fa-group"></i>&nbsp;&nbsp;<?php
                                            $idvenue = $rec;
                                            $srcprice = mysqli_query($con, "Select * FROM event where Event_ID = $idvenue");
                                            while ($row = $srcprice->fetch_assoc()) {
                                                $id = $row['Capacity'];
                                                echo $id;
                                            }
                                            ?>
                                            </h7>-->

                                            <!--                                            <ul class="social-icons">
                                                                                             ***** Link for venue detail ***** 
                                                                                            <li><?php echo '<a href="Venue-Detail.php?link=' . $idvenue . ' "><b> + View Detial</b></a>'; ?></li>
                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                             ***** Link to add venue in wish list ***** 
                                                                                            <li><?php echo '<a href="WishlistDBC.php?id=' . $idvenue . '" name="WishList"><b>+Add to WishList</b></a>'; ?></li>
                                                                                        </ul>-->
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-5">
                            <div class="main-button">
                                <!-- ***** Link to view more venues ***** -->
                                <a href="Events.php">More Events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ***** Main block Ends ***** -->
        <br>
        <!-- ***** About us block start ***** -->
        <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-us.jpg); height: 552px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading dark-bg">
                            <h2 style="color: black;">Read <em>About Us</em></h2>
                            <img src="assets/images/line-dec.png" alt="">
                            <p>LuxuritoEvent.com ?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-content text-center">
                            <p>Good Events Discovery and Booking We are an online platform.</p>

                            <p>‘Luxurito Events’ gives key event arranging and innovative conveyance of gatherings and events for an assortment of wedding , Birthday , Engagement ,  Baby shower and the sky’s the limit from there.
                                We are here giving complete gathering and event coordinations. 
                            </p>
                            <div class="main-button">
                                <a href="about.php">About us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** About us block Ends ***** -->

        <!-- ***** Send us message block Start ***** -->
        <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/Contact-us.png); height: 554px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cta-content">
                            <h2 style="color: black;" >Send us a <em>message</em></h2>
                            <p>If you have any questions about the site or need support, Send us your query We will get back to you within few hours and thats for sure</p>
                            <div class="main-button">
                                <a href="contact.php">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Send us message block End ***** -->

        <!--         ***** Feedback block Start ***** 
                <section class="section" id="features">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="section-heading">
                                    <h2>What our<em> Customer's Says </em></h2>
                                    <img src="assets/images/line-dec.png" alt="waves">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="features-items">
                                    <li class="feature-item">
                                        <div class="left-icon">
                                            <img src="assets/images/features-first-icon.png" alt="First One">
                                        </div>
                                        <div class="right-content">
                                            <h4>Harsh Koli</h4>
                                            <p><em>"Thank you so much BookVenue ! you did an amazing job on such short notice."</em></p>
                                        </div>
                                    </li>
                                    <li class="feature-item">
                                        <div class="left-icon">
                                            <img src="assets/images/features-first-icon.png" alt="second one">
                                        </div>
                                        <div class="right-content">
                                            <h4>Gaurav Patel</h4>
                                            <p><em>"Book Venue has been of great help on searching for location for our corporate part."</em></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="features-items">
                                    <li class="feature-item">
                                        <div class="left-icon">
                                            <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                                        </div>
                                        <div class="right-content">
                                            <h4>Harsh Singh</h4>
                                            <p><em>"We would like to thanks to the team of bookVenue for provide such easy to use website for booking venues."</em></p>
                                        </div>
                                    </li>
                                    <li class="feature-item">
                                        <div class="left-icon">
                                            <img src="assets/images/features-first-icon.png" alt="training fifth">
                                        </div>
                                        <div class="right-content">
                                            <h4>Aryanshi sharma</h4>
                                            <p><em>"Had an great stay in villa booked through bookVenue all thanks to the team BookVenue"</em></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
        
                        <br>
        
                        <div class="main-button text-center">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </section>
                 ***** Feedback block End ***** -->


        <!-- ***** Footer Start ***** -->
        <?php include './Footer.php'; ?>

        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imgfix.min.js"></script> 
        <script src="assets/js/mixitup.js"></script> 
        <script src="assets/js/accordions.js"></script>

        <!-- Global Init -->
        <script src="assets/js/custom.js"></script>

    </body>
</html>