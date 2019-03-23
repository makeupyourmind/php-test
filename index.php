<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <style>

   body{
    background: url('/public/background.jpg');
    font-family: Roboto,sans-serif;
    background-size: cover;
    margin: 0;
    background-repeat: no-repeat;
   }

   h1, h2, h3, h4, h5, h6 {
    font-weight: 300;
   }

   .container{
     background-color: rgba(0,0,0,.7);
     width: 100%;
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
   }

   .header{
     height: 60px;
     width: 100%;
     background-color: #000;
     position: absolute;
     z-index: 1;
   }

   a{
     text-decoration: none;
     cursor: pointer;
     color: #fff;
   }

   .link{
     width: 600px;
     height: 60px;
   }

   .a{
     font-size: 16px;
     width: 110px;
     float: left;
     text-align: center;
     margin: 4% auto;
   }

   .a a:hover{
     color: rgba(255,255,255,.75);
   }

   .hi{
     width: 400px;
     margin: 9% auto;
     text-align: center;
     color: #fff;
     font-size: 1.4rem;
   }

   .info{
     width: 450px;
     margin: 0 auto;
     text-align: center;
     color: #fff;
     font-size: 1rem;
   }

  </style>

  <body>

    <div class="header">
      <div class="link">
        <div class="a">
          <a href="/index.php">Main</a>
        </div>
        <div class="a">
          <a href="/homePage.php">Home</a>
        </div>
        <div class="a">
          <a href="/formRegister.php">Sign up</a>
        </div>
        <div class="a">
          <a href="/logIn.php">Log in</a>
        </div>
        <div class="a">
          <a href="/Contact.php">Contact</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="hi">
        <h2>Welcome to our site</h2>
      </div>
      <div class="info">
        <h2>Example site on PHP + phpMyAdmin</h2>
      </div>
    </div>
  </body>
</html>
