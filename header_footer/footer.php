<div id="footer" class="footer">
  <div class="container">
    <div class="footer_row">
      <!-- logo hotel -->
      <div class="logo_hotel">
        <img src="image/Hotels.com.png" alt="logo">
      </div>
      <!-- //logo -->
    </div>
    <div class="row">           
      <!-- Company -->
      <div class="col">
        <h4 class="hh" ><?php echo lang("Company");?></h4>
        <span class="border-bottom"></span>
        <ul>
          <li><a href="#"><?php echo lang("About");?></a></li>
          <li><a href="#"><?php echo lang("Careers");?></a></li>
          <li><a href="#"><?php echo lang("Blog");?></a></li>
          <li><a href="#"><?php echo lang("How we work");?></a></li>
          <li><a href="#"><?php echo lang("FAQ");?></a></li>
          <li><a href=<?php echo $_SESSION["lang"] == "en" ?"?lang=ar" :"?lang=en" ;?>><?php echo lang("lang");?></a></li>
        </ul>
      </div>
      <!-- //Company -->
      <!-- Services -->
      <div class="col">
        <h4><?php echo lang("Services");?></h4>
        <span class="border-bottom"></span>
        <ul>
          <li><a href="#"><?php echo lang("Roums");?></a></li>
          <li><a href="#"><?php echo lang("Type Services");?></a></li>
          <li><a href="#"><?php echo lang("Food");?></a></li>
        </ul>
      </div>
      <!-- //Services -->
      <!-- Contact -->
      <div class="col">
        <h4><?php echo lang("Contact");?></h4>
        <span class="border-bottom"></span>
        <ul>
          <li>
            <span class="icon-location2"></span>
            <a  href="#"><?php echo lang("adriss");?></a>
          </li>
          <li>
            <span class="icon-envelop"></span>
            <a  href="#"><?php echo lang("Email");?></a>
          </li>
          <li>
            <span class="icon-phone-hang-up"></span>
            <a  href="#"><?php echo lang("Tel_tabit");?></a>
          </li>
          <li>
            <span class="icon-phone"></span>
            <a  href="#"><?php echo lang("Tel");?></a>
          </li>
        </ul>
      </div>
      <!-- //Contact -->
      <!-- follow us -->
      <div class="col">
        <h4><?php echo lang("follow us");?></h4>
        <span class="border-bottom"></span>
        <div class="social-links">
          <a href="#"><i class="fab icon-facebook"></i></a>
          <a href="#"><i class="fab icon-twitter"></i></a>
          <a href="#"><i class="fab icon-instagram"></i></a>
          <a href="#"><i class="fab icon-youtube"></i></a>
        </div>
      </div>
      <!-- //follow us -->
    </div>
    <div class="footer_row text-center p-3 Copyright">
      <!-- Copyright -->
      <?php echo lang("Copyright");?> © 2022  |
      <a href="#"><?php echo lang("linkhotel");?></a>
      <!-- Copyright -->
    </div>
  </div>
</div>
