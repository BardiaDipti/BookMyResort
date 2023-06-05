<section class="top-bar dhomev">
      <div class="container">
        <div class="pull-left left-infos contact-infos">
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-phone"></i> (+91) 9323475845</a></li>
            
            <li><a href="#"><i class="fa fa-map-marker"></i> 63, Near Kodiyat Forest Chowki, Ahmedabad</a></li>
           
            <li><a href="#"><i class="fa fa-envelope"></i> bookmyresort04@gmail.com</a></li>
          </ul>
        </div>
        
        <div class="pull-right right-infos link-list">
          <ul class="list-inline">
              <?php 
           if(isset($_SESSION["cuid"]))
           {
           ?>
              <li><a href="logout.php">Logout</a></li>
           <?php } else{ ?>
              <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
           <?php } ?>
          </ul>
        </div>
     </div>
     </section>
    <nav id="main-navigation-wrapper" class="navbar navbar-default _fixed-header _light-header stricky">
      <div class="container" style="width: 1300px;">
          <div class="navbar-header" >
            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a href="aboutus.php" class="navbar-brand"><img src="mylogo.png" height="90" width="300" style="margin-top:-1px;" height="90" width="90"></a>
            <!--<h2 style="width:300px;margin-top: 30px;">Book My Resort</h2>-->
        </div>
      <div id="main-navigation" class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
           <li><a href="home.php">Home</a></li>
<!--           <li><a href="home.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Home<span class="glyphicon glyphicon-chevron-down"></span></a>
               <ul class="dropdown-submenu dropdown-menu">
                  <li><a href="home.php">Dashboard</a></li>
                  <li><a href="booking.php">Booking</a></li>
                  <li><a href="payment.php">Payment</a></li>
               </ul>
           </li>-->
    <li><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">About Us<span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-submenu dropdown-menu">
                  <li><a href="aboutus.php">Introduction</a></li>
                  <li><a href="amenities.php">Resort Amenities</a></li>
                <li><a href="feedback.php">Feedback</a></li> 
              </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Rooms<span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-submenu dropdown-menu">
                     <li><a href="room.php">All</a></li>
                  <?php
                  $query_room_type = mysqli_query($connection,"SELECT * FROM `room_tbl` group by room_type");
                  while($data_room_type = mysqli_fetch_array($query_room_type))
                  {
                  ?>
                   <li><a href="room.php?type=<?php echo $data_room_type["room_type"];?>"><?php echo $data_room_type["room_type"];?></a></li>
                  <?php } ?>
<!--                  <li><a href="room_deluxe.php">Deluxe Room</a></li>
                <li><a href="room_superdeluxe.php">Super Deluxe Room</a></li>
                <li><a href="room_suite.php">Suite</a></li>
                <li><a href="room_villa.php">Villa</a></li>-->
            </ul>
            </li>
            
            
<!--            <li><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Packages<span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-submenu dropdown-menu">
                  <li><a href="package_default.php">Default</a></li>
                <li><a href="package_customized.php">Customized</a></li>
            </ul>
            </li>-->
            <li><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Packages<span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-submenu dropdown-menu">
                     <li><a href="package-list.php">All</a></li>
                  <?php
                  $query_package_type = mysqli_query($connection,"SELECT * FROM `package_tbl` group by package_type");
                  while($data_package_type = mysqli_fetch_array($query_package_type))
                  {
                  ?>
                     <li><a href="package-list.php?type=<?php echo $data_package_type["package_type"];?>"><?php echo $data_package_type["package_type"];?></a></li>
                  <?php } ?>

            </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Events<span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-submenu dropdown-menu">
                     <li><a href="event-list.php">All</a></li>
                  <?php
                  $query_event_type = mysqli_query($connection,"SELECT * FROM `event_tbl` group by event_type");
                  while($data_event_type = mysqli_fetch_array($query_event_type))
                  {
                  ?>
                     <li><a href="event-list.php?type=<?php echo $data_event_type["event_type"];?>"><?php echo $data_event_type["event_type"];?></a></li>
                  <?php } ?>

            </ul>
            </li>
<!--            <li><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Events<span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-submenu dropdown-menu">
                <li><a href="event_wedding.php">Wedding</a></li>
                <a href="room-booking.php"></a>
                <li><a href="event_birthday.php">Birthday</a></li>
                <li><a href="event_anniversary.php">Anniversary</a></li>
            </ul>
            </li>-->
           <li><a href="gallery.php">Gallery</a></li>
           <li><a href="menu-list.php">Menu List</a></li>
           <?php 
           if(isset($_SESSION["cuid"]))
           {
           ?>
           <li><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">My Account<span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-submenu dropdown-menu">
                  
                  <li><a href="cart-list.php">Cart List</a></li>
                  <li><a href="order-list.php">My Order List</a></li>
                     <li><a href="booking-list.php">My Room Booking List</a></li>
                     <li><a href="package-booking-list.php">My Package Booking List</a></li>
                     <li><a href="event-booking-list.php">My Event Booking List</a></li>
            </ul>
            </li>
           <?php } ?>
<!--           <li><a href="restaurant.php">Restaurant</a></li>-->
            <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
          <ul class="nav navbar-nav right-side-nav">
            <li class="dropdown"><a href="#"><span class="phone-only">Search</span><i class="icon icon-Search"></i></a>
              <ul class="dropdown-submenu has-search-form align-right">
                <li>
                  <form action="#" class="navbar-form">
                    <input type="text" placeholder="Search here">
                    <button type="submit"><i class="icon icon-Search"></i></button>
                  </form>
               </li>
              </ul>
            </li>
            <li><a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><span class="phone-only">Side Menu</span><i class="fa fa-bars"></i></a></li>
          </ul>
   <form action="#" class="nav-search-form row">
            <div class="input-group">
              <input type="search" placeholder="Search here" class="form-control"><span class="input-group-addon">
                <button type="submit"><i class="icon icon-Search"></i></button></span>
            </div>
          </form>
        </div>
      </div>
    </nav>