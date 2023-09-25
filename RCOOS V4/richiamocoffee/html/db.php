<?php
$serverName = "localhost" ;
$userName = "root" ;
$pwd = "" ;
$dbName = "richiamocoffee" ;

// crete conn

$con = mysqli_connect($serverName, $userName, $pwd, $dbName) ;

if(mysqli_connect_error()){
    echo "failed" ;
    exit();
}
//echo "Connection successful!" ;

?>
