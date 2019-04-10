<?php
$db_name = "miniproweb";   //ชื่อฐานข้อมูล
$db_host = "localhost"; //ip
$db_user = "root";      //user
$db_pass = "";          //password

try {                               
    $db_con = new PDO( "mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass ); //syntext connext database
    $db_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $db_con->exec( "set names utf8" );
    //echo "ติดต่อฐานข้อมูลสำเร็จ";
}catch(PDOException $e){            //จับ error
    echo $e->getMessage();          //show error
}

?>