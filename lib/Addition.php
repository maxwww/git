<?php

class Addition extends BaseClass
{    
    public function doAction()
    {
        $this->result = $this->num1 + $this->num2;
        return $this->result;
    }    
}
