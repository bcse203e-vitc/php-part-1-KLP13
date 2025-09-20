<?php
$numbers = array(1, 2, 3, 4, 5);

echo "Original array :\n";
echo implode(" ", $numbers) . "\n";
array_splice($numbers, 3, 0, '$');

echo "After inserting '\$' the array is :\n";
echo implode(" ", $numbers);
?>
