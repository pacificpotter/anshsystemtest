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
                $values = explode(',', $arguments[0]);
                if(!empty($values)){
                    foreach ($values as $value) {
                        $this->showError($value);
                        if($this->findSpecialChars($value)){
                            $sum = $this->removeSlashN($value);
                        }
                        else
                            $sum += $value;   
                    }				
                }
            }
            echo $sum;
        }
        
        public function findSpecialChars($num){
            if(strpos($num, '\n')){
                return true;
            }
            
        }
        
        public function removeSlashN($numbers){
            $numbers = explode('\n', $numbers);
            $result =0;
            foreach($numbers as $number){
                $result += $number;
            }
            return $result;
        }
        
        public function showError($number){
            if($number < 0){
                echo "Negative numbers not allowed";
            }
        }
        
    }
?>