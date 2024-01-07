<?php

function random_fruit() {
   $fruits = ['りんご', 'メロン', 'バナナ'];
   return $fruits[array_rand($fruits)];
}

echo random_fruit();


?>
