<?php
    function connect(){
        $dbHost= "localhost";
        $user= "root";
        $pass= "";
        $dbname="tsm";

        $conn= new mysqli($dbHost, $user, $pass, $dbname);
        //echo "connected";
        return $conn;
    }

    function closeConnect($cn){
        $cn->close();
    }
?>
