<?php

    function connection(){
        //database parameters
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $dbname = "usa_it_abroad";


        //create a new sqli object with databse parameters
        $conn = new mysqli($server_name ,$username, $password, $dbname);

        if($conn -> connect_error){
            die("Connection Failed:. $conn -> connect_error");
            //terminate programs while showing  error prompt

        }else{
            //else get the connection object
            return $conn;
        }
   
    }

?>