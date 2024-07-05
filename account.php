<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>User</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>


  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style/style.css">

  <!--alert message-->
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <!--alert message end-->

</head>

<?php
include_once 'dbConnection.php';
?>

<body>

  <div class="header">
    <div class="row">
      <div class="col-lg-6">
        <p></p>
        <span class="logo">QUESTION</span>
      </div>
      <div class="col-md-4 col-md-offset-2">
        <?php
        include_once 'dbConnection.php';
        session_start();
        if (!(isset($_SESSION['email']))) {
          header("location:index.php");
        } else {
          $name = $_SESSION['name'];
          $email = $_SESSION['email'];

          include_once 'dbConnection.php';

          $q = mysqli_query($con, "SELECT * FROM `user` WHERE `name`='$name'; ");
          while ($row = mysqli_fetch_array($q)) {
            $img = $row['img'];
          }

          if (file_exists($img)) {
            echo '<span class="pull-right top title1" ><span class="log1"><img src="' . $img . '" width="46px" style="border-radius: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">' . $name . '</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="" aria-hidden="true"></span></button></a></span>';
          } else {
            echo '<span class="pull-right top title1" ><span class="log1"><i class="fa-solid fa-user-graduate"></i>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">' . $name . '</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="" aria-hidden="true"></span></button></a></span>';
          }
        } ?>
        <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bona+Nova&family=Dancing+Script:wght@400;600;700&family=Noto+Serif:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Orbit&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:wght@300;500&display=swap');


    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type=radio] {
      appearance: none;
      background-color: #fff;
      width: 15px;
      height: 15px;
      border: 2px solid #ccc;
      border-radius: 2px;
      display: inline-grid;
      place-content: center;
    }

    input[type=radio]::before {
      content: "";
      width: 10px;
      height: 10px;
      transform: scale(0);
      transform-origin: bottom left;
      background-color: #fff;
      clip-path: polygon(13% 50%, 34% 66%, 81% 2%, 100% 18%, 39% 100%, 0 71%);
    }

    input[type=radio]:checked::before {
      transform: scale(1);
    }

    input[type=radio]:checked {
      background-color: #0075FF;
      border: 2px solid #0075FF;
    }
    .header {
      border-top: 6px solid;
      border-left: 6px solid;
      border-right: 6px solid;
      border-bottom: 6px solid;
      border-image: linear-gradient(to right, #51e2f5 0%, #ffa8B6 100%) 5;
      background-color: #e5eaf5 !important;

    }
    .logo,
    .log1,
    .log {
      color: black;
    }
    .logo {
      font-family: 'Noto Serif', serif !important;
    }
    .log1,
    .log {
      font-size: 20px;
      font-family: 'Noto Serif', serif !important;
    }
    #signup,
    #rank,
    #History {
      margin-left: 4cm !important;
    }

    body {
      background-image: url(image/bg_con2.jpg);
      background-position: center;
      background-attachment: fixed;
      background-size: 100%;
      background-repeat: no-repeat;
    }
    #queston_user {
      width: 15cm;
      margin: auto !important;
      border-radius: 16px !important;
      border-top: 4px solid;
      border-left: 4px solid;
      border-right: 4px solid;
      border-bottom: 4px solid;
      border-image: linear-gradient(to right, rgb(255 46 144) 0%, rgb(61 35 185) 100%) 5;
      background-color: #20b2abc0 !important;
      height: 12cm;
    }
    #ques {
      background-color: #7FFF00;
    }
    #content_question {
      margin-left: 4.5cm !important;
      height: 9cm;
      margin-top: 1cm;

    }

    #res_quiz {
      background-image: url(image/res.jpg);
    }

    #form_modiy {

      width: 20cm !important;
    }
  </style>
      </div>
    </div>
  </div>
  <div class="bg">

    <!--navigation menu-->
    <nav class="navbar navbar-default title1">
      <div class="container-fluid" style="background-color: #DFCFBE !important;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>A-Z</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse contole" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li <?php if ($_GET['q'] == 1) echo 'class="active"'; ?>><a href="account.php?q=1">&nbsp;Home<span class="sr-only">(current)</span></a></li>

            <li <?php if ($_GET['q'] == 2) echo 'class="active"'; ?> id="History"><a href="account.php?q=2"><i class='fas fa-history' style='color:#f34c39'></i>&nbsp;History</a></li>

            <li <?php if ($_GET['q'] == 4) echo 'class="active"'; ?> id="rank"><a href="account.php?q=4"><i class='fa fa-recycle' style='color:#f33939'></i>&nbsp;modify</a></li>
            <li class="pull-right" id="signup"> <a href="logout.php?q=account.php"><i class='fa fa-hand-o-right' style='color:#394ff3'></i>&nbsp;&nbsp;&nbsp;&nbsp;Log Out</a></li>

          </ul>
          <!--      <form class="navbar-form navbar-left" role="search" method="post" action="">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter tag " name="tag_search">
        </div>
            <input type="submit"  name="sb_s">
      </form> -->
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!--navigation menu closed-->
    <div class="container"><!--container start-->
      <div class="row">
        <div class="col-md-12">

          <!--home start-->
          <?php if ($_GET['q'] == 1) {

            $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
            echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr style="background-color: #ffa8B6;"><td><b>N°</b></td><td><b>Title</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
            $c = 1;
            while ($row = mysqli_fetch_array($result)) {
              $title = $row['title'];
              $total = $row['total'];
              $sahi = $row['sahi'];
              $time = $row['time'];
              $eid = $row['eid'];
              $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die('Error98');
              $rowcount = mysqli_num_rows($q12);
              if ($rowcount == 0) {
                echo '<tr style="background-color: #ccc;"><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
	<td><b><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1" style="margin:0px;><i class="fa-solid fa-circle-play" style="color: #000000;"></i>&nbsp;<span class="title1"><b>S</b></span></a></b></td></tr>';
              } else {
                echo '<tr style="color:red;background-color: #ccc;"><td>' . $c++ . '</td><td>' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
	<td><b><a href="update.php?q=quizre&step=25&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1" style="margin:0px;"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>R</b></span></a></b></td></tr>';
              }
            }
            $c = 0;
            echo '</table></div></div>';
          } ?>

      



          <!--home closed-->

          <!--quiz start-->
          <?php
          if ($_GET['q'] == 'quiz' && $_GET['step'] == 2) {

            $eid = $_GET['eid'];
            $sn = $_GET['n'];
            $total = $_GET['t'];
            $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' ");
            echo '<div class="panel" style="margin:5%" id="queston_user">';
            echo "<div id='content_question'>";

            while ($row = mysqli_fetch_array($q)) {
              $qns = $row['qns'];
              $qid = $row['qid'];

              //
              $q_time = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ");
              while ($row = mysqli_fetch_array($q_time)) {
                $time = $row['time'];
                echo '<div style="background-color: white;text-align: center;width:7cm;">Exact time for the test :' . $time . " min" . '</div>';
                $sec = $time * 60;
                echo "<span id='countdown' class='timer' style='color:red';></span>
<script>
    function secondPassed() {
        var seconds =$sec;
        var countdownElement = document.getElementById('countdown');

        function updateCountdown() {
            var minutes = Math.floor(seconds / 60);
            var remainingSeconds = seconds % 60;
            if (remainingSeconds < 10) {
                remainingSeconds = '0' + remainingSeconds;
            }
            countdownElement.innerHTML = minutes + ':' + remainingSeconds;
        }

        function finishCountdown() {
            clearInterval(countdownTimer);
            countdownElement.innerHTML ='YOU ARE LOST!!';
        }

        updateCountdown(); // Initial display

        var countdownTimer = setInterval(function() {
            seconds--;
            if (seconds <= 0) {
                finishCountdown();
            } else {
                updateCountdown();
            }
        }, 1000);
    }
    secondPassed(); // Call the function to start the countdown
</script>";
              }



              //
              echo '<b > <span style="color:red"><br>Question : &nbsp; ' . $sn . '</span>' . '&nbsp;<br />' . "<span id='ques'>" . $qns . "</span>" . '</b><br /><br />';
            }
            $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
            echo '<form action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal">
<br />';

            while ($row = mysqli_fetch_array($q)) {
              $option = $row['option'];
              $optionid = $row['optionid'];
              echo '<input type="radio" name="ans" value="' . $optionid . '">' . "  &nbsp;&nbsp;&nbsp;&nbsp;" . $option . '<br /><br />';
            }
            echo '<br /><button type="submit" class="btn btn-success">&nbsp;Next ></button></form></div>';
            echo "</div>";
            //header("location:dash.php?q=4&step=2&eid=$id&n=$total");
          }
          //result display
          if ($_GET['q'] == 'result' && $_GET['eid']) {
            $eid = $_GET['eid'];
            $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ") or die('Error157');
            echo  '<div class="panel" id="res_quiz">
<center><h1 class="title" style="color:#FF4500">RESULT</h1><center>
<br /><table class="table title1" style="font-size:20px;font-weight:1000;">';

            while ($row = mysqli_fetch_array($q)) {
              $s = $row['score'];
              $w = $row['wrong'];
              $r = $row['sahi'];
              $qa = $row['level'];
              echo '<tr style="color:#FF6347"><td>Total Questions</td><td>' . $qa . '</td></tr>
      <tr style="color:#2bff00"><td>right Answer&nbsp;<i class="fas fa-calendar-check" style="color:#2bff00"></i></td><td>' . $r . '</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<i class="fa-solid fa-calendar-xmark" style="color:#ff0000"></i></td><td>' . $w . '</td></tr>
	  <tr style="color:#FF6347"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>' . $s . '</td></tr>;
    <tr style="color:#FF6347"><td>NOTE&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>' . $r . '/' . $qa . '</td></tr>';
            }
            /*
$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
*/
            echo '</table></div>';
          }

          ?>
          <!--quiz end-->
          <?php
          //history start
          if ($_GET['q'] == 2) {
            $q = mysqli_query($con, "SELECT * FROM history WHERE email='$email' ORDER BY date DESC ") or die('Error197');
            echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:black;background-color:#20B2AA;"><td><b>N°</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
            $c = 0;
            while ($row = mysqli_fetch_array($q)) {
              $eid = $row['eid'];
              $s = $row['score'];
              $w = $row['wrong'];
              $r = $row['sahi'];
              $qa = $row['level'];
              $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE  eid='$eid' ") or die('Error208');
              while ($row = mysqli_fetch_array($q23)) {
                $title = $row['title'];
              }
              $c++;
              echo '<tr><td style="color:#7CFC00">' . $c . '</td><td style="color:#20B2AA;">' . $title . '</td><td style="color:#20B2AA;">' . $qa . '</td><td style="color:#20B2AA;">' . $r . '</td><td style="color:#20B2AA;">' . $w . '</td><td style="color:#20B2AA;">' . $s . '</td></tr>';
            }
            echo '</table></div>';
          }

          //ranking start
          if ($_GET['q'] == 3) {

            $q = mysqli_query($con, "SELECT  *  FROM `rank` r,`user` u WHERE r.email=u.email ORDER BY score DESC") or die('Error223');
            echo  '<div class="panel title"><div class="table-responsive">
  <table class="table table-striped title1" >
  <tr style="color:black;background-color:#20B2AA"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
            $c = 1;
            while ($row = mysqli_fetch_array($q)) {
              $name = $row['name'];
              $gender = $row['gender'];
              $college = $row['college'];
              $s = $row['score'];

              echo '<tr><td style="color:#7CFC00"><b>' . $c . '</b></td ><td style="color:#7CFC00">' . $name . '</td><td style="color:#7CFC00">' . $gender . '</td><td style="color:#7CFC00">' . $college . '</td><td style="color:#7CFC00">' . $s . '</td><td>';
              $c++;
            }
            echo '</table></div></div>';
          }

          if ($_GET['q'] == 4) {

            $q = mysqli_query($con, "SELECT * FROM `user` WHERE `name`='$name'; ") or die('Error157');
            while ($row = mysqli_fetch_array($q)) {
              $name_new = $row['name'];
              $gender_new = $row['gender'];
              $colleger_new = $row['college'];
              $mob_new = $row['mob'];
              $password_new = $row['password'];
              $image = $row['img'];
            }



            echo '<div id="form_modiy" >';
            echo '<form class=""  method="post" action="" enctype="multipart/form-data">';
            echo '

  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name_new" placeholder="Enter your name" class="form-control input-md" type="text" value="' . $name_new . '" >
    
  </div>




  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
  <input id="gender" name="gender_new" placeholder="Enter your gender" class="form-control input-md" type="text" value="' . $gender_new . '" >
  </div>




  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college_new" placeholder="Enter your college name" class="form-control input-md" type="text" value="' . $colleger_new . '">
    
  </div>





  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob_new" placeholder="Enter your mobile number" class="form-control input-md" type="number" value="' . $mob_new . '">
    
  </div>





  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password_new" placeholder="Enter your password" class="form-control input-md" type="password" value="' . $password_new . '">
    <br>
  </div>
  <label class="col-md-12 control-label" for="" style="color: white;"> Modifier l\'image de Profile</label>
  <div class="col-md-12">
    <input id="img" name="fimg"  class="form-control input-md" type="file"" value="' . $image . '"> 
    <br>
  </div>
  <div class="col-md-12"> 
  <input id="password" type="submit" name="sb_up" class="btn_modify" style="background-color: #20B2AA; border-radius: 10px !important;border: 0.2px;margin:auto;margin-left:6cm;width:6cm;height:1cm;">
 
</div>

';
            //&n_name='.$name_new.'&n_ganter='.$gender_new.'&&n_collage='.$colleger_new.'&&n_mod=
            echo '</form>';
            echo '</div>';
          }
          if (isset($_POST['sb_up'])) {



            $name_n = $_POST['name_new'];
            $gender_n = $_POST['gender_new'];
            $colleger_n = $_POST['college_new'];
            $mob_n = $_POST['mob_new'];
            $password_n = md5($_POST['password_new']);

            $namefil = $_FILES['fimg']['name'];
            $tmp_name = $_FILES['fimg']['tmp_name'];

            $arrynamefil = explode(".", $namefil);
            $end = end($arrynamefil);
            if ($end = 'png' || $end = 'jpg' || $end = 'jpeg') {
              move_uploaded_file($tmp_name, "image/" . $namefil);
              $img_new = "image/" . $namefil;

              $q = mysqli_query($con, "UPDATE `user` SET `name`='$name_n',`gender`='$gender_n',`college`='$colleger_n',`mob`='$mob_n',`password`='$password_n',`img`='$img_new' WHERE email= '$email'");
              echo '<script>alert("The modification was completed successfully");</script>';
            }
          }





          ?>



        </div>
      </div>
    </div>
  </div>

  <!--Footer start-->
  <div class="row footer" style="background-color: #e5eaf5; color: black; font-family: 'Noto Serif', serif !important; font-weight: bolder;  ">
    <br>
    <p>Created by Career ABDELHAKIM-AMINE. copyright ©2023</p>
  </div><!-- /.modal -->
  <!--footer end-->


</body>

</html>