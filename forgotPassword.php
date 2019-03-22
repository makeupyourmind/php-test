<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <style>

   body{
    background: url('/public/background.jpg');
    font-family: Roboto,sans-serif;
    background-size: cover;
    margin: 0;
   }

   h1, h2, h3, h4, h5, h6 {
    font-weight: 300;
   }

   .container{
     background-color: rgba(0,0,0,.7);
     width: 100%;
     height: 100%;
     position: absolute;
     top: 60px;
     left: 0;
     right: 0;
     bottom: 0;
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
    margin: 10% auto;
   }

   .form p{
     text-align: center;
     font-size: 1.5rem;
     color: #fff;
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
   }

   input:active, input:focus{
      background-color: transparent;
      border-top: 0px solid grey;
      border-left: 0px solid grey;
      border-right: 0px solid grey;
      border-bottom: 2px solid #4285f4;

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

    .server{
      display: none;
      background-color: #FF3547;
      width: 350px;
      margin: 0 auto;
      text-align: center;
      border-radius: 10px;
    }

    #server{
      text-transform: uppercase;
      color: #fff;
      font-size: 16px;
      padding: 4px 0;
    }

    .server2{
      display: none;
      background-color: #4285F4;
      width: 350px;
      margin: 0 auto;
      text-align: center;
      border-radius: 10px;
    }

    #server2{
      color: #fff;
      font-size: 16px;
      padding: 4px 0;
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
  <div class="container">
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

    <div class="server"><p id = "server"><p></div>
    <div class="server2"><p id = "server2"><p></div>
   </div>
  </div>

  <script>
  $("#myForm").submit(function(event) {
    //alert("ok");
    event.preventDefault();
              if($('#email').val() == ''){
                $("#server").html("Enter data");
                //alert("b");
                return false;
              }

              $.post('forgot.php', {'email':$('#email').val()},
                      function(data) {
                        alert(data);
                        //alert("ok");
                            alert(data[1]);
                            if(data != 'error'){
                              $("#server2").html("You receive on this email your password");
                            }
                            else {
                              $("#server").html("This email is incorrect");
                            }

                      });
              });
  </script>

</body>
</html>
