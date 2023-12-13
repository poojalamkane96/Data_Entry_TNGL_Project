<?php

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","tngldb");

//create connection
$connection=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$connection){
    die("connection failed");
}
else
{
    
}

?>