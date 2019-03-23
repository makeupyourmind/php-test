<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Contact</title>

    <style>

      body {
        background: url('/public/91.jpg');
        font-family: Roboto,sans-serif;
        background-size: auto auto;
        margin: 0;
        background-repeat: no-repeat;
      }

      .header{
        height: 60px;
        width: 100%;
        background-color: #000;
        /*position: absolute;
        z-index: 1;*/
      }

      .container{
        background-color: rgba(0,0,0,.7);
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
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
        margin: 4% auto 0 auto;
      }

      .a a:hover{
        color: rgba(255,255,255,.75);
      }

      .form{
        width: 480px;
        margin: 7% auto 0 auto;
      }

      .wrap{
      width: 100%;
      background-color: #fff;
      border-radius: 31px;
      margin-bottom: 16px;
      }

      .contact{
      height: 40px;
      text-align: center;
      font-weight: bold;
      font-size: 30px;
      color: #454252;
      text-transform: uppercase;
      }

      input {
      outline: none;
      border: none;
      }

      input.input {
      height: 62px;
      width: 400px;
      padding: 0 35px 0 35px;
      }

      .input{
        position: relative;
        max-width: 470px;
        background: #fff;
        border-radius: 31px;
        font-size: 18px;
        color: #8f8fa1;
        line-height: 1.2;
        font-family: Roboto,sans-serif;
      }

      textarea.input {
       height: 169px;
       padding: 19px 35px 0 35px;
       width: 400px;
      }

      textarea {
      outline: none;
      border: none;
      }

      .btn{
        width: 150px;
        margin: 0 auto;
      }

      .cont {
      width: 100%;
      margin-top: 30px;
     }

      .form-btn {
       height: 62px;
       background: #827FFE;
       width: 150px;
       border-radius: 30px;
       color: #fff;
       text-transform: uppercase;
       font-size: 16px;
     }

      button {
      outline: none !important;
      border: none;
      background: transparent;
     }

     button:hover{
       cursor: pointer;
       background-color: #403866;
     }

     .send{
       margin-top: 20px;
     }

     .block{
       width: 470px;
     }

     #server{
       display: none;
       background-color: #4285F4;
       width: 290px;
       margin: 0 auto;
       text-align: center;
       border-radius: 10px;
       color: #fff;
       font-size: 16px;
       padding: 4px 0;
       margin-top: 10px;
     }

     #server2{
       display: none;
       background-color: #FF3547;
       text-transform: uppercase;
       width: 290px;
       margin: 0 auto;
       text-align: center;
       border-radius: 10px;
       color: #fff;
       font-size: 16px;
       padding: 4px 0;
       margin-top: 10px;
     }

     .fa{
       padding: 6px;
     }
    </style>

  </head>
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
  <!--<div class="container">-->
    <div class="form">
      <div class="contact">
       <span>Send Us A Message</span>
     </div>
      <div class="block">
       <form id = "myForm" class="send">
          <div class="wrap">
            <input autofocus class="input" id = "name" type="text" name="name" placeholder="Your name">
          </div>
          <div class="wrap">
            <input class="input" id = "email" type="email" name="email" placeholder="Your email">
          </div>
          <div class="wrap">
            <input class="input" id = "subject" type="text" name="subject" placeholder="Your subject">
          </div>

          <div class="">
            <textarea class="input" id = "message" name="message" placeholder="Your message"></textarea>
          </div>
          <div class="cont">
            <div class="btn">
              <button class="form-btn" type = "submit">
                <p><i class="fa fa-paper-plane" aria-hidden="true"></i>Send</p>
              </button>
            </div>
          </div>
       </form>
       <p id = "server"></p>
       <p id = "server2"></p>
     </div>
    </div>
  <!--</div>-->

  <script>
  $("#myForm").submit(function(event) {
              if($('#name').val() == '' || $('#email').val() == '' || $('#subject').val() == '' || $('#message').val() == '')
              {
                $("#server2").html("Enter data");
                setTimeout(function(){ $('#server2').hide(); }, 3000);
                setTimeout(function(){ $('#server2').show(); }, 500);
                return false;
              }
    event.preventDefault();
    $.post('sendToAdmin.php', {'name':$('#name').val(), 'email':$('#email').val(), 'subject':$('#subject').val(), 'message':$('#message').val()},
                      function(data) {

                         if(data == 'ok'){
                           document.getElementById("server").style.display = 'block';
                           $("#server").html("Your message has been sent to admin");
                           setTimeout(function(){ $('#server').hide(); }, 3000);
                           setTimeout(function(){ $('#server').show(); }, 500);
                         }
                      });
              });
  </script>
  </body>
</html>
