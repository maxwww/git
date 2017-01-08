<?php

class Root extends BaseClass
{
    public function doAction() {
        $this->result = pow($this->num1, 1/$this->num2);
        return $this->result;
    }
}
