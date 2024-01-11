＃08:値段計算をしてみよう

<?php
// 値段計算をしてみよう
// 代数演算子 + - * / %
// $apple　リンゴの値段
// $apple_num　リンゴを買う数
$apple = 350;
$apple_num = 5;

//改行 \n
echo "リンゴの値段:".$apple."円\n";
echo "リンゴを買う数:".$apple_num."個";
?>
リンゴの値段:350円
リンゴを買う数:5個

<?php
// 値段計算をしてみよう
// 代数演算子 + - * / %
// $apple　リンゴの値段
// $apple_num　リンゴを買う数
$apple = 350;
$apple_num = rand(1,10); //rand関数

//改行 \n
echo "リンゴの値段:".$apple."円\n";
echo "リンゴを買う数:".$apple_num."個\n";
$total = $apple * $apple_num;
echo "合計".$total."円";  //例：8個なら合計2800円
?>
