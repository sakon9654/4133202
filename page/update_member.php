<?php 
    require "connect.php";

    $province = $_POST['province'];

    
    $fav = array();

    if(isset($_POST['fav_1'])) array_push($fav, $_POST['fav_1']);
    if(isset($_POST['fav_2'])) array_push($fav, $_POST['fav_2']);

    
    $fav = implode(" , ", $fav);
    
    $result = mysqli_query($con, "SELECT * FROM tb_member WHERE user = '{$_GET['name']}' ");
    $rows = mysqli_fetch_assoc($result);
    
    if(!isset($_POST['sex'])) $sex = $rows['sex'];
    else $sex = $_POST['sex'];
    
    if(!isset($_POST['fav_1']) && !isset($_POST['fav_2'])) $fav = $rows['favorite']; 


    $sql = "UPDATE tb_member 
            SET user= '{$_POST['user']}', age='{$_POST['age']}'
            ,sex='$sex', favorite='$fav', province='$province' WHERE user = '{$_GET['name']}' ";
    
    mysqli_query($con, $sql);

    include "show_member.php";
?>