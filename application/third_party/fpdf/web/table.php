<?php
namespace web;
class Table{
    private $rows;
    private $cols;
    function __construct($rows, $cols)
    {
        $this->rows= $rows;
        $this->cols = $cols;
    }
    public function calculate(){
        return "You've created ".$this->rows * $this->cols." cells";
    }
}
?>