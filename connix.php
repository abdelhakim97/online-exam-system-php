<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=project",'root',"123456789");
  
   
}catch(PDOException $e){
    echo "ERROR".$e->getMessage();
}


/*

include 'connix.php';
$stmt=$conn->prepare("SELECT * FROM rank  ORDER BY score DESC");
$stmt->execute();

$pers = $stmt->fetchAll(PDO::FETCH_OBJ);
$c=0;
foreach ($pers  as $value) {
   $s= $value->score;
   $e=$value->email;
   $stmt2=$conn->prepare("SELECT * FROM user WHERE email='$e'");
   $stmt2->execute();
   $pers2 = $stmt->fetchAll(PDO::FETCH_OBJ);
   foreach ($pers2  as $value){
    $name=$value->name;
    $gender=$value->gender;
    $college=$value->college;
   }
   $c++;
   echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';


}


*/









?>