<?php
$serverName = "localhost" ;
$userName = "u840783057_test" ;
$pwd = "Richiamocoffee2023" ;
$dbName = "u840783057_richiamocoffee" ;

// crete conn

$con = mysqli_connect($serverName, $userName, $pwd, $dbName) ;

if(mysqli_connect_error()){
    echo "failed" ;
    exit();
}
//echo "Connection successful!" ;

?>
