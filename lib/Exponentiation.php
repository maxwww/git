<?php

class Exponentiation extends BaseClass
{
    public function doAction() {
        $this->result = pow($this->num1, $this->num2);
        return $this->result;
    }
}