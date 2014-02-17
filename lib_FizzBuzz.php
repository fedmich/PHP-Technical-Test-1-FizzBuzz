<?php

/*
 * @author: federico
 * @version: 0.2 (Solution 2)
 */

function FizzBuzz($from, $to) {
	$ret = array();

	foreach (range($from, $to) as $i) {
		if ($i % 3 == 0) {
			$fz = 'Fizz';
		} else if ($i % 5 == 0) {
			$fz = 'Buzz';
		} else {
			$fz = $i;
		}

		$last_2 = array_slice($ret, -2); //get last 2 from array
		if (in_array('Buzz', $last_2)) {
			if (in_array('Fizz', $last_2)) {
				$fz = 'Bazz';
			}
		}

		$ret[] = $fz;
	}
	return $ret;
}