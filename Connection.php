<?php 
    $conn = null;
    $uname = 'root';
    $pword = 123;

    try {
        $conn = new PDO('mysql:host=localhost;dbname=sakila', $uname, $pword);

        if($conn){
            echo 'Connected successfully';
        }
    } catch(PDOException $e) {
        echo $e;
    }
?>