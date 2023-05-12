<?php
function connect_db()
{
    $user = "root";
    $pass = "password";
    $host = "172.28.0.2";
    // $user = "usvg4vh5klwg1djt";
    // $pass = "h1O9o9iDqjyHjDlxw50o";
    // $host = "busgmq1633lfbaqrmrps-mysql.services.clever-cloud.com";
    $dbname = "compagnie_assurence";
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
