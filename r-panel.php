<div class="sphe-cont__credits">
    <div class="lbogin-box">
    <div class="sphe-cont__credits-close"></div>
    <h2 class="sphe-cont__credits-heading">Menu</h2>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to myUNISA.</h1>
    <img src="images/opus-attachment.png" alt="" class="sphe-cont__credits-img" />
    <h3 class="sphe-cont__credits-name"><?php echo htmlspecialchars($_SESSION["username"]); ?></h3>
    <a href="#" target="_blank" class="sphe-cont__credits-link">More text</a>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    <h4 class="sphe-cont__credits-blend">Signed in?</h4>
    <div class="colorful-switch">
      <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
      <label class="colorful-switch__label" for="colorful-switch-cb">
        <span class="colorful-switch__bg"></span>
        <span class="colorful-switch__dot"></span>
        <span class="colorful-switch__on">
          <span class="colorful-switch__on__inner"></span>
        </span>
        <span class="colorful-switch__off"></span>
      </label>
    </div>
  </div></div>