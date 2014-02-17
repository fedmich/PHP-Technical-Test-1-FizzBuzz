<?php

/*
 * @author: federico
 * @version: 0.1
 */

function FizzBuzz($from, $to) {
	$ret = array();
	foreach (range($from, $to) as $i) {
		$ret[] = $i;
	}
	return $ret;
}