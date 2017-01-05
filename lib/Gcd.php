<?php

class Gcd extends BaseClass
{
    public function doAction() {
        $this->num1 = abs($this->num1);
        $this->num2 = abs($this->num2);
        
        $max = $this->num1 > $this->num2 ? $this->num1 : $this->num2;
        $top = $max/2;
        $this->result = 0;
        
        if($this->num1 == 0){
            $this->result = $this->num2;
        } elseif ($this->num2 == 0) {
        $this->result = $this->num1;
    }else {
                    for ($i = 1; $i <= $top; $i++)
        {
            if($this->num1 % $i == 0 && $this->num2 % $i == 0)
            {
                $this->result = $i;
            }
        }
        }
        

        return $this->result;
        
    }
}
