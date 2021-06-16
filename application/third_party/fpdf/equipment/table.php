<?php
namespace furniture;
class Table{
    private $supplier;
    private $cost;
    function __construct($supplier, $cost)
    {
        $this->supplier= $supplier;
        $this->cost = $cost;
    }
    public function buy(){
        return "Hello".$this->supplier." we have successfully paid ".$this->cost." to your account";
    }
}

?>