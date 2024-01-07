<?php
function random_japanese_string($length) {
   // 全角カナの範囲を指定
   $start = 0x30A0; // ゠
   $end = 0x30FF; // ヿ

   $result = '';
   for ($i = 0; $i < $length; $i++) {
       // ランダムな全角カナのコードを生成
       $code = mt_rand($start, $end);
       // 全角カナのコードを文字に変換
       $char = mb_convert_encoding('&#' . intval($code) . ';', 'UTF-8', 'HTML-ENTITIES');
       // 結果に追加
       $result .= $char;
   }

   return $result;
}

echo random_japanese_string(10);


?>
