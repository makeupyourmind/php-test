<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Forgot Password</title>
  <style>

   body{
    background: url('/public/91.jpg');
    font-family: Roboto,sans-serif;
    background-size: auto auto;
    margin: 0;
    background-repeat: no-repeat;
   }

   h1, h2, h3, h4, h5, h6 {
    font-weight: 300;
   }

   .header{
     height: 60px;
     width: 100%;
     background-color: #000;
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

   .form {
    width: 400px;
    height: 400px;
    margin: 10% auto 0 auto;
   }

   .form p{
     text-align: center;
     font-size: 1.5rem;
     color: #454252;
   }

   .md-form {
    height: 60px;
    width: 395px;
    margin: 0 auto;
  }

  input {
    background-color: transparent;
    border-top: 0px solid grey;
    border-left: 0px solid grey;
    border-right: 0px solid grey;
    border-bottom: 1px solid #ced4da;
    width: 350px;
    height: 25px;
    font-size: 16px;
    outline: 0;
    margin-left: 10px;
    color: #272626;
   }

   input:active, input:focus{
      background-color: transparent;
      border-top: 0px solid grey;
      border-left: 0px solid grey;
      border-right: 0px solid grey;
      border-bottom: 2px solid #4285f4;
      color: #272626;
    }

    .log{
      margin-top: 35px;
      text-align: center;
    }

    .btn{
      background: #4285F4;
      height: 35px;
      width: 250px;
      border: none;
      color: #fff;
      font-size: 12px;
      cursor:pointer;
      margin: 0 auto;
      text-transform: uppercase;
    }

    button:hover{
      background-color: #000000;
    }

    #server{
      text-transform: uppercase;
      color: #fff;
      font-size: 16px;
      padding: 4px 0;
      display: none;
      background-color: #FF3547;
      width: 350px;
      margin: 0 auto;
      text-align: center;
      border-radius: 10px;
      margin-top: 10px;
    }

    #server2{
      color: #fff;
      font-size: 16px;
      padding: 4px 0;
      display: none;
      background-color: #4285F4;
      width: 350px;
      margin: 0 auto;
      text-align: center;
      border-radius: 10px;
      margin-top: 10px;
    }

    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #272626;
   }

    ::-moz-placeholder { /* Firefox 19+ */
      color: #272626;
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

    <div class="form">
    <p>Enter Email that you used to register</p>
    <form id = "myForm">
       <div class="md-form">
        <input autofocus type="email" id = "email" name="email" placeholder="Your email">
      </div>
        <div class="log">
          <button class="btn" id = "Enter" type="submit">Get Password</button>
        </div>
    </form>

    <p id = "server"><p>
    <p id = "server2"><p>
   </div>

  <script>
  $("#Enter").click(function(event) {
    event.preventDefault();
              if($('#email').val() == ''){
                $("#server").css("display","block");
                $("#server").html("Enter data");
                document.querySelector('#email').value = '';
                setTimeout(function(){ $('#server').hide(); }, 3000);
                setTimeout(function(){ $('#server').show(); }, 500);
                return false;
              }

              $.post('forgot.php', {'email':$('#email').val()},
                      function(data) {
                        //alert(data);
                            if(data != 'error'){
                              $("#server2").css("display","block");
                              $("#server2").html("You receive on this email your password");
                              setTimeout(function(){ $('#server2').hide(); }, 3000);
                              setTimeout(function(){ $('#server2').show(); }, 500);
                            }
                            else {
                              $("#server").css("display","block");
                              $("#server").html("This email is incorrect");
                              document.querySelector('#email').value = '';
                              setTimeout(function(){ $('#server').hide(); }, 3000);
                              setTimeout(function(){ $('#server').show(); }, 500);
                            }

                      });

              });
  </script>

</body>
</html>
