<?php
$a = 100;
$a = $a + 8;
$a = $a - 13;
echo "\$a = $a";
echo "<br />";
// sama hasilnya dengan kode berikut:
$b = 100;
$b += 8; // sama dengan $b = $b + 8;
$b -= 13;// sama dengan $b = $b - 13;
echo "\$b = $b";
?>