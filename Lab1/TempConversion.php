<!Doctype html> 
<html> 
<head> 
<title>Interest Array</title> 
</head> 
<body>  
    <?php
    $Fahren = 0;
    while ($Fahren <= 100) {
        $Cel = 5/9*($Fahren-32);
        print "$Fahren Fahrenheit equals ".round($Cel, 2). " Celsius <br>";
        $Fahren += 1;
    }
    ?>
</body> 
</html>