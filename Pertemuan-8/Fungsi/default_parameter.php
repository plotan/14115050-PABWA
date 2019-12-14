<?php
function bar($color = 'black')
{
    echo '<font color= ' . $color . '>ini warna ' . $color . '</font>';
}
bar();
bar('red');
bar('blue');
bar('orange');
bar('green');
