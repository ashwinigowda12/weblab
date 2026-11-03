<?php 
echo "<style>body { background-color: #1e1e24; color: #f0f0f5; font-family: sans-serif; }</style>";
echo "<h1> refresh page </h1>"; 
$file = 'count.txt'; 
$c = file_get_contents($file); 
file_put_contents($file, $c+1); 
echo "the number of user visited :".$c ; 
?>
