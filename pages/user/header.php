<div class="background">
  <div class="top">
    <div class="logo-placeholder">
      <img src="assets/img/Logo.png" alt="logo">
    </div>
    <div class="top-menu">
      <div class="tab-title active" onclick="loadPageByAjax('home'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-solid fa-house "></i>
        </div>
        <div class="tab-info">Home</div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('favorites'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-solid fa-heart"></i>
        </div>
        <div class="tab-info">Favorites</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Favorites</div>
          <div class="tab-notice-info">Log in to see saved songs, albums, artists in Favorties</div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('myCart'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-brands fa-opencart "></i>
        </div>
        <div class="tab-info">My cart</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Cart</div>
          <div class="tab-notice-info">Log in to check, add, remove products in My Cart</div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('myAccout'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-solid fa-user "></i>
        </div>
        <div class="tab-info">My account</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Account</div>
          <div class="tab-notice-info">Log in to see profile, purchase history in My Account </div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
        <div class="tab-menu">
          <div class="tab-menu-icon"></div>
          <div class="tab-menu-info">Profile</div>
          <div class="tab-menu-icon"></div>
          <div class="tab-menu-info">Purchase history</div>
          <div class="tab-menu-icon"></div>
          <div class="tab-menu-info">Help and support</div>
          <div class="tab-menu-icon"></div>
          <div class="tab-menu-info">Setting</div>
          <div class="tab-menu-icon"></div>
          <div class="tab-menu-info">Log out</div>

        </div>
      </div>
    </div>
  </div>
  <div class="bottom">
    <div class="button-placeholder">
      <div class="left-button-login">
        <input type="button" value="Log in" onclick="loadPageByAjax('login')">
      </div>
      <div class="right-button-register">
        <input type="button" value="Sign up" onclick="signUp()">
      </div>
    </div>
    <div class="footer-placeholder">
      <p>About us</p>
    </div>
  </div>
</div>