<?php
$scriptName = basename($_SERVER["SCRIPT_FILENAME"], '.php');
function setClass($scriptName, $page)
{
  echo $scriptName == $page ? "selected" : "";
}
?>

<header class="header 
<?php
if ($scriptName == "testimonials") {
  echo "white-header";
} else {
  echo "";
}
?>
">
  <div class="logo">
    <img src="<?php echo $scriptName == "testimonials" ? "img/logo-black.png" : "img/logo-white.png" ?>" alt=" LOGO" />
  </div>

  <div class="hamburger">
    <div class="line middle">
      <div class="line top"></div>
      <div class="line bottom"></div>
    </div>
  </div>

  <div class="links">
    <ul class="nav-links">
      <li class="list-login"><a class="login-btn" href="#">
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
      if (isset($_COOKIE['is-logged'])) {
      ?>
        <li class="list-logout">
          <form class="logout-form" action="services/logout.php" method="POST">
            <button name="logout-btn" type="submit" class="logout-btn ">LOGOUT</button>
          </form>
        </li>
      <?php
      }
      ?>

      <li class="<?php setClass($scriptName, "index") ?>"><a href="index.php">HOME</a></li>
      <li class="<?php setClass($scriptName, "overview") ?>"><a href="overview.php">OVERVIEW</a></li>
      <li class="<?php setClass($scriptName, "our-team") ?>"><a href="our-team.php">OUR TEAM</a></li>
      <li class="<?php setClass($scriptName, "testimonials") ?>"><a href="testimonials.php">TESTIMONIALS</a></li>
      <li class="<?php setClass($scriptName, "contact") ?>"><a href="contact.php">CONTACT</a></li>
      <li class="<?php setClass($scriptName, "product") ?>"><a href="product.php">PRODUCT</a></li>
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

  <div class="login transparent">
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
      <form class="logout-form" action="services/logout.php" method="POST">
        <button name="logout-btn" type="submit" class="logout-btn ">LOGOUT</button>
      </form>
    <?php
    }
    ?>
  </div>
</header>