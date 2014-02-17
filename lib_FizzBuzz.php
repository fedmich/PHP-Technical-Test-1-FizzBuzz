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
		$ret[] = $fz;
	}
	return $ret;
}