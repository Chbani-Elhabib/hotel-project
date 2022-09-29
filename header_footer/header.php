<div class="">
  <div class="w3_navigation">
    <div class="container">
      <nav class="navbar navbar-default ">
        <div class="navbar-header navbar-left">
          <div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <h1>
            <a class="navbar-brand" href="index.php">
              <img class="logohotel" src="image/Hotels.com.png" alt="logo">
            </a>
          </h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <nav class="menu menu--iris">
            <ul class="nav navbar-nav menu__list">
              <!-- menu__item--current -->
              <li class="menu__item <?php if($active == "home"){echo "menu__item--current";} ?>"><a href="index.php" class="menu__link">Hotel</a></li>
              <li class="menu__item <?php if($active == "room"){echo "menu__item--current";} ?>"><a href="room.php" class="menu__link scroll">Rooms</a></li>
              <li class="menu__item <?php if($active == "services"){echo "menu__item--current";} ?>"><a href="services.php" class="menu__link scroll">Services</a></li>
              <li class="menu__item <?php if($active == "food"){echo "menu__item--current";} ?>"><a href="food.php" class="menu__link scroll">Food</a></li>
              <li class="menu__item <?php if($active == "aboutUs"){echo "menu__item--current";} ?>"><a href="about us.php" class="menu__link scroll">About Us</a></li>
              <li class="menu__item <?php if($active == "signIn"){echo "menu__item--current";} ?>"><a href="sign in.php" class="menu__link scroll">Sign in</a></li>
              <!-- Contact Us -->
            </ul>
          </nav>
        </div>
      </nav>
    </div>
  </div>
</div>