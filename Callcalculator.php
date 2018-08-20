<?php

	require('Calculator.php');
	$function_name = '';
	$arguments =[];
	
	foreach ($argv as $index => $arg) {
		if($index == 1){
			$function_name = $arg;		
		}
		if($index > 1){
			$arguments[] = $arg;
		}
	}

	if($function_name == ''){
		echo "Please write valid function name";
		exit;
	}

	$cal = new Calculator;
	$cal->$function_name($arguments);
?>