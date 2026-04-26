<?php
$a=10; //a = 10     int
$b="10"; // b = "10" string
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não Idêntico = ".($a!==$b)."<br>";
$c=20;
$d=40;
$e=50;
$f=($c>$d);
var_dump($f);
echo "<hr>";
$g=($c<$e)&&!($e>1000);
var_dump($g);
echo "<hr>";
$g=($c<$e) || ($e>1000);
var_dump($g);
echo "<hr>";
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "pdp" : "noop";
$e=($a>=$c) ? "ok" : "lgc nao";
echo "d = $d<br>e = $e";


?>