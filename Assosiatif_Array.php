<?php
/* First method to associate create array. */
$salaries = array(
"The Sigit" => 2000, 
"The Jansen" => 1000,
"LAIR" => 500
);
echo "Salary of  The Sigit is ". $salaries['The Sigit'] . "<br />";
echo "Salary of The Jansen is ". $salaries['The Jansen']. "<br />";
echo "Salary of LAIR is ". $salaries['LAIR']. "<br />";
/* Second method to create array. */
$salaries['The Sigit'] = "high";
$salaries['The Jansen'] = "medium";
$salaries['LAIR'] = "low";
echo "Salary of The Sigit is ". $salaries['The Sigit'] . "<br />";
echo "Salary of The Jansen is ". $salaries['The Jansen']. "<br />";
echo "Salary of LAIR is ". $salaries['LAIR']. "<br />";
?>