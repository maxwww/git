<?php

class Logarifm extends BaseClass
{
    public function doAction() {
        $this->result = log($this->num1, $this->num2);
        return $this->result;
    }
}

