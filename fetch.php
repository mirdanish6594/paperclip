<?php
require_once 'DBconfigration.php';
include 'card.php'; 


function fetchLatestListings(int $limit){
    global $mysqli;

    $query="SELECT * FROM listings ORDER BY id DESC LIMIT {$limit}";

    $result = $mysqli->query($query);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            createCard($row);
        }
    $result->free();
    }else {
        echo "Error executing the query: " . $mysqli->error;
    }
    $mysqli->close();
}

?>