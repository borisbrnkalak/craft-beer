    <a href="#parallax" class="scrollup" id="scroll-up">
      <i class="fas fa-arrow-up scrollup-icon"></i>
    </a>

    <div class="modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h1>LOGIN</h1>

      <form action="services/login.php" method="POST" class="modal__form">
        <input name="login-email" type="email" class="username" placeholder="email" value="borisbrnkalak@gmail.com">
        <input name="login-password" type="password" class="password" placeholder="password" value="aaaa">
        <input type="text" class="error-message-login" disabled value="<?php echo $_SESSION['login-result'] ?>">
        <button type="submit" name="submit-btn" class='btn'>Done</button>
      </form>

      <?php
      unset($_SESSION['login-result']);
      ?>

      <div class="register-now">
        <p>No account? Don't worry, you can <a class="register-btn" href="#">register</a> now!</p>
      </div>
    </div>

    <div class="register modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h1>REGISTER</h1>

      <form action="services/register.php" method="POST" class="modal__form reg">
        <input name="register-name" type="text" class="fullname" placeholder="Full name">
        <input name="register-email" type="email" class="email" placeholder="Username(email)">
        <input name="register-password" type="password" placeholder="password atleast(6 chars)" class="password">
        <input name="register-confirm-password" type="password" placeholder="confirm-password" class="confirm-password">
        <input type="text" class="error-message-register" value="<?php echo $_SESSION['register-result'] ?>" disabled>
        <button type="submit" name="register-btn" class='btn'>Done</button>
      </form>


      <?php
      unset($_SESSION['register-result']);
      ?>

    </div>

    <div class="overlay hidden"></div>

    <!--<script src="js/check-forms.js"></script>-->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="js/map.js"></script>
    <script src="js/hamburger.js"></script>
    <script src="js/parallax-effext.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/login-btns.js"></script>
    <script src="js/reveal-sections.js"></script>
    <script src="js/checkPassword.js"></script>
    </body>

    </html>