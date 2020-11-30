<?php

    $myVar1 = "hello";
    $myVar2 = "world!";

    // concat two string variables
    echo $myVar1 . ' ' . $myVar2 . '<br>';

    // concat strings
    echo $myVar1 . ' world!';

    echo "<br>";

    /**
     *  arrays
    */

    $numbers = array(12,33,45,22,65);
    $numbers2 = [12,33,45,22,65];

    // print_r to print arrays
    print_r($numbers);

    echo "<br>";

    // indexing array
    echo $numbers[1]; // 33

    echo "<br>";

    /*
        associative arrays
    */

    $ages = array(
        "John" => 35,
        "Mary" => 27,
        "Bob" => 25
    );

    // returns mary's age
    echo $ages['Mary']; // 27

    echo "<br>";

    // return count of items in array
    echo count($ages); // 3

    // removes last element in array
    array_pop($ages);

    echo "<br>";
    // print array to see last element removed
    print_r($ages);

    echo "<br>";
    // removes first element in array (at index 0)
    array_shift($ages);

    print_r($ages);

    echo "<br>";

    /**
     * Loops
     */

    // for loop
    for ($i = 0; $i < 5; $i++) {
        if ($i < 4) {
            echo $i . ', ';
        } else {
            echo $i;
        }
    }

    echo "<br>";

    // while loop
    $i = 0;
    while($i <= 10) {
        echo 'Number ' . $i . '<br />';
        $i++;
    }
     
    echo "<br>";

    // for each loop
    $numbers = [12,54,22,35,66];

    foreach($numbers as $number) {
        echo 'This is number ' . $number . '<br>';
    }

    echo "<br>";

    // for each loop with associative array
    $ages = array(
        "John" => 35,
        "Mary" => 27,
        "Bob" => 25
    );

    // can extract key and value
    foreach($ages as $name => $age) {
        echo $name . ' is ' . $age . ' years old <br>';
    }
?>