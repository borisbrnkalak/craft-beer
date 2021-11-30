<?php
include_once "./inc/header.php";
include_once "./inc/menu-white.php";
include_once "./db/Database.php";
include_once "./db/models/Feedback.php";
?>


<div id="parallax" class="paralax" style="background-image: url('img/Testimonials/hero_inner_beer_05.jpg')">

  <?php
  include_once "./inc/menu-transparent.php";
  ?>

  <div class="paralax container">
    <div class="paralax-text black-text">
      <p>What people say</p>
      <h1 style="
              font-family: 'Roboto Condensed';
              font-weight: 800;
              font-size: 3.1em;
              margin-bottom: 1em;
            ">
        WE DO WHAT WE<br />
        DO BEST
      </h1>
      <span style="line-height: 1.8; font-weight: 400; font-size: 15px">Now and then, a crank case falls in love with the<br />
        Long Ale a pool table makes love to an Alaskan<br />
        burglar ale.</span>
    </div>
  </div>
</div>

<div class="white">
  <div class="containerr">
    <div class="connoisseurs">
      <h3>Testimonials</h3>
      <h1>FROM THE TRUE CONNOISSEURS</h1>

      <div class="feedbacks">

        <?php
        $feedbacks = Feedback::getAllWithUser($db);
        foreach ($feedbacks as $feed) {
          echo '<div class="specific reveal">
                <div class="header">
                  <h3>' . $feed->getSubject() . '</h3>
                  <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="text">
                      <p>
                        ' . $feed->getMessage() . '
                      </p>
                    </div>

                    <div class="footer-specific">
                      <div class="footer-text">
                        <h3>' . $feed->getUser()->getFullName() . '</h3>
                      </div>';

          if ($feed->getUserId() == $_COOKIE['is-logged'] || $user->getIsAdmin() == 1) {
            echo ' <div class="footer-icons">
                      <a href="services/feedback.php?delete=1&feedback_id=' . $feed->getId() . '"><i class="fas fa-trash"></i></a> 
                      <a href="./edit.php?edit=1&feedback_id=' . $feed->getId() . '"><i class="fas fa-edit"></i></a> 
                    </div>';
          }
          echo '    </div>
                  </div>';
        }
        ?>
      </div>



      <?php
      if ($_COOKIE['is-logged']) {
      ?>
        <form action="services/feedback.php" method='POST' class="feedback-form reveal">
          <div class="err-feed">
            <p></p>
          </div>
          <input name="feedback-topic" type="text" class="feedback_topic" placeholder="TOPIC">
          <textarea name="feedback-message" rows="10" class="feedback_text" placeholder="YOUR OPINION"></textarea>
          <button name="feedback-submit" type="submit">SUBMIT</button>
        </form>

      <?php
      }
      ?>

      <div class="samples-of-beers">
        <div class="one-beer reveal">
          <div class="beer-link">
            <a href="#"><img src="img/Testimonials/beer_highlight_01.png" alt="BEER" /></a>
          </div>
          <div class="text">
            <h3>BERNARD RED</h3>
            <p>Organically grow the holistic.</p>
          </div>
        </div>

        <div class="one-beer reveal">
          <div class="beer-link">
            <a href="#"><img src="img/Testimonials/beer_highlight_02.png" alt="BEER" /></a>
          </div>
          <div class="text">
            <h3>GOLDEN ALE</h3>
            <p>Used generated content in time.</p>
          </div>
        </div>

        <div class="one-beer reveal">
          <div class="beer-link">
            <a href="#"><img src="img/Testimonials/beer_highlight_03.png" alt="BEER" /></a>
          </div>
          <div class="text">
            <h3>RED DUNKEL</h3>
            <p>Efficiently unleash cross-media.</p>
          </div>
        </div>

        <div class="one-beer reveal">
          <div class="beer-link">
            <a href="#"><img src="img/Testimonials/beer_highlight_07.png" alt="BEER" /></a>
          </div>
          <div class="text">
            <h3>LONDON PRIDE</h3>
            <p>Taking seamless key performance.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="movable-parallax" class="parallax" style="background-image: url(img/Testimonials/hero_testimonials.jpg)">
  <div class="containerrr">
    <div class="end-words">
      <h3>Testimonials</h3>
      <h1>A WORD FROM OUR CUSTOMERS</h1>
      <div class="changeable-text">
        <div class="link">
          <a href="#"><i class="fas fa-quote-right"></i></a>
        </div>
        <h3>Great organization</h3>
        <p>
          My godness - that was quick! I received my order at approx. 15min.
          Anyway - well done indeed. I'm impressed.
        </p>
        <img src="img/Testimonials/signature_03.png" alt="SIGNATURE" />
        <h2>Josephine Lee</h2>
        <span>Manager</span>
      </div>
    </div>
  </div>
</div>

<div class="white">
  <div class="containerrr">
    <div class="follow-us">
      <h2>FOLLOW US</h2>
      <ul class="social-links">
        <li>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-tumblr"></i></a>
        </li>
      </ul>
      <div id="mov-img" class="image">
        <img src="img/Testimonials/inner_horizontal_footer_clear_01.jpg" alt="" />
      </div>
    </div>
  </div>
</div>

<?php
include_once "./inc/footer.php";
?>