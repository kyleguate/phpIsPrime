<?php

/**
 * Determines if a number is prime
 * 
 * @param int - whole number
 * @return boolean - true if is prime, false if not 
 * @author: kyleguate@gmail
 */
function isPrime($number){
	
	// Takes care of 2
	if ($number === 2){
		return true;
	}
	
	// Removes all evens
	if ($number % 2 === 0){
		return false;
	}
	
	// Alternative to using sqrt
	for ($i = 3; $i <= round($number/$i); $i+=2){
		if ($number % $i === 0){ 
			return false; 
		}
	}
	return true;
}

/* Testing */
//for ($i = 1; $i <= 100; $i++){
//	echo $i . ': ' . isPrime($i) . '<br />';
//} 
