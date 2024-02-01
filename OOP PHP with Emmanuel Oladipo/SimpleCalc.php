<?php

// this class performs simple calculations on numbers
class SimpleCalc {

    // simple class, public attributes, no properties
    public $num1;
    public $num2;

    // how a SimpleCalc class object is instantiated, pass 2 numbers
    function __construct($num1, $num2) {
        // set the attributes right away
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // add up the 2 numbers, we have already set numbers hence the lack of parameters
    function get_total() {
        // return the total
        return $this->num1 + $this->num2;
    }
}

// create a SimpleCalc
$c1 = new SimpleCalc(5, 6);

// print a sentence saying the 2 numbers and the total of this Calc
echo "The answer of $c1->num1 + $c1->num2 is " . $c1->get_total();