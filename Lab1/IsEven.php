<!Doctype html> 
<html> 
<head> 
<title>Interest Array</title> 
</head> 
<body> 
<?php 

$Input = "7.1";
if (is_numeric($Input)){
    $Result = "";
    if( $Input & 1 ){
        $Result = "The number (" . round($Input) . ") is numeric and odd";
    }else{
        $Result = "The number (" . round($Input) . ") is numeric and even!";
    }
}else{
    $Result = "($Input) is not numeric!";
}
echo $Result;
?>
</body> 
</html>