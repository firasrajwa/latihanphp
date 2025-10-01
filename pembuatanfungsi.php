<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
$a= $angka1;
$b= $angka2;
$hasil= $a*$b;
return $hasil;
}
$hasil=perkalian(7,5);
echo "Perkalian 7 x 5 adalah $hasil";
echo "<br />";
echo "Perkalian 8 x 2 adalah ".perkalian(8,2);
?>