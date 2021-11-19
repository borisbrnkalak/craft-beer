    <a href="#parallax" class="scrollup" id="scroll-up">
      <i class="fas fa-arrow-up scrollup-icon"></i>
    </a>

    <div class="modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h1>LOGIN</h1>

      <form action="services/login.php" method="POST" class="modal__form">
        <input name="login-email" type="email" class="username" placeholder="email" value="borisbrnkalak@gmail.com" required>
        <input name="login-password" type="password" class="password" placeholder="password" value="aaaa" required>
        <input type="text" class="error-message-login" disabled>
        <button type="submit" name="submit-btn" class='btn'>Done</button>
      </form>

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
        <input name="register-password" type="password" placeholder="password" class="password">
        <input name="register-confirm-password" type="password" placeholder="confirm-password" class="confirm-password">
        <input type="text" class="error-message-register" disabled>
        <a href="#" class="check-register">CHECK</a>
        <button type="submit" name="register-btn" class='btn' disabled>Done</button>
      </form>

    </div>
    <div class="overlay hidden"></div>

    <script src="js/check-forms.js"></script>
    <script src="js/hamburger.js"></script>
    <script src="js/parallax-effext.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/login-btns.js"></script>
    <script src="js/reveal-sections.js"></script>
    </body>

    </html>