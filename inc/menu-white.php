<div class="header-variant-white" id="white-menu">
  <div class="header-white">
    <div class="logo">
      <img src="img/logo-black.png" alt="LOGO" />
    </div>

    <div class="hamburger-white">
      <div class="line middle">
        <div class="line top"></div>
        <div class="line bottom"></div>
      </div>
    </div>

    <div class="links">
      <ul class="nav-links">
        <li><a class="login-btn" href="#">
            <?php
            if (isset($_COOKIE['is-logged'])) {
              $username = User::getByID($db, $_COOKIE['is-logged']);
              echo $username->getMail();
            } else {
              echo "LOGIN";
            }
            ?>
          </a></li>

        <?php
        $scriptName = basename($_SERVER["SCRIPT_FILENAME"], '.php');
        function setWhiteClass($scriptName, $page)
        {
          echo $scriptName == $page ? "selected" : "";
        }
        ?>

        <li class="<?php setWhiteClass($scriptName, "index") ?>"><a href="index.php">HOME</a></li>
        <li class="<?php setWhiteClass($scriptName, "overview") ?>"><a href="overview.php">OVERVIEW</a></li>
        <li class="<?php setWhiteClass($scriptName, "our-team") ?>"><a href="our-team.php">OUR TEAM</a></li>
        <li class="<?php setWhiteClass($scriptName, "testimonials") ?>"><a href="testimonials.php">TESTIMONIALS</a></li>
        <li class="<?php setWhiteClass($scriptName, "contact") ?>"><a href="contact.php">CONTACT</a></li>
        <li class="<?php setWhiteClass($scriptName, "product") ?>"><a href="product.php">PRODUCT</a></li>
      </ul>

      <ul class="social">
        <li>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-pinterest"></i></a>
        </li>
        <li>
          <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="login">
    <a class="login-btn" href="#">
      <?php
      if (isset($_COOKIE['is-logged'])) {
        $username = User::getByID($db, $_COOKIE['is-logged']);
        echo $username->getMail();
      } else {
        echo "LOGIN";
      }
      ?>
    </a>
    <?php
    if (isset($_COOKIE['is-logged'])) {
    ?>
      <a href="#" class="logout-btn">LOGOUT</a>
    <?php
    }
    ?>
  </div>


</div>