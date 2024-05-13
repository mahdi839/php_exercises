
// PROBLEM DESCRIPTION --------------------------------


//  Write a PHP script using nested for loop that creates a chess board as shown below.
// Use table width="270px" and take 30px as cell height and width.



// -------------------


// SOLUTION --------------------------------

<!DOCTYPE html>
<html> 
<head> 
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body> 
<h3>Chess Board using Nested For Loop</h3>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 270px wide (8 columns x 60px) -->
<?php
// Outer loop for rows
for ($i=1; $i<=8;$i++){
  echo "<tr>";
  for ($m=1;$m<=8;$m++){
    $total = $i + $m;
    if($total%2 ==0){
      echo "<td width=30px; height=30px; bgcolor=#fffff></td>";
    }else{
      echo "<td  width=30px; height=30px; bgcolor=#0000></td>";
    }
  }
  echo "</tr>";
}
?>
</table>
</body>
</html>
