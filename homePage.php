<!DOCTYPE html>
<?php
 session_start();
 if(!isset($_SESSION['logged_user'])){
     header("Location: logIn.php");
     exit;
 }
 ?>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

     <title>Home Page</title>

     <style>

     body{
      background: url('/public/91.jpg');
      font-family: Roboto,sans-serif;
      background-size: cover;
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

     .info{
       width: 200px;
       margin: 4% auto 0 auto;
       font-size: 22px;
       color: #23224c;
       text-align: center;
     }

     .home{
       width: 600px;
       background-color: #fff;
       margin: 0 auto;
       height: 500px;
       border-radius: 10px;
     }

     .logOut{
       width: 100%;
       margin: 15px 20px 0 0;
       text-align: right;
     }

     .logSpan{
       margin-right: 20px;
     }

     .logOut a{
       color: red;
       text-decoration: underline;
     }

     .inf{
       padding: 9px 9px;
       width: 550px;
       line-height: 1.7;
       margin: 0 auto;
     }

     .bottom{
      width: 100%;
      height: 200px;
     }

     .del{
       text-align: right;
       margin-top: 20px;
     }

     .btndanger{
       background: #FF3547;
       height: 35px;
       width: 150px;
       border: none;
       color: #fff;
       font-size: 12px;
       cursor:pointer;
       text-transform: uppercase;
       margin: 10px 30px 20px 20px;
     }
     .p{
       width: 140px;
       margin: 0 auto;
       text-align: center;
     }
     .img{
       width: 90px;
       height: 90px;
       border: 2px solid grey;
       margin: 0 auto;
       background: white;
     }


     .btn{
       background: #4285F4;
       border: none;
       color: #fff;
       text-transform: uppercase;
       font-size: 12px;
       height: 35px;
     }

     .buttonSet{
       width: 250px;
       float: right;
     }

     .buttonDel{
       width: 250px;
       text-align: right;
     }

     .btnDel{
       background: #FF3547;
       height: 35px;
       width: 150px;
       border: none;
       color: #fff;
       font-size: 12px;
       cursor:pointer;
       text-transform: uppercase;
     }

     /*.controls{
       height: 30px;
     }*/

     i{
       color: red;
     }

     .navig{
       width: 30px;
       margin: 5px auto;
       height: 25px;
     }

     .file{
       width: 114px;
       margin: 5px auto;
       height: 25px;
     }

     .allPhoto{
       display: none;
     }

     .gg{
       color: black;
       text-decoration: underline;
     }

     .imgForAvatar{
       width: 90px;
       height: 90px;
       border: 2px solid grey;
       margin: 0 auto;
       background: white;
     }

     .closeView{
       width: 200px;
       margin-left: 100px;
     }

     .view{
       width: 200px;
       background: #4285F4;
       border: none;
       color: #fff;
       cursor: pointer;
     }

     #closeView{
       display: none;
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


        <!--Start div info and home-->
        <div class="info">
      <p>Your Home Page</p>
      <p id = "get">Hi,<?php echo $_SESSION['logged_user']; ?></p>
     </div>
     <div class = "home">
      <div class = "logOut"><span class="logSpan"><a href="/logOut.php">Log out</a></span></div>
      <div class="p"><p id = "change">Load your avatar</p></div>
      <div class = "closeView"><a class="gg" id = "closeView">Close View</a>
        <a id = "href" class="gg" href="">View all photo</a>
      </div>

     <div id = "imgForAvatar" class="imgForAvatar">
       <img src="" id = "AvatarOnly" width="90" height="90" alt="">
     </div>

 <div id = "allPhoto" class = "allPhoto">
     <div class="img">
       <img src = "" id = "getPhotoUser" width="90" height="90" class="avatar img-circle img-thumbnail" alt="">
     </div>

     <!--<div class="controls">-->
       <div class="navig">
          <a class="btn-floating" id = "left" href="" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
          <a class="btn-floating" id = "right" href="" data-slide="next"><i class="fas fa-chevron-right"></i></a>
       </div>
     <!--</div>-->

 </div>

     <form class="myForm" id = "myForm" enctype="multipart/form-data">


         <div id = "fileHide" class="file">
            <input type="file" id = "pic" name="pic">
         </div>


      <div id = "hideButton">
        <div class="buttonSet"><button type = "submit" name = "SetPhoto" class="btn" id = "file">Set photo</button></div>
      </div>
    </form>
 <div class="buttonDel">
   <button type = "submit" name = "DeletePhoto" class="btnDel" id = "DeletePhoto">Delete photo</button>
 </div>
     <div class="del">
        <button id = "deleteAccount" class="btndanger" type="submit" name="button">Delete account</button>
     </div>


     <!--Start div class bottom-->
     <div class="bottom">
        <div id = "inf" class = "inf">
          <span>Your name : </span> <span id = "userName"></span>
          <br>
         <span>Your password : </span> <span id = "userPassword"></span>
          <br>
         <span>Your email : </span> <span id = "userEmail"></span>
          <p style = "color: red; font-size: 20px; display: none" id = "test"></p>
          <p id = "lengthOfArrayPhoto" style = "display: none"></p>
          <p id = "count" style = "display: none" ></p>
        </div>
    </div>
     <!--End div class bottom-->


 </div><!--End div info and home-->


 <!--Start scripts-->
 <script>

  $('#href').click(function(event){
    event.preventDefault();
      $('#fileHide').css("display", "none");
      $('#href').css("display", "none");
      $('#change').html("Your photos");
      $('#imgForAvatar').css("display", "none");
      $('#closeView').css("display", "block");
      $('#allPhoto').css("display", "block");

  })

   $('#closeView').click(function(event){
     event.preventDefault();
     $('#fileHide').css("display", "block");
     $('#href').css("display", "block");
     $('#change').html("Load avatar");
     $('#allPhoto').css("display", "none");
     $('#imgForAvatar').css("display", "block");
     $('#closeView').css("display", "none");

   })
 </script>


 <script>
      var n = 0;
   $('#right').click(function(event){

      event.preventDefault();
      n++;

      $('#test').html(n);
      if(n >= $('#lengthOfArrayPhoto').html()){
        n = 0;
      }

   })

   $('#left').click(function(event){

      event.preventDefault();
      if(n == 0){
        n = 0;
        $('#test').html(n);

      }
      else
     {
        n--;

        if(n < 0){
           n = 0;
        }
        else {
           $('#test').html(n);
        }
    }

   })

 </script>

 <script> /*Скрипт для перебора фото на странице по нажатию на правую кнопку*/
  $('#right').click(function(event) {
    event.preventDefault();

    var n = $('#test').html();
    //alert("n left : " + n);
    var temp = $('#get').html();
    var str = temp;
    var index = str.indexOf(",");  // Gets the first index where a space occours
    var first = str.substr(0, index); // Gets the first part
    var last = str.substr(index + 1);  // Gets the text part
    var path = "./users/" + last + "/";
    $.ajax({
    url : '/searchPhotoToSet.php',
    type : 'POST',
    dataType : 'JSON',
    success: function(data){
        //alert("data right : " + data);
         var dataSet = data;
       //alert("$('#lengthOfArrayPhoto').html() : " + data.length);
         /*if(!data.length){
           n = 0;
           alert("Я пошел сюда data.lenght : " + dataSet[n]);
           $('#getPhotoUser').attr('src', path + dataSet[n]);
         }*/
         if(n >= data.length){
           //n = 0;
           n = data.length;
           if(dataSet[n] == undefined){
             n = 0;
             //alert("Я пошел сюда data.lenght : " + dataSet[n]);
             $('#getPhotoUser').attr('src', path + dataSet[n]);
           }
           //alert("n >= data.length : " + dataSet[n]);
           $('#getPhotoUser').attr('src', path + dataSet[n]);
         }
         else {
           //alert("data right index : " + dataSet[n]);
           $('#getPhotoUser').attr('src', path + dataSet[n]);
         }
     }
    });
  })


 </script>

 <script> /*Скрипт для перебора фото на странице по нажатию на левую кнопку*/
  $('#left').click(function(event) {
    event.preventDefault();

    var n = $('#test').html();
    //alert("n left : " + n);
    var temp = $('#get').html();
    var str = temp;
    var index = str.indexOf(",");  // Gets the first index where a space occours
    var first = str.substr(0, index); // Gets the first part
    var last = str.substr(index + 1);  // Gets the text part
    var path = "./users/" + last + "/";
    $.ajax({
    url : '/searchPhotoToSet.php',
    type : 'POST',
    dataType : 'JSON',
    success: function(data){
         //alert("data left : " + data);
         var dataSet = data;

         $('#getPhotoUser').attr('src', path + dataSet[n]);
         //alert("data left index : " + dataSet[n]);
     }
    });
  })


 </script>

 <script> /*Скрипт для удаления фото*/

   $("#DeletePhoto").click(function(event){
     var temp = $('#get').html();
     var str = temp;
     var index = str.indexOf(",");  // Gets the first index where a space occours
     var first = str.substr(0, index); // Gets the first part
     var last = str.substr(index + 1);  // Gets the text part
     var path = "./users/" + last + "/";
     $.ajax({
     url : '/searchPhotoToSet.php',
     type : 'POST',
     dataType : 'JSON',
     success: function(data){
       if(data == ''){
         alert("You have no photos");
       }
       //alert("i want to del");
         var getID = $('#test').html();
         var namePhotoToDel = data[getID];
           $.ajax({
           url : '/deletePhotoUser.php',
           type : 'POST',
           data: ({temp: namePhotoToDel}),
           dataType: "JSON",
           success: function(data){
                //alert("data id delPhoto : " + data);
                //alert("data id to set after del : " + data[0]);
                //alert("data lenght : " + data.length);
                 $('#getPhotoUser').attr('src', path + data[0]);
                 $('#AvatarOnly').attr('src', path + data[0]);
                 n = 0;
                 $('#test').text(n);
                 if(data.length == 0){
                   $('#AvatarOnly').attr('src', '');
                 }

              }
            });
      }
   });

   })

 </script>

 <script> /*Скрипт для установки фото при загрузки страницы*/

   $(document).ready(function(){
     //alert("ok");
     var n = 0;
     $('#test').html(n);
     //alert("n : " + n);
     var temp = $('#get').html();
     var str = temp;
     var index = str.indexOf(",");  // Gets the first index where a space occours
     var first = str.substr(0, index); // Gets the first part
     var last = str.substr(index + 1);  // Gets the text part
     var path = "./users/" + last + "/";
     $.ajax({
     url : '/searchPhotoToSet.php',
     type : 'POST',
     dataType : 'JSON',
     success: function(data){
         //alert("data from searchPhotoToSet : "  + data);
         $("#lengthOfArrayPhoto").html(data.length);
          $('#AvatarOnly').attr('src', path + data[n]);
          $('#getPhotoUser').attr('src', path + data[n]);
      }
     });

   })
 </script>

  <script> /*Скрипт для загрузки фото на сервер (в папку пользователя)*/
  $("#myForm").submit(function(event){
    event.preventDefault();
  var data = new FormData(this); // <-- 'this' is your form element
  var temp = $('#get').html();
  var str = temp;
  var index = str.indexOf(",");  // Gets the first index where a space occours
  var first = str.substr(0, index); // Gets the first part
  var last = str.substr(index + 1);  // Gets the text part
 //alert("last : " + last);
  var path = "./users/" + last + "/";
  $.ajax({
          url: "uploadPhoto.php",
          data: data,
          cache: false,
          contentType: false,
          processData: false,
          type: 'POST',
          dataType : 'JSON',//для получения ответа норм.........................................
          success: function(data){
               //alert("uploadPhoto : "  + data);
                $('#AvatarOnly').attr('src', path + data);

            }
      })

  })
 </script>

  <script>/*Скрипт для удаления аккаунта*/
  $('#deleteAccount').click(function(e) {
  e.preventDefault();
  var temp = $('#get').html();
  //alert('temp : ' + $('#get').text());
  var str = temp;
  var index = str.indexOf(",");  // Gets the first index where a space occours
  var first = str.substr(0, index); // Gets the first part
  var last = str.substr(index + 1);  // Gets the text part
  //alert("last : " + last);
  $.post('deleteAccount.php', {'name': last },
          function(data) {
               //alert(data);
                if(data == 'ok'){
                  alert("Your account has been deleted");
                  window.location.href = 'index.php';
                }
            });
  });
  </script>


   <script> /*Скрипт для получения данных пользователя*/
     $(document).ready(function(){
       var temp = $('#get').html();
       //alert('temp : ' + $('#get').text());
       var str = temp;
       var index = str.indexOf(",");  // Gets the first index where a space occours
       var first = str.substr(0, index); // Gets the first part
       var last = str.substr(index + 1);  // Gets the text part
       //alert("last : " + last);
       $.post('getDataUser.php', {'name': last },
               function(data) {
                      var str = data.split(" ");
                      document.querySelector('#userName').innerHTML = str[0];
                      document.querySelector('#userPassword').innerHTML = str[1];
                      document.querySelector('#userEmail').innerHTML = str[2];
                 });
       })
   </script>
 <!--End scripts-->

 </body>
 </html>
