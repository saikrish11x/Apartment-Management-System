<?php include '../navbar.php';?>
<html>
    <head>
	 <title> Admin login </title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="Dashboard">
   <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	 <!--link rel="stylesheet" type="text/css" href="../css/adminlogin.css"-->
   <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

   <style media="screen">
   body{
    margin: 0 auto;
    background: url("../img/backgroundphoto.jpg");
     height: 100%;
     background-size:contain;
     background-repeat: no-repeat;
     background-size: cover;
     background-position: center center;;
     background-attachment: fixed;
     font-family: 'Poppins', sans-serif;
   }
   a, a:active, a:focus {
      outline: none;
   }
   .loginbox
   {
     attachment:fixed;
    width: 370px;
    height: 450px;
    text-align: center;
    margin: 0 auto;
    background-color: rgba(127, 140, 141,0.9) ;
    margin-top: 160px;
    border-style: solid;
    border-radius: 20px;

   }

   .loginbox img{
     overflow: auto;
        border-radius:100px;
        width: 140px;
        height: 140px;
        margin-top: -60px;
        margin-bottom: 5px;
   }
   a{
    text-decoration: none;
    color: white;
   }

   h1{

   font-size: 22px;
   }


   input{
       margin-top: 30px;
       height:45px;
       width: 300px;
       border-radius: 25px;
       text-align: center;
       font-weight: bold;
       font-size: 18px;
       background-color:
       }

   .loginbox input[type="submit"]
   {
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    font-size: 18px;
    border-radius: 15px;
   }

   .loginbox input[type="submit"]:hover
   {
    background: #fb1111;
    font-size: 19px;
    cursor: pointer;

   }

   .forget
   {
     display: inline;
     padding-right: 10px;
   }
   .registerbox
   {

   width: 320px;
   height: 420px;
   background: #89a3b2;
   color: #fff;
   top: 50%;
   left: 40%;
   position: absolute;
   transform: translate(-50%, -50%);
   box-sizing: border-box;
   padding: 70px 30px;

   }

   .forget :hover{
     color: #ffb62e;
   }

   .registerbox input[type="submit"]
   {
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    font-size: 18px;
    border-radius: 15px;
   }

   .registerbox input[type="submit"]:hover
   {
    background: #fb1111;
    font-size: 19px;

   }

   </style>
     </head>
     <body>
       <div class="loginbox">
    <img src="../img/loginavatar2.png" class="avatar">
    <h1> <center>Admin</center> </h1><br>
    <form>
    <div class="input">
    <input type="text" placeholder="Enter Username" name="txtusername" >
    </div>
    <div class="input">
    <input type="password" placeholder="Enter Password" name="txtpassword" >
    </div>
    <input type="submit" name="Submit" value="Login">
    <br>
    <br>
    <div class="forget">
    <a href="#"><center>Forgot Password?<center></a>
    </div>
    </form>

  </div>

     </body>
</html>
