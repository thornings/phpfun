<?php

    $test = Array("thorning","Thuesen", "Simonsen");

    echo $test;
    echo "<pre>";
    var_dump($test);

    echo "<br />";
    echo "<br />";

    print_r($test);

    echo "<br />";

    print(Count($test));

    echo "<br />";

    $associative = Array("thorning"=>"1","Thuesen"=>"22", "Simonsen"=>"33");
    foreach ($associative as $key => $name) 
    {
        echo "key " . $key . " - " . $name . "\n";
    }
    echo "<pre>";

    
?>