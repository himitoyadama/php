//05:変数を使えるようになろう
//echoするときは=は書かない❤
<?php
// Here your code !
$変数とは = "データの入れ物である。";
$変数とは = "同じ変数名は上書きされる。";
echo $変数とは;
?>


//変数($)をつなげて出力
<?php
$output1 = "Hello";
$output2 = "Fuck!";
echo $output1.$output2;
?>

//半角スペースを入れる
<?php
$output1 = "Hello";
$output2 = "Fuck!";
echo $output1." ".$output2;
?>

＃06:サイコロを作る
//rand関数
<?php
echo rand(1,6);
?>
<?php
// Here your code !
$rand = rand(1,6);
echo "saikoro_no_atai_ha".$rand."desu";
?>

＃07:演算子で計算してみよう
<?php
// 演算子
// 代入演算子
$a = "text";
$b = 1;

// 代数演算子 + - * / %
echo 6 * 3;
?>

<?php
// 演算子
// 代入演算子
$a = "banana";
$b = 5;


// 代数演算子　+-*/%
//echo 1 + 2 * 3;

//単項演算子 ++ --
$b++; //6
$b--; //4
echo $b; 
?>


<?php
// 演算子
// 代入演算子
$a = "banana";
$b = 5;

// 代数演算子
//文字列の代入と代数の演算子をつなぐのは+ではなく.である。
echo $a . 3;
?>

<?php
$x = 50; // この行は触らない
$y = 23; // この行は触らない

$x++;
$y--;
echo "xの値は".$x."です\n"; // この行は触らない
echo "yの値は".$y."です\n"; // この行は触らない
echo $x * $y;
?>
xの値は51です
yの値は22です
1122


