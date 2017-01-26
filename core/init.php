<?php
//Excute query with secure data

try{
    $db = new PDO('mysql:host=Localhost;dbname=ecommerce', 'root', '');
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }

define('BASEURL', '/ecommerce/');