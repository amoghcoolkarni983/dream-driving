<?php

function OpenCon(){
$servername = "a535633a17cc";
$username = "root@localhost";
$password = "root";
$database = "id15216675_driving";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
  }

  function CloseCon($conn)
 {
 $conn -> close();
 }
?>
