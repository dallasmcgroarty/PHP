<?php 
    echo "functions and conditionals! <br>";

    // create a function
    function greet() {
        echo 'Hello There! <br>';
    }

    // call the function
    greet();

    // function with parameters and a default parameter
    function greetName($greeting, $name="Nobody") {
        // strtoupper to make whole string uppercase

        echo strtoupper($greeting . ' ' . $name . '<br>');
    }

    // calling function
    greetName('Welcome','John');
    greetName('Welcome');

    /**
     * Conditionals
     */

    $num = 10;

    if($num == 10) {
        echo 'Number is 10';
    } else {
        echo 'Number is not 10';
    }

    echo '<br>';

    $num = 11;

    if($num != 10) {
        echo 'Number is not 10';
    }

    echo '<br>';

    if($num > 10) {
        echo 'Number is greater than 10';
    }

    echo '<br>';

    $num = 12;

    if($num == 11) {
        echo 'Num is 11';
    } elseif($num == 12) {
        echo 'Num is 12';
    } else {
        echo 'dont know num';
    }

    echo '<br>';

    $num1 = 30;
    $num2 = 10;

    if($num1 == 30 || $num2 == 20) {
        echo 'That works';
    } else {
        echo 'That don\'t work';
    }

    echo '<br>';

    if($num1 == 30 && $num2 == 20) {
        echo 'That works too';
    } else {
        echo "that doesn't work";
    }
?>