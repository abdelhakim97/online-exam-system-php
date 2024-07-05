<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
   
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <script src="JS/js.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style/style.css">

</head>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Bona+Nova&family=Dancing+Script:wght@400;600;700&family=Noto+Serif:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:wght@300;500&display=swap');
.Signup {

display: inline;
position: relative;
/* color: #0087ca;*/
}

.Signup::after {

content: '';
position: absolute;
width: 100%;
transform: scaleX(0);
height: 2px;
bottom: 0;
left: 0;
background-color: red;
transform-origin: bottom right;
transition: transform 0.25s ease-out;
}

.Signup:hover::after {

transform: scaleX(1);
transform-origin: bottom left;
}

.btn_login{
    background-color: #0d6efd;
   color: white;
   padding: 16px 20px;
   border: none;
   cursor: pointer !important;
   width: 100%;
   margin-bottom: 10px;
   opacity: 0.8;
   display: block;
}
#b_abdou,#tex_cont{
    font-family: 'Dancing Script', cursive !important;
    color: rgb(54, 209, 220) !important;
}


</style>

<body class="body_me" style="background-image: url(image/bg_me.jpg); background-size: 100%; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
    <div class="my_div">
        <header class="mt-4 m-3">
            <img src="image/27fca79e11f01a69273a73a7acadc831.jpg" alt="" class="d-inline" width="50px">
            <h6 class="d-inline text-white" id="b_abdou">BY ABDELHAKIM</h6>
        </header>
        <main class="my_main">

            <div class="text_content text-white" id="tex_cont">
                <h1>Développement Digital Option Web Full Stack</h1>
                <br>
                <p>

                    Hello I'm Abdelhakim I do all kinds of work related to the profession <br>
                    View my work  This site is for learning.
                </p>


            </div>
            <div class="signup_login" style="border-top: 3px solid;border-left: 3px solid;border-right: 3px solid;border-bottom: 3px solid; border-radius: 17px; border-image:linear-gradient(to right, rgb(255 46 144) 0%, rgb(61 35 185) 100%) 5; ">
                <h1 style="width: 10cm;" ><span style="background-image: linear-gradient(to right, rgb(255 46 144), rgb(61 35 185)); -webkit-background-clip: text; -moz-background-clip: text;background-clip: text;    color: transparent;">Login to Admin</span>  </h1>
                <br>
                <form action="admin.php?q=index.php" class="form-container" method="post">
                    <label for="psw"><b>Email</b></label>
                    <div class="inputField">
                        <input type="email" placeholder=" " / class="input_login" id="inp_email" onkeyup="keyup_login_Eamil()" name="uname">
                        <span id="Placeholder_Email">Email</span>
                    </div>
                    <br>
                    <label for="psw"><b>Password</b></label>
                    <div class="inputField">
                        <input type="password" placeholder=" " / class="input_passaword" id="pass_wor" onkeyup="keyup_login_mot_pass()" name="password">
                        <span id="Placeholder_ins">Password</span>
                    </div>
                    <br>
                    <input type="submit" value="Login" class="btn_login" name="login">
                </form>
                <br>
                <span style="opacity: 0.7; font-size: 15px;">login for Administrator <span style="color: #0d6efd;">NOT User !!</span> </span> <a href="index.php" style="text-decoration: none; color: red; font-size: 15px" class="Signup">Sign up for User</a>
                <br><br>



            </div>








        </main>

    </div>
</body>

</html>