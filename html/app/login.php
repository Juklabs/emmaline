<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Staff Login</title>
  <style>
 body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, th, td {padding: 0; margin: 0; } fieldset, img {border: 0 } ol, ul, li {list-style: none } :focus {outline: none } body, input, textarea, select {font-family: 'Open Sans', sans-serif; font-size: 16px; color: #4c4c4c; } p {font-size: 12px; width: 150px; display: inline-block; margin-left: 18px; } h1 {font-size: 32px; font-weight: 300; color: #4c4c4c; text-align: center; padding-top: 10px; margin-bottom: 10px; } html {background-color: #ffffff; } .testbox {margin: 120px auto; width: 343px; height: 360px; border-radius: 8px/7px; background-color: #ebebeb; box-shadow: 1px 2px 5px rgba(0, 0, 0, .31); border: solid 1px #cbc9c9; } input[type=radio] {visibility: hidden; } form {margin: 0 30px; } label.radio {cursor: pointer; text-indent: 35px; overflow: visible; display: inline-block; position: relative; margin-bottom: 15px; } label.radio:before {background: #E74C3C; content: ''; position: absolute; top: 2px; left: 0; width: 20px; height: 20px; border-radius: 100%; } label.radio:after {opacity: 0; content: ''; position: absolute; width: 0.5em; height: 0.25em; background: transparent; top: 7.5px; left: 4.5px; border: 3px solid #ffffff; border-top: none; border-right: none; -webkit-transform: rotate(-45deg); -ms-transform: rotate(-45deg); transform: rotate(-45deg); } input[type=radio]:checked + label:after {opacity: 1; } hr {color: #a9a9a9; opacity: 0.3; } input[type=text], input[type=password] {width: 200px; height: 39px; border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; background-color: #fff; box-shadow: 1px 2px 5px rgba(0, 0, 0, .09); border: solid 1px #cbc9c9; margin-left: -5px; margin-top: 13px; padding-left: 10px; } input[type=password] {margin-bottom: 25px; } #icon {display: inline-block; width: 30px; background-color: #E74C3C; padding: 8px 0px 8px 15px; margin-left: 15px; border-radius: 4px 0px 0px 4px; color: white; box-shadow: 1px 2px 5px rgba(0, 0, 0, .09); border: solid 0px #cbc9c9; } .gender {margin-left: 30px; margin-bottom: 30px; } .accounttype {margin-left: 8px; margin-top: 20px; } input[type=submit] {font-size: 14px; font-weight: 600; color: white; padding: 5px 15px margin: 10px 8px 20px 0px; display: inline-block; float: right; text-decoration: none; width: 90px; height: 35px; border-radius: 5px; background-color: #E74C3C; box-shadow: 0 3px rgba(231, 76, 70, .75); -webkit-transition: all 0.1s linear 0s; transition: all 0.1s linear 0s; top: 0px; position: relative; border-color: transparent; } input[type=submit]:hover {top: 3px; background-color: #CE4235; box-shadow: none; } 
 </style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>
<?php
require_once (dirname(__FILE__).'/library/function.php');

if(isset($_SESSION['current_user_name']) && $_SESSION['current_user_name'] == 'admin') {
    header('Location: index.php');
    exit();
}

$errorMessage = '&nbsp;';
if (isset($_POST['name']) && $_POST['name'] != null) {
    doLogin();
}

?>
<body>
  <div class="testbox">
  <h1>Emmaline Login</h1>
  <form name="frmLogin" id="frmLogin" method="post" accept-charset="utf-8">
      <hr>
    <div class="accounttype">
      <input type="radio" value="staff" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio">Staff</label>
      <input type="radio" value="manager" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Manager</label>
    </div>
  <hr>
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="name" placeholder="Username" required/>
  <label id="icon" for="password"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="password" placeholder="Password" required/>
   <p>If you forgot password please mail to <a href="#">vchukkrit@hotmail.com</a></p>
   <input href="#" type="submit" name="submit" value="Login" class="button"/>
  </form>
</div>
</body>
</html>

