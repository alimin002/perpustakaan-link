<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		/* Import Lib. and Fonts */
@import 'https://daneden.github.io/animate.css/animate.min.css';
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);

* {
  box-sizing: border-box;
}

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif,"Open Sans";
}

body {
  margin: 0;
  padding: 0;
  min-height: 100%;
  background-color: #292931;
  color: #606468;
  font: 400 0.875rem/1.5 "Open Sans","source sans pro",sans-serif;
}
.signin-form {
  width: 300px;
  position: absolute;
  top: 50%;
  left: 50%;
  -moz-transform:translate(-50%,-50%);
  -webkit-transform:translate(-50%,-50%);
  transform:translate(-50%,-50%);
}
.signin-form h2 {
  margin: 22px;
  text-align: center;
  font-size: 35px;
  font-family:sans-serif,'source sans pro';
  font-weight: 600;
  color: #d0d3d4;
}
.signin-form .form-row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 17px;
}
.signin-form input {
  margin: 0;
  width: 100%;
  padding: 0;
  color: inherit;
  font: inherit;
  border: 0;
  outline: 0;
  -moz-transition: background-color .2s linear;
  -webkit-transition: background-color .2s linear;
  transition: background-color .2s linear;
}
.form label,
.form input[type="text"],
.form input[type="password"] {
  padding: 10px;
  border-radius: 3px;
}
.form label {
  font-size: 20px;
  color: #e7e7e7;
  background-color: #363b41;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}
.form input[type="text"], .form input[type="password"] {
  color: #eee;
  background-color: #3b4148;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.form input[type="text"]:focus, .form input[type="text"]:hover, .form input[type="password"]:focus, .form input[type="password"]:hover {
  background-color: #434A52;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.form #signin {
  opacity: 0;
  display: none;
}
.form .virtual-signin {
  position: absolute;
  left: 50%;
  margin-top:10px;
  transform:translate(-50%,0);
}

.signin-label {
  padding-left: 10px;
}
.fontawesome-unlock {
  color: #fff;
  font-size: 32px;
}
.unlock {
  font-size: 30px;
}

/* Gear Effects */
#gear {
  display: block;
  width: 30px;
  height: 30px;
  background: url(http://i.imgur.com/lOBxb.png);
  -moz-animation: gear 2s infinite ease-in;
  -webkit-animation: gear 2s infinite ease-in;
  animation: gear 2s infinite linear;
  -webkit-animation-play-state: paused;
  animation-play-state: paused;
  -webkit-animation-play-state: running;
  animation-play-state: running;
}
@-webkit-keyframes gear {
  0% { -webkit-transform: rotate(0deg);transform: rotate(0deg);}
  100% { -webkit-transform: rotate(360deg);transform: rotate(360deg); }
}
@-moz-keyframes gear {
  0% { -webkit-transform: rotate(0deg);transform: rotate(0deg);}
  100% { -webkit-transform: rotate(360deg);transform: rotate(360deg); }
}
@keyframes gear {
  0% { -webkit-transform: rotate(0deg);transform: rotate(0deg);}
  100% { -webkit-transform: rotate(360deg);transform: rotate(360deg); }
}
	</style>
</head>
<body>

<div id="container">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<!--
NOTE :- Put above JQuery Library in starting of 'HEAD' tag.
-->
<div class="signin-form">
  <form class="form">

    <h2>Daftar </h2>
    
    <div class="form-row">
      <label class="fontawesome-user" for="username"></label>
      <input id="username" type="text" placeholder="Enter Username" required>
    </div>

    <div class="form-row">
      <label class="fontawesome-key" for="password"></label>
      <input id="password" type="password" placeholder="Enter Password" required>
    </div>

    <div class="form-row">
      <span class="virtual-signin">
        <label style="background:#377dd2;" class="fontawesome-lock" for="signin">
          <span class="signin-label">Daftar</span>
        </span>
      <input type="button" id="signin">
    </div>

  </form>
</div>
</div>

</body>
<script>
$(document).ready(function (){
  $('.virtual-signin').click(function(){
      
      var username = $('#username').val();
      var password = $('#password').val();

      if(username == '' && password == '')
      {
          $(".form").addClass('animated bounce');
          $(".form").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
              $(this).removeClass('animated bounce');
          });
      }
      else if (username == '')
      {
          $("#username").addClass('animated shake');
          $("#username").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
              $(this).removeClass('animated shake');
          });
      }
      else if(password == '')
      {
          $("#password").addClass('animated shake');
          $("#password").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
              $(this).removeClass('animated shake');
          });
      }
      else 
      {
          setTimeout(function(){
            $('.virtual-signin').html('<i id="gear"></i>')
          }, 0000);

          /* Check User-Data with Database and Display Result */
          setTimeout(function(){
            $('.virtual-signin').html('<span class="fontawesome-unlock unlock"></span>')
          }, 5000);

          /* Sign-in successful Message */ 
          setTimeout(function(){
            $('.signin-form').addClass('animated fadeOut');
            $(".signin-form").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                $(this).removeClass('animated fadeOut');
            });
            $('.signin-form').html('<h2 class="Successful">Sign-In Successful</h2>');
          }, 7000);
      }

  });
});
</script>
</html>