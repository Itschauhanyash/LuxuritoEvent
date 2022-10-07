<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
      
    <div class="container">

        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">Luxurito<em> Event</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="Index.php">Home</a></li>
<!--                        <li class="scroll-to-section"><a href="#features">Venue</a></li>-->
                        <li class="scroll-to-section"><a href="Events.php">Event</a></li>
                        <li class="scroll-to-section"><a href="Venues.php">Venues</a></li>
                        <li class="scroll-to-section"><a href="About.php">About</a></li>
                        
                        <li class="scroll-to-section"><a href="Wishlist.php">Wishlist</a></li>
                        <li class="scroll-to-section"><a href="Bookings.php">Booking</a></li>
                        <li class="scroll-to-section"><a href="Contact.php">Contact</a></li> 
                        <!--                            <li class="scroll-to-section"><a href="Sign-In.php">Sign Up</a></li>-->


                        <?php
                        if (isset($_SESSION['CName'])) {
                            echo "<li><a href='Logout.php'>Logout</a></li>";
                        }
                        ?>
                        <?php
                        if (!isset($_SESSION['CName'])) {
                            echo "<li><a href='Sign-in.php'>Login</a></li>";
                        }
                        ?>
                        

                    </ul>        
<!--                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>-->

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->