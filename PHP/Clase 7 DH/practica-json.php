<?php
$a = array('a'=> 1, 'b'=> 2, 'c'=> 'YO <3 JSON');
var_dump($a);

$b = json_encode($a);

echo $b;

echo "<br>";
$b_new = json_decode($b, true);
var_dump($b_new);
echo "<br>";
echo $b_new['c'].'|'.$b_new['a'].'|'.$b_new['b'].'|';


?>