<?php

class Lcm extends BaseClass
{
    public function doAction() {
        if($this->num1 < 0 || $this->num2 < 0) {
            $this->result = "Incorrect value";
        } elseif ($this->num1 == 0 || $this->num2 == 0) {
            $this->result = 0;
        } else {
            $this->num1 = (int)$this->num1;
            $this->num2 = (int)$this->num2;
            $max = $this->num1 > $this->num2 ? $this->num1 : $this->num2;
            while (true){
                if ($max % $this->num1 == 0 && $max % $this->num2 == 0) {
                    $this->result = $max;
                    break;
                }
                $max++;
            }
        }
        
        return $this->result;
    }
}