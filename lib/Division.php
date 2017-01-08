<?php

class Division extends BaseClass
{    
    public function doAction()
    {
	if($this->num2 > 0){
        	$this->result = $this->num1 / $this->num2;
        	return $this->result;
	}
	else
		return 0;
    }    
}
