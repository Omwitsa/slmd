<?php
try {
     $connect = new PDO('mysql:host=localhost; dbname=slmd', 'vnc', 'Newtech@2022');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

session_start();



?>
