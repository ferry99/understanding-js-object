<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 
	
	class test{

		function __invoke($a){
			echo $a;
			//echo 'cant do that';
		}

		function __call(){
			echo 'function dnt have';
		}

	}

	$b = new test();
	$b->tset();
	$b('asd');
?>