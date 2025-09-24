<?php
try {
     $connect = new PDO('mysql:host=localhost; dbname=slmd', 'ingress', 'ingress');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

session_start();



?>
