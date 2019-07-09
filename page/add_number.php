<?php

include "conDB.php";

$user = $_POST['user'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$fav_a = $_POST['fav_1'];
$fav_b = $_POST['fav_2'];
$province = $_POST['province'];

$fav = $fav_a . "," . $fav_b;

$strSQL = "INSERT INTO tb_member VALUES ('$user','$age','$sex','$fav','$province')";

mysqli_query($link,$strSQL) or die(mysqli_error($link));

?>