<?php
include 'generalrun.php'
?>
<!DOCTYPE html>  
     <html lang="en" class="no-js">  
     <head>  
            <meta charset="UTF-8" />  
            <title>Login and Registration Form with HTML5 and CSS3</title>  
            <meta name="viewport" content="width=device-width, initial-scale=1.0">   
            <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />  
            <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />  
            <meta name="author" content="Codrops" />  
            <link rel="shortcut icon" href="../favicon.ico">   
    <link rel="stylesheet" href="css/phone.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/page-style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" href="img/nficon.ico" />
        </head>  
        <body>

            <div class="grid-container">  
                                    
    <nav class="navbar">
      <div class="navbar__brand">
        <img src="img/logo.png" alt="Netflix logo" class="brand__logo" />
      </div>

     <div class="navbar__nav__items">
        <div class="nav__item">
          <button onclick="window.location.href='video.php'" class="signin__button">Home</button>
        </div>
          <div class="nav__item">
          <button onclick="window.location.href='register.php'" class="signin__button">Sign up</button>
        </div>
        <div class="nav__item">
          <button onclick="window.location.href='login.php'" class="signin__button">Log in</button>
        </div>
      </div>
    </nav>

                            
                    <div id="container_demo" >  
                         
                        <div id="wrapper">  
                            <div id="login" class="animate form">  
                               <form name="login" method="post" action="">  
                                    <h1>Log in</h1>   
                                    <p>   
                                        <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>  
                                        <input id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                    </p>  
                                    <p>   
                                        <label for="password" class="youpasswd" data-icon="p"> Your password </label>  
                                        <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />   
                                    </p>  
                                    <p class="keeplogin">   
                                        <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />   
                                        <label for="loginkeeping">Keep me logged in</label>  
                                    </p>  
                                    <p class="login button">   
                                        <input type="submit" name="login" value="Login" />   
                                    </p>  
                                    <p class="change_link">  
                                        Not a member yet ?  
                                        <a href="#toregister" class="to_register">Join us</a>  
                                    </p>  
                                </form>  
                            </div>  
                              
                        </div>  
                    </div>    
                 
            </div>  
        </body>  
    </html>  