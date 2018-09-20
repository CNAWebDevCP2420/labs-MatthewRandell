<!Doctype html> 
<html> 
<head> 
<title>Interest Array</title> 
</head> 
<body> 
<?php 
 
$InterestRate1 = 0.0725; 
$InterestRate2 = 0.0750; 
$InterestRate3 = 0.0775; 
$InterestRate4 = 0.0800; 
$InterestRate5 = 0.0825; 
$InterestRate6 = 0.0850; 
$InterestRate7 = 0.0875; 
 
$ratesArray = array(0.0725, 0.0750, 0.0775, 0.0800, 0.0800, 0.0825, 0.0850, 0.0875); 
for ($i = 0; $i < 7; $i++) 
printf("Interest Rate %3d = %8.4lf<br>\n", $i + 1, $ratesArray[$i]); 
?> 
</body> 
</html>