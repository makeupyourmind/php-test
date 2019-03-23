<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Sign Up</title>
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

      /*.container{
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
       width: 390px;
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

     input{
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

       .btn{
         width: 250px;
         margin: 0 auto;
       }

       .cont {
       width: 390px;
       margin-top: 30px;
      }

      .form-btn {
        background: #4285F4;
        height: 35px;
        width: 250px;
        border: none;
        color: #fff;
        font-size: 12px;
        margin: 0 auto;
        text-transform: uppercase;
     }

      button {
      outline: none !important;
      border: none;
      background: transparent;
     }

     button:hover{
       cursor: pointer;
       background-color: #000000;
     }

     .text{
       width: 200px;
       margin: 0 auto;
       margin-top: 30px;
       text-align: center;
     }

     .remind{
        color: #0f1b27;
        margin-right: 12px;
     }

     .term{
       color: #007bff;
     }

     .checkbox{
       width: 30px;
       height: 20px;
     }

     #confirmForm{
       display: none;
       position: absolute;
       width: 100%;
     }

     .full{
       margin: 3% auto;
       width: 400px;
     }

     #note{
       display: none;
       background-color: #FF3547;
       width: 350px;
       margin: 0 auto;
       text-align: center;
       border-radius: 10px;
       font-size: 16px;
       text-transform: uppercase;
       color: #fff;
       padding: 4px 0;
       margin-top: 10px;
     }

     #server{
       display: none;
       background-color: #4285F4;
       width: 350px;
       margin: 0 auto;
       text-align: center;
       border-radius: 10px;
       color: #fff;
       font-size: 16px;
       padding: 4px 3px;
       margin-top: 10px;
     }

     #server2{
       display: none;
       background-color: #FF3547;
       width: 350px;
       margin: 0 auto;
       text-align: center;
       border-radius: 10px;
       text-transform: uppercase;
       color: #fff;
       font-size: 16px;
       padding: 4px 3px;
       margin-top: 10px;
     }

     .dvig{
       float: right;
       margin: 5px 90px 0 0;
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

<div class="container">

  <div id = "confirmForm" class="confirm">
    <div class="full">
      <div class = "md-form">
        <input autofocus type="text" id = "confirm" name="confirm" placeholder="Enter your code">
      </div>
      <div class="btn">
        <button id = "proof" class="form-btn" type="submit">confirm</button>
      </div>
      <p id = "server"></p>
      <p id = "server2"></p>
   </div>
  </div>

  <div id = "form" class="form">
    <p>Sign up</p>
    <form id = "myForm">
      <div class = "md-form">
        <input autofocus type="text" id = "name" name="name" placeholder="Your name">
      </div>
      <div class = "md-form">
        <input type="password" id = "password" name="password" placeholder="Your password">
      </div>
      <div class = "md-form">
        <input type="text" id = "email" name="email" placeholder="Your Email">
      </div>
           <input id = "checkbox" class = "checkbox" type="checkbox">
           <div class = "dvig"><a id = "term" class = "term" target = "_blank" href="/agreement.php">Accept the Terms and Conditions</a></div>
      <div class = "cont">
        <div class="btn">
          <button class="form-btn" type="submit">Sign up</button>
        </div>
      </div>
    </form>
    <div class="text">
      <a class="remind" href="/logIn.php">Already a member?</a>
    </div>
    <p id = "note"></p>
  </div>

</div>

<script>
$("#myForm").submit(function(event) {

            // Предотвращаем обычную отправку формы
            if($('#name').val() == '' || $('#password').val() == '' || $('#email').val() == '' || $("#checkbox").prop("checked") != true)
            {
              document.getElementById('note').style.display = 'block';
              $("#note").html("Enter data");
              setTimeout(function(){ $('#note').hide(); }, 3000);
              setTimeout(function(){ $('#note').show(); }, 500);
              return false;
            }

            event.preventDefault();

            $.post('addUser.php', {'name':$('#name').val(), 'password':$('#password').val(), 'email':$('#email').val() },
                    function(data) {
                          if(isNaN(data) == false)
                          {
                            $("#form").css("display", "none");
                            document.getElementById('confirmForm').style.display = 'block';
                            $('#confirm').focus();

                            $( "#proof" ).click(function() {
                            $.post('confirmEmail.php', {'name': $('#name').val(), 'password' : $('#password').val() ,
                            'email':$('#email').val(), 'confirm' : $('#confirm').val(), 'codeOne' : data},
                                    function(data) {
                                    alert("data : " + data);
                                    if(data == 'ok'){
                                      document.getElementById('server').style.display = 'block';
                                      $("#server").html("Registration success.You will be redirected to the login page.");
                                      setTimeout(function(){ window.location.href = 'homePage.php'; }, 3000);
                                    }
                                    else {
                                      document.getElementById('server2').style.display = 'block';
                                      document.querySelector('#confirm').value = '';
                                      $("#server2").html("Enter data or Error code");
                                      setTimeout(function(){ $('#server2').hide(); }, 3000);
                                      setTimeout(function(){ $('#server2').show(); }, 500);
                                    }
                              });
                            })
                          }
                          else {
                            document.getElementById("note").style.display = 'block';
                            $("#note").html("User name is token");
                            document.querySelector('#name').value = '';
                            setTimeout(function(){ $('#note').hide(); }, 3000);
                            setTimeout(function(){ $('#note').show(); }, 500);
                          }
                    });

      });
</script>


</body>
</html>
