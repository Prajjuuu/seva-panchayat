 <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.php"><em>SEVA</em> PANCHAYAT</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
           
          </ul>
        </li>
        <li><a href="#section4">Services</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contact</a></li>
        <?php if(!isset($_SESSION['uid'])) {?>
        <li><a href="login.php" class="external">Login</a></li>

      <?php } else { ?>
        <li><a href="logout.php" class="external">Logout</a></li>
      <?php } ?>
      </ul>
    </nav>
  </header>