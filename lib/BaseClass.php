<?php

abstract class BaseClass
{
    protected $num1 = 0;
    protected $num2 = 0;
    protected $result = 0;
    
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    
    
    public abstract function doAction();
}
