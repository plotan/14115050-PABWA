<?php
function tukar(&$a, &$b)
{
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}
$a = 7;
$b = 10;
echo "Nilai sebelum ditukar <br> ";
echo "Nilai a : " . $a . "<br>NIlai b : " . $b;
echo "<br>";
tukar($a, $b);
echo "Nilai sebelum setelah ditukar <br> ";
echo "Nilai a : " . $a . "<br>NIlai b : " . $b;
