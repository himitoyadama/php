<?php
$a = 10;
$b = 1;
$bool01 = ($a > $b);

echo $bool01. "\n";
echo gettype($bool01); 
//terminal
 C:\xampp\htdocs\lesson> php lesson.php
1
boolean
//$bool01 = ($a < $b);はbooleanのみ表示  
   
<?php
$string_a = "hello fuck!";

echo $string_a. "\n";
echo gettype($string_a);

//terminal
C:\xampp\htdocs\lesson> php lesson.php
hello fuck!
string


<?php
$fuck1 = 123;
$fuck2 = 1.23;

echo gettype($fuck1) . "\n";
echo gettype($fuck2) . "\n";
var_dump($fuck2);

//terminal
C:\xampp\htdocs\lesson> php lesson.php
integer
double
float(1.23)  

  
