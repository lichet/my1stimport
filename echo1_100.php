<?php
$start_number = 1;
echo "start".PHP_EOL;

// Write Your Code This Area.
for ($start_number = 1; $start_number <= 100; $start_number++) {
	if ($start_number%3 == 0 && $start_number%5 == 0) {
		echo "FizzBuzz".PHP_EOL;
	} elseif ($start_number%3 == 0) {
		echo "Fizz".PHP_EOL;
	} elseif ($start_number%5 == 0) {
		echo "Buzz".PHP_EOL;
	}
	echo $start_number.PHP_EOL;
}

_1to100($start_number);

echo "end".PHP_EOL;
?>
<?php
function _1to100 ($start_number) {
	if ($start_number <= 100) {
		echo $start_number.PHP_EOL;
		_1to100(++$start_number);
	}
}
?>