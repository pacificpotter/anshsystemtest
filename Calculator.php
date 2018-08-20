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
        
        public function add($arguments){
            $sum =0;
            if(!empty($arguments[0])){
                $params = explode(',', $arguments[0]);
                if(!empty($params)){
                    foreach ($params as $param) {
                            $sum += $param;
                    }				
                }
            }
            echo $sum;
        }
        
    }
?>