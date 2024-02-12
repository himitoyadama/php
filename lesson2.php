<? php
//Syntax error: unexpected token '$a' PHP(PHP2014)
//(local variable) $a
$a = array("sato", "suzuki", "takahashi" );

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";

<?php
//配列の要素数=array(3)
$a = array(3);
$a[0] = "sato";
$a[1] = "suzuki";
$a[2] = "taahashi";

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a [2])."\n";

//terminal
C:\xampp\htdocs\lesson> php lesson2.php
sato
suzuki
taahashi

  
