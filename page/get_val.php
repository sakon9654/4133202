<?php

    $name = "Sakon";

    echo "Hello World !!!";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo sum(5,5);
    function sum($A,$B){
        return $A * $B;
    }

    $user = $_POST['user'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $fav_a = $_POST['fav_1'];
    $fav_b = $_POST['fav_2'];
    $province = $_POST['province'];

    echo "<br>";
    echo $province;
   


?>