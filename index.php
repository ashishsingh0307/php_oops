<?php

class calculator{
    public $a, $b, $c; // public is a access modifier

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculator();

$c1->a = 20;
$c1->b = 10;

echo "This is Addition value : " . $c1->sum();
echo "<br>";
echo "This is Subtraction Value : " . $c1->sub();

echo "<br>";

$c2 = new calculator();

$c2->a = 100;
$c2->b = 50;

echo "This is Addition value : " . $c2->sum();
echo "<br>";
echo "This is Subtraction Value : " . $c2->sub();