    <a href="#parallax" class="scrollup" id="scroll-up">
      <i class="fas fa-arrow-up scrollup-icon"></i>
    </a>

    <div class="modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h1>LOGIN</h1>
      <form action="#" class="modal__form">
        <label>Username(email)</label>
        <input type="email" class="username" required> 
        <label>Password</label>
        <input type="text" class="password" required>

        <button class='btn'>Done</button>
      </form>
       <div class="register-now">
          <p>No account? Don't worry, you can <a class="register-btn" href="#">register</a> now!</p>
        </div>
    </div>

    <div class="register modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h1>REGISTER</h1>
      <form action="#" class="modal__form">
        <label>Full name</label>
        <input type="text" class="fullname" required> 
        <label>Username(email)</label>
        <input type="email" class="email" required>
        <label>Password</label>
        <input type="password" class="password">
        <label>Confirm password</label>
        <input type="password" class="password">

        <button class='btn'>Done</button>
      </form>
    </div>
    <div class="overlay hidden"></div>

    <script src="js/hamburger.js"></script>
    <script src="js/parallax-effext.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>
  </body>
</html>