<?php 
$rows = 7;
$cols = 6;
 
echo "<table border='1'>"; 
 
for($tr=1;$tr<=$rows;$tr++){ 
      
    echo "<tr>"; 
        for($td=1;$td<=$cols;$td++){ 
               echo "<td>row: ".$tr." column: ".$td."</td>"; 
        } 
    echo "</tr>"; 
} 
 
echo "</table>"; 
?>