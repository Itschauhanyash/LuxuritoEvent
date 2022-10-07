<?php
//session started
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>About Us</title>
        <!-- ***** Bootsrtap and css style links start ***** -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

        <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
        <!--<link rel="stylesheet" href="./assets/css/style_2.css">-->
        <!-- ***** Bootsrtap and css style links ends ***** -->
    </head>

    <body>
        <!-- ***** Header included ***** -->
        <?php include './Header.php'; ?>
        <!-- ***** Main block started ***** -->
        <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cta-content">
                            <br>
                            
                            <h2>Learn more <em>About Us</em></h2>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Main block ends***** -->

        <!-- ***** Detail block Start ***** -->
        <section class="section" id="our-classes">
            <div class="container">
                <br>
                <br>
                <br>
                <div class="row" id="tabs">
<!--                    <div class="col-lg-4">
                        <ul>
                            <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> Our Goals</a></li>

                        </ul>
                    </div>-->
                    <div class="col-lg-8" >
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <img src="assets/images/about-image-1-940x460.jpg" alt="">
                                <h4>About Luxurito Event</h4>

                                <p>‘Luxurito Events’ gives key event arranging and innovative conveyance of gatherings and events for an assortment of wedding , Birthday , Engagement ,  Baby shower and the sky’s the limit from there.
                                    We are here giving complete gathering and event coordinations. 
                                </p>
                               
                                <p>LE, lUXURITO EVENTS, is the main event organizers, considered and created by the organization in 2020, which strengthens our capacity and maintainable projects with life span and proceeded with greatness in conveyance.</p>
                                <p>Luxurito Events® is one stop point to find a perfect event organizer to celebrate Birthday Party, Engagement, Wedding, Baby Shower. Book Event based on Availability, Pricing, Rating & Reviews</p>
                            </article>

                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Detail block Start ***** -->

        <!-- ***** Call to Action Start ***** -->
        <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cta-content">
                            <h2>Send us a <em>message</em></h2><br>
<!--                            <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>-->
                            <div class="main-button">
                                <a href="contact.php">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Call to Action End ***** -->

        <!-- ***** Footer Start ***** -->

        <?php include './Footer.php'; ?>

    </body>
</html>