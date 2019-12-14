<?php 
$nama = array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
sort($nama);

$NamaLength = count($nama);
for($i =0; $i < $NamaLength; $i++){
    echo $nama[$i];
    echo "<br>";
}
?>