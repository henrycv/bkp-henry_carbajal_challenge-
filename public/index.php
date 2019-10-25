<?php

try {
    $host = 'docker-mysql';
    $user = 'wwww';
    $pass = 'wwww';
    $db = 'challenge';
    $mbd = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    var_dump($mbd);
    // foreach($mbd->query('SELECT * from FOO') as $fila) {
    //     print_r($fila);
    // }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
die;
