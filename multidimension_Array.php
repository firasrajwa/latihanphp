<?php
$marks = array( "The Rrag" => array ( "Perform" => 35, "Progression" => 30, "chemistry" => 39
),
"Reality Club" => array ( "Perform" => 30, "Progression" => 32, "chemistry" => 29
),
"Ismam Saurus" => array ( "Perform" => 31, "Progression" => 22, "chemistry" => 39
)
);
/* Accessing multi-dimensional array values */
echo "Marks for The Rrag in Perform : " ;
echo $marks['The Rrag']['Perform'] . "<br />";
echo "Marks for Reality Club in Progression : ";
echo $marks['Reality Club']['Progression'] . "<br />";
echo "Marks for Ismam Saurus in chemistry : " ;
echo $marks['Ismam Saurus']['chemistry'] . "<br />";
?>