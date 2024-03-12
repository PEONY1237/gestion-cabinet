<?php
    function getConnection(){
        $host='localhost';
        $bd='cabinet';
        $user='root';
        $port=3306;
        $pass='';
        $dsn="mysql:host=$host;dbname=$bd;port=$port";

        return new PDO($dsn , $user , $pass);
    }

?>