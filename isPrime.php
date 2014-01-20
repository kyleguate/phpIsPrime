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
	
	$i = 3;
	$currentQuotient = round($number/$i);
	
	for ($i = 3; $i <= $currentQuotient; $i+=2){
		
		if ($number % $i === 0){ 
			return false; 
		}
		$currentQuotient = round($number/$i);
	}
	return true;
}

/* Testing */
//for ($i = 1; $i <= 100; $i++){
//	echo $i . ': ' . isPrime($i) . '<br />';
//} 
