<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>

  <meta charset="utf-8">
  <title>Contrl Panel </title>

   <style>
   body {
     background-color:powderblue;
   }
      hr{
        background-color:white;
         height: 3px;
      }

   </style>
</head>

<body >



  <h1>
  Contrl Panel | لوحة التحكم
  </h>
    <hr></hr>
  <h2> motors | محركات</h2>
  <p>motor 1 </p>
    <form action="index.php" method="Post" >
      <input type="range" id="M1" name="rangeInput1" min="0" max="180" step="1" onchange="GetNumberM1(this.value);">
  <label id="la1" name="la1" ></label>

  <script>
  function GetNumberM1(val) {
document.getElementById('la1').innerHTML =val;      }
  </script>

  <p>motor 2 </p>
  <input type="range" name="rangeInput2" min="0" max="180" onchange="GetNumberM2(this.value);">
  <label id="la2" ></label>

  <script>
  function GetNumberM2(val) {
document.getElementById('la2').innerHTML =val;  }
  </script>

  <p>motor 3  </p>
  <input type="range" name="rangeInput3" min="0" max="180" onchange="GetNumberM3(this.value);">
  <label id="la3" ></label>

  <script>
  function GetNumberM3(val) {
document.getElementById('la3').innerHTML =val;  }
  </script>


  <p>motor 4 </p>
  <input type="range" name="rangeInput4" min="0" max="180" onchange="GetNumberM4(this.value);">
  <label id="la4" ></label>

  <script>
  function GetNumberM4(val) {
document.getElementById('la4').innerHTML =val;  }
  </script>

  <p>motor 5 </p>
  <input type="range" name="rangeInput5" min="0" max="180" onchange="GetNumberM5(this.value);">
  <label id="la5" ></label>

  <script>
  function GetNumberM5(val) {
document.getElementById('la5').innerHTML =val;  }
  </script>

  <p>motor 6 </p>
  <input type="range" name="rangeInput6" min="0" max="180" onchange="GetNumberM6(this.value);">
  <label id="la6" ></label>

  <script>
  function GetNumberM6(val) {
  document.getElementById('la6').innerHTML =val;  }
  </script>
  <p></p>
  
   
    
   
 
   <input type="submit" name="BtSave"  value="Save">
  
  
      <?php

$connection = new mysqli("127.0.0.1","root","","control_panel_db");
     

        if(isset($_POST["BtSave"]))
            {
         $Num1= $_POST["rangeInput1"];
         $Num2= $_POST["rangeInput2"];
         $Num3= $_POST["rangeInput3"];
         $Num4= $_POST["rangeInput4"];
         $Num5= $_POST["rangeInput5"];
         $Num6= $_POST["rangeInput6"];
         
         $stmt=$connection->prepare("update motors_degree set Motor_Degree='$Num1' where Motor_Num='1' ");
         $stmt->execute();
         
         $stmt2=$connection->prepare("update motors_degree set Motor_Degree='$Num2' where Motor_Num='2' ");
         $stmt2->execute();
         
         $stmt3=$connection->prepare("update motors_degree set Motor_Degree='$Num3' where Motor_Num='3' ");
         $stmt3->execute();
         
         $stmt4=$connection->prepare("update motors_degree set Motor_Degree='$Num4' where Motor_Num='4' ");
         $stmt4->execute();
         
         $stmt5=$connection->prepare("update motors_degree set Motor_Degree='$Num5' where Motor_Num='5' ");
         $stmt5->execute();
         
         $stmt6=$connection->prepare("update motors_degree set Motor_Degree='$Num6' where Motor_Num='6' ");
         $stmt6->execute();
        
         echo 'Done!';
         }
?>
  <br></br>
  <input type="submit" name="BtRun"  value="run">
     
  <?php
  if(isset($_POST["BtRun"]))
      {
  $conn= new mysqli("127.0.0.1","root","","control_panel_db");
  $run=$conn->prepare("update run set status='on' ");
  $run->execute();
  echo 'Done!';
  }
  ?>
  
   <br></br>
  <input type="submit" name="BtOff"  value="Off">
     
  <?php
  if(isset($_POST["BtOff"]))
      {
  $conn1= new mysqli("127.0.0.1","root","","control_panel_db");
  $off=$conn1->prepare("update run set status='off' ");
  $off->execute();
  echo 'Done!';
  }
  ?>
  
  </form>




</body>

</html>
