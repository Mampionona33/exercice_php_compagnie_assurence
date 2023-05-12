<?php
function connect_db()
{
    $user = "root";
    $pass = "password";
    $host = "mysql";
    $dbname = "compagnie_assurance";

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    try {
        $conn = new PDO($dsn, $user, $pass);

        // use to debug sql query
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $conn->setAttribute(PDO::ATTR_TIMEOUT, 30); 


        return $conn;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
