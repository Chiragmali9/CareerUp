<?php
/*
This file contains database configuration 
assuming you are running mysql using user "root" 
and password ""  
*/

define('DB_SERVER','sql307.epizy.com');
define('DB_USERNAME','epiz_27452100');
define('DB_PASSWORD','obuuNzQpsZBo');
define('DB_NAME','epiz_27452100_login');

//Try connecting to the database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//Check the connection 
if($conn == false){
    dir('Error : Cannot connect');
}





?>