<!DOCTYPE html>
<html>
   
   <head>
      <title>Writing PHP Function with Parameters</title>
   </head>
   <body>
      <table>
         <tr>
            <td>
</td>
</tr>
</table>
   
      <?php
         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
         }
         $x = 10;
         $y = 20;
         addFunction($x, $y);
      ?>
      
   </body>
</html>