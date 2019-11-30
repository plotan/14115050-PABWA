<?php
$nilai_asli = 50;
function palsukanNlai($nilai)
{
    global $nilai_asli;
    $nilai_asli = $nilai;
}
palsukanNlai(96);
echo $nilai_asli;
