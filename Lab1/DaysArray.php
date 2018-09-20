<!Doctype html> 
<html> 
<head> 
<title>Interest Array</title> 
</head> 
<body> 
<?php 
    $days = array( 
        "Sunday", 
        "Monday", 
        "Tuesday", 
        "Wednesday", 
        "Thursday", 
        "Friday", 
        "Saturday" 
    ); 
?> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> 
        <title>Days Of The Week</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    </head> 
    <body> 
       
        <?php  
echo "The days of the week in English are:</br>";         
            foreach ($days as $day) 
                echo "<p>$day</p>"; 
     $FrenchDays=array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"); 
     echo "The days of the week in French are:</br>"; 
     foreach ($FrenchDays as $day) 
              echo "<p>$day</p>";      
        ?> 
</body> 
</html>