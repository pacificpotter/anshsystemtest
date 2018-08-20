<?php
	class Calculator{
        
        public function sum($arguments){
            $sum = 0;
            if(empty($arguments)){
                $sum = 0;
            }
            else{
                $arguments = explode(',', $arguments[0]);
                if(!empty($arguments[0])){
                    $sum += $arguments[0]; 				
                }
                if(!empty($arguments[1])){
                    $sum += $arguments[1]; 				
                }
            }
            echo $sum;
        }
    }
?>