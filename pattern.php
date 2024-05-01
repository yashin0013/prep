<?php

function numpat($n)
{
	$num = 1;
	for ($i = 0; $i < $n; $i++) {

		for ($j = 0; $j <= $i; $j++) {
			echo $num . " ";
		}
		$num = $num + 1;
		echo "<br>";
	}
}


$n = 5;
numpat($n);



function pypart2($n)
{
	for ($i = 1; $i <= $n; $i++) {
		for ($j = 1; $j <= $n; $j++) {
			if ($j <= ($n - $i)) {
				echo " " . " ";
			} else {
				echo "* ";
			}
		}
		echo "<br>";
	}
}

// Driver Code
$n = 5;
pypart2($n);



function triangle($n)
{

	$k = 2 * $n - 2;

	for ($i = 0; $i < $n; $i++) {

		for ($j = 0; $j < $k; $j++)
			echo " ";

		$k = $k - 1;

		for ($j = 0; $j <= $i; $j++) {

			echo "* ";
		}


		echo "<br>";
	}
}

// Driver Code
$n = 5;
triangle($n);
