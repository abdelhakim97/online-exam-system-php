<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sing up</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>








<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


<style>
 @import url('https://fonts.googleapis.com/css2?family=Bona+Nova&family=Dancing+Script:wght@400;600;700&family=Noto+Serif:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:wght@300;500&display=swap');
#border_RGB,#gender{
  border-top: 3px solid;
   border-left: 3px solid;
   border-right: 3px solid;
   border-bottom: 3px solid;
   border-image: linear-gradient(to right, rgb(255 46 144) 0%, rgb(61 35 185) 100%) 5;
}


.button_admin_login,.button_user_login{
 
   
   
   border-image: linear-gradient(to right, rgb(255 46 144) 0%, rgb(61 35 185) 100%) 5;
}



#name::placeholder,#password::placeholder,#email::placeholder,#college::placeholder,#mob::placeholder,#cpassword::placeholder{
  background-image: linear-gradient(to right, rgb(100 46 144), rgb(150 35 185));
   -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
        color: transparent;
    font-size: 14px;
    font-weight: bolder;
   
}
#name,#password,#email,#college,#mob,#cpassword{
  border: 1px solid #20B2AA;
  
}
.button_admin_login{
  margin-right: 0.4cm;
  color: white;

background-color: #008080 ;
font-family: 'Ubuntu', sans-serif !important;

}
.button_user_login{
  margin-top:0.4cm ;
  color: white;

background-color: #008080 ;
font-family: 'Ubuntu', sans-serif !important;
  
}
.button_user_login:hover,.button_admin_login:hover{
 background-color: #00FFFF;
 color: black;
}
#by_abdou{
font-family: 'Dancing Script', cursive !important;
font-family: 'Noto Serif', serif;
font-family: 'Poppins', sans-serif;
font-family: 'Ubuntu', sans-serif;
}
#by_abdou{
  color: rgb(54, 209, 220) ;
}
@import url('https://fonts.googleapis.com/css2?family=Bona+Nova&family=Dancing+Script:wght@400;600;700&family=Noto+Serif:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Orbit&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:wght@300;500&display=swap');
#id_form{

font-family: 'Poppins', sans-serif ;
font-family: 'Ubuntu', sans-serif !important;
}
#sign_up{
  background-color: #20B2AA !important;
  font-family: 'Ubuntu', sans-serif !important;
  border-radius: 6px;
  border: 1px solid;
}


</style>

</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"><img src="image/27fca79e11f01a69273a73a7acadc831.jpg" alt="" class="d-inline" width="50px" style="display: inline !important; border-radius: 13px;">   <h6 class="d-inline text-white"  style="display: inline !important; font-size: 20px !important;" id="by_abdou">BY ABDELHAKIM</h6></span></div>

<div class="col-md-2 col-md-offset-4">
  <main class="" style="display: flex;">
    <br>
<div class="btn_login_Admin" style="margin-top: 0.4cm;" >
 <a href="index_admin_login.php"> <button class="button_admin_login">Admin Login</button></a>
</div>
<br>
<a href="index_login_me.php"   ><button  class="button_user_login">Login</b></button></a></div>
</main>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="" style="background-image: url(image/bg_me.jpg);background-position: center; background-repeat: no-repeat; background-attachment: fixed; background-size: 100%;">
<div class="row" >

<div class="col-md-7"></div>
<div class="col-md-4 panel"  style="margin-left: 12cm !important;" id="border_RGB">
<!-- sign in form begins -->  

  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST" id="id_form" >
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male" id="id_gender" selected disabled>Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="Sign up" class="btn btn-primary" id="sign_up"/>
  </div>
</div>

</fieldset>
</form>

</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="http://www.projectworlds/online-examination" target="_blank"></a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login"></a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers"></a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank"></a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange"></span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="http://yugeshverma.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Yugesh Verma</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741</h4>
		<h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
		<h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology ,bhilai</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>

<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
