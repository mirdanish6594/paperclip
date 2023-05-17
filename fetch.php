<?php
require_once 'configration.php';
include 'card.php'; 

function fetchListingDetails(int $id){
    global $mysqli;

    $query="SELECT * FROM listings WHERE id = {$id}";

    $result = $mysqli->query($query);

    if ($result) {
        return $result->fetch_assoc();
    }else {
        echo "Error executing the query: " . $mysqli->error;
    }
    $mysqli->close();
}
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

function fetchListingsByCategory(string $category){
    global $mysqli;

    $query="SELECT * FROM listings WHERE category = '{$category}'";

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