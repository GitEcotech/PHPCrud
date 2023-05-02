<?php

class calculation

{
    public $a,$b,$c;

    function sum()
    {
        $this->c= $this->a+ $this->b;
        return $this->c;
    }
    
    function sub()
    {
        $this->c=$this->a+$this->b;
        return $this->c;
    }
}

$c1 = new calculation();

$c1->a = 20;

$c2->b = 10;




$c2 = new calculation();

$c2->a=30;

$c2->b=40;




echo "the addition ".$c1->sum();
echo "<br>";
echo "the addition ".$c2->sum();

echo "<br>";

echo "hiiiiiii";

?>