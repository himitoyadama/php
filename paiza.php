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
