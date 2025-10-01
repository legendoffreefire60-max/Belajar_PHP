<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
$a= $angka1;
$b= $angka2;
$hasil= $a*$b;
return $hasil;
}
//pemanggilan fungsi
$hasil=perkalian(4,5);
echo "Perkalian 4 x 25 adalah 100";
echo "<br />";
echo "Perkalian 80 x 2 adalah ".perkalian(80,2);
?>