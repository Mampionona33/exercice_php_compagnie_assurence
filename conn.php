<?php
function connect_db()
{
    // $user = "root";
    // $pass = "";
    // $host = "127.0.0.1";
    $user = "usvg4vh5klwg1djt";
    $pass = "h1O9o9iDqjyHjDlxw50o";
    $dbname = "busgmq1633lfbaqrmrps";
    $host = "busgmq1633lfbaqrmrps-mysql.services.clever-cloud.com";
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    try {
        $conn = new PDO($dsn, $user, $pass);

        // use to debug sql query
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
