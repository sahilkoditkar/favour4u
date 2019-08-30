<?php

$mysqli = new mysqli("shareddb1e.hosting.stackcp.net", "favour4u-3637a41e", "qwerty1234", "favour4u-3637a41e");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


if (
    !$mysqli->query("DROP PROCEDURE IF EXISTS spservices") ||
    !$mysqli->query('CREATE PROCEDURE spservices() READS SQL DATA BEGIN SELECT name FROM customer; END;')
) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->multi_query("CALL spservices()")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

do {
    if ($res = $mysqli->store_result()) {
        printf("---\n");
        var_dump($res->fetch_all());
        $res->free();
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());

?>