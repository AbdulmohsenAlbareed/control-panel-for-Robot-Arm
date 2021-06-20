<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         
        <?php
        $connection = new mysqli("127.0.0.1","root","","control_panel_db");
        $stmt=$connection->prepare("select * from motors_degree");
        $stmt->execute();
        
        $result=$stmt->get_result();
        while($row=$result->fetch_assoc()){
            
            echo "Motor Number  ".$row["Motor_Num"].":   ".$row["Motor_Degree"]."<br>";
             
        }
        
        $connection2 = new mysqli("127.0.0.1","root","","control_panel_db");
        $stmt2=$connection->prepare("select * from run");
        $stmt2->execute();
        
         $rs=$stmt2->get_result();
         while($row=$rs->fetch_assoc()){
             
             echo "<br>"."Status: ".$row["status"];
         }
      
        ?>
    </body>
</html>
