<?php

/*
$number1 = 20;
$number2 = 12;


$number3 = $number1 + $number2;

echo $number3;

*/


//database conetion 
//developer tatiana lopez
//data quemada


*/
    $host = "localhost";  //127.0.0.1
    $username = "postgres"; 
    $password = "Unicesmag";
    $dbname = "beta";
    $port = "5432";
    
    $data_connection = "
    host=$host
    port=$port
    dbname=$dbname
    user=$username
    password=$password
    ";
    
    $conn = pg_connect($data_connection);

    if(!$conn){
        die("Connection failed: ". pg_last_error());
    }else{
        echo "Connected successfully";
    }

    //pg_close($conn);

?>




