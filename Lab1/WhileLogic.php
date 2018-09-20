<!Doctype html> 
<html> 
<head> 
<title>Interest Array</title> 
</head> 
<body> 
<?php
$Count = 0;
while ($Count <= 100) {
 $Numbers[$Count] = $Count;
 ++$Count;
}
foreach ($Numbers as $CurNum)
 echo "<p>$CurNum</p>";
?>
</body> 
</html>