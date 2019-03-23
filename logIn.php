<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Log In</title>
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

  /* .container{
     background-color: rgba(0,0,0,.7);
     width: 100%;
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
   }*/

   .header{
     height: 60px;
     width: 100%;
     background-color: #000;
     /*position: absolute;
     z-index: 1;*/
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
    margin: 12% auto 0 auto;
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
    color: #696969;
   }

   input:active, input:focus{
      background-color: transparent;
      border-top: 0px solid grey;
      border-left: 0px solid grey;
      border-right: 0px solid grey;
      border-bottom: 2px solid #4285f4;
      color: #696969;
    }

    .text{
      width: 150px;
      float: right;
    }

    .text2{
      width: 150px;
      margin: 0 auto;
      margin-top: 30px;
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

    .remind{
       color: #007bff;
       margin-right: 12px;
    }

    button:hover{
      background-color: #000000;
    }


    #server{
      display: none;
      background-color: #FF3547;
      width: 350px;
      margin: 0 auto;
      text-align: center;
      border-radius: 10px;
      text-transform: uppercase;
      color: #fff;
      font-size: 16px;
      padding: 4px 0;
      margin-top: 10px;
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
    <p>Log in</p>
    <form id = "myForm">
       <div class="md-form">
        <input autofocus type="text" id = "name" name="name" placeholder="Your name">
      </div>
      <div class="md-form">
        <input type="password" id = "password" name="password" placeholder="Your password">
      </div>
        <div class="text">
          <a class="remind" href="/forgotPassword.php">Forgot password?</a>
        </div>
        <div class="log">
          <button class="btn" id = "Enter" type="submit">Log in</button>
        </div>
    </form>
    <div class="text2">
      <a class="remind" href="/formRegister.php">Not a member yet?</a>
    </div>

    <p id = "server"><p></div>
   </div>


<script>
$("#myForm").submit(function(event) {
            if($('#name').val() == '' || $('#password').val() == ''){
              document.getElementById("server").style.display = 'block';
              $("#server").html("Enter data");
              setTimeout(function(){ $('#server').hide(); }, 3000);
              setTimeout(function(){ $('#server').show(); }, 500);
              return false;
            }
            event.preventDefault();
            $.post('authorize.php', {'name':$('#name').val()},
                    function(data) {
                          //alert(data);
                          var str = data;
                          var index = str.indexOf(" ");  // Gets the first index where a space occours
                          var first = str.substr(0, index); // Gets the first part
                          var last = str.substr(index + 1);  // Gets the text part
                          if(data == 'not found')
                          {
                            $("#server").html("Username or Password is incorrect");
                            document.querySelector('#name').value = '';
                            document.querySelector('#password').value = '';
                            setTimeout(function(){ $('#server').hide(); }, 3000);
                            setTimeout(function(){ $('#server').show(); }, 500);
                          }
                          else {
                            if($('#name').val() == first && $('#password').val() == last)
                            {
                              window.location.href = 'homePage.php';
                            }
                            else {
                              $("#server").html("Username or Password is incorrect");
                              document.querySelector('#name').value = '';
                              document.querySelector('#password').value = '';
                              setTimeout(function(){ $('#server').hide(); }, 3000);
                              setTimeout(function(){ $('#server').show(); }, 500);
                            }
                          }
                    });
            });
</script>

</body>
</html>
