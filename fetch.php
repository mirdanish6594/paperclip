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

function fetchProfile(string $userId){

    global $mysqli;

    $query="SELECT * FROM users WHERE id = '{$userId}'";
    $result = $mysqli->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $contactNumber = $row['contactNumber'];
            $desc = $row['description'];
            $email = $row['email'];
            $username = $row['userName'];
            $form =  "<div class='container-xl px-4 mt-4'>
                            <div class='row'>
                                <div class='col-xl-4'>
                                </div>
                                <div class='col-xl-8'>
                                    <!-- User details card-->
                                    <div class='card mb-4 profile'>
                                        <div class='card-header'>User Details</div>
                                        <div class='card-body'>
                                            <form>
                                                <!-- Form Group (username)-->
                                                <div class='mb-3'>
                                                    <label class='small mb-1' for='inputUsername'>Username</label>
                                                    <input class='form-control' id='inputUsername' type='text' style='pointer-events: none;' value='{$username}' name='name'>
                                                </div>
                                                <!-- Form Row-->
                                                <div class='row gx-3 mb-3'>
                                                <!-- Form Group (phone number)-->
                                                <div class='col-md-6'>
                                                    <label class='small mb-1' for='inputPhone'>Phone number</label>
                                                    <input class='form-control' id='inputPhone' type='tel' placeholder='Enter your phone number' value='{$contactNumber}' name='phone'>
                                                </div>
                                                <!-- Form Group (Enrollment number)-->
                                                <div class='col-md-6'>
                                                    <label class='small mb-1' for='id'>Enrollment no.</label>
                                                    <input class='form-control' id='id' type='text' name='birthday' style='pointer-events: none;' value='{$id}' name='id'>
                                                </div>
                                                </div>
                                                <!-- Form Row        -->
                                                <div class='row gx-3 mb-3'>
                        
                                                </div>
                                                <!-- Form Group (email address)-->
                                                <div class='mb-3'>
                                                    <label class='small mb-1' for='inputEmailAddress'>Email address</label>
                                                    <input class='form-control' id='inputEmailAddress' type='email' placeholder='Enter your email address' style='pointer-events: none;' value='{$email}' name='email'>
                                                </div>
                                                <!-- Form Row-->
                                                <div class='row gx-3 mb-3'>
                                                <label for='exampleFormControlTextarea1' style='font-size: 15px;'>Details</label>
                                                <textarea class='form-control' id='exampleFormControlTextarea1' rows='3' name='desc'>{$desc}</textarea>
                                                </div>
                                                <!-- Save changes button-->
                                                <button class='btn btn-primary' type='button'>Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
            echo $form;
        }
    $result->free();
    }else {
        echo "Error executing the query: " . $mysqli->error;
    }
    $mysqli->close();

}
?>