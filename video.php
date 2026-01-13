<?php   
    include_once('dbFunction.php');  
    if(isset($_POST['logout'])){  
        // remove all session variables  
        session_unset();   
  
        // destroy the session   
        session_destroy();  
    } ;
    
   if (($_SESSION)){
    echo "there is a session here";
   };

   
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="css/phone.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" href="img/nficon.ico" />
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="navbar__brand">
        <img src="img/logo.png" alt="Netflix logo" class="brand__logo" />
      </div>

      <div class="navbar__nav__items">
        <div class="nav__item">
          <button onclick="window.location.href='video.php'" class="signin__button">Home</button>
        </div>
        
        <?php
        //WONDERFULL SOLUTION INSTEAD OF "" of echo
        if (empty($_SESSION)) {
    echo <<<HTML
    <div class="nav__item">
        <button onclick="window.location.href='register.php'" class="signin__button">
            Sign up
        </button>
    </div>
    <div class="nav__item">
        <button onclick="window.location.href='login.php'" class="signin__button">
            Log in
        </button>
    </div>
HTML;
}
?>
          
        <?php if (($_SESSION)){
         echo <<<HTML
          <div class='nav__item'>
          <input class='signin__button' type='submit' name='logout' value='Logout' />   
        </div>
        HTML;
        } 
        ?>
      </div>
    </nav>
  </header>
  <!-- Hero Section -->
  <main>
    <section class="hero">
      <div class="hero__bg__image__container">
      </div>

      <div class="hero__card">
        <h1 class="hero__title">
          Unlimited Movies TV,<br />
          Shows and More.
        </h1>
        <p class="hero__subtitle">Watch anywhere and cancel anytime.</p>
        <p class="hero__description">
          Ready to watch? Enter your email to create or restart your
          membership .
        </p>

        <div class="email__form__container">
          <div class="form__container">
            <input type="email" class="email__input" placeholder="Enter email address" />
          </div>
          <button class="primary__button">
            <a class="get" href="movie.html">Get Started <i class="fal fa-chevron-right"></i></a>
          </button>
        </div>
      </div>
    </section>
    <section class="features__container">
      <!-- container 1 -->
      <div class="feature">
        <div class="feature__details">
          <h3 class="feature__title">Enjoy on your TV.</h3>
          <h5 class="feature__subTitle">
            Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV,
            Blu-ray players and more.
          </h5>
        </div>
        <div class="feature__image__container">
          <img src="img/tv.png" alt="Feature image" class="feature__image" />
          <div class="feature__backgroud__video__container">
            <video autoplay="" loop="" muted="" class="feature__backgroud__video">
              <source src="img/video-tv-in-0819.m4v" type="video/mp4" />
            </video>
          </div>
        </div>
      </div>
      <!-- container 2 -->
      <div class="feature">
        <div class="feature__details">
          <h3 class="feature__title">
            Download your shows to watch offline.
          </h3>
          <h5 class="feature__subTitle">
            Save your favourites easily and always have something to watch.
          </h5>
        </div>
        <div class="feature__image__container">
          <img src="img/mobile-0819.jpg" alt="Feature image" class="feature__image" />
          <div class="feature__2__poster__container">
            <div class="poster__container">
              <img src="img/boxshot.png" alt="poster" class="poster" />
            </div>
            <div class="poster__details">
              <h4>Stranger Things</h4>
              <h6>Downloading...</h6>
            </div>
            <div class="download__gif__container">
              <img src="img/download-icon.gif" alt="downloading Video" class="poster_video" />
            </div>
          </div>
        </div>
      </div>
      <!-- container 3 -->
      <div class="feature">
        <div class="feature__details">
          <h3 class="feature__title">Watch everywhere.</h3>
          <h5 class="feature__subTitle">
            Stream unlimited movies and TV shows on your phone, tablet,
            laptop, and TV.
          </h5>
        </div>
        <div class="feature__image__container feature__3__image__container">
          <img src="img/device-pile-in.png" alt="Feature image" class="feature__image feature__3__image" />
          <div class="feature__backgroud__video__container feature__3__backgroud__video__container">
            <video autoplay="" loop="" muted="" class="feature__backgroud__video feature__3__backgroud__video">
              <source src="img/video-devices-in.m4v" type="video/mp4" />
            </video>
          </div>
        </div>
      </div>
      <!-- container 4 -->
      <div class="feature">
        <div class="feature__details">
          <h3 class="feature__title">Create profiles for children.</h3>
          <h5 class="feature__sub__title">
            Send children on adventures with their favourite characters in a
            space made just for them—free with your membership.
          </h5>
        </div>
        <div class="feature__image__container">
          <img src="img/children.png" alt="Feature image" class="feature__image" />
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer__row__1">
      <h4>Questions? Call 9111-xxx-xxx</h4>
    </div>
    <div class="footer__row__2">
      <div class="column__1 columns">
        <p>FAQ</p>
        <p>Investor Relations</p>
        <p>Privacy</p>
        <p>Speed Test</p>
      </div>
      <div class="column__2 columns">
        <p>Help Centre</p>
        <p>Jobs</p>
        <p>Cookie Preferences</p>
        <p>Legal Notices</p>
      </div>
      <div class="column__3 columns">
        <p>Account</p>
        <p>Ways to Watch</p>
        <p>Corporate Information</p>
        <p>Only on Netflix</p>
      </div>
      <div class="column__4 columns">
        <p>Media Centre</p>
        <p>Terms of Use</p>
        <p>Contact Us</p>
      </div>
    </div>
    <div class="footer__row__3">
      <div class="dropdown__container drop_down">
        <i class="fas fa-globe"></i>
        <select name="languages" id="languagesSelect" class="language__drop__down">
          <option value="english" selected>English</option>
          <option value="hindi">Hindi</option>
          <option value="hindi">Urdu</option>
        </select>
      </div>
    </div>
    <div class="footer__row__4">
      <p>Netflix India - @Ram</p>
    </div>
  </footer>
</body>
</html>