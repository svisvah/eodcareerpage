<?php
include "db-config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["action"] == 'getstates') {
        getStates($connection);
    }

} else {
    echo "Invalid request method.";
}

function getStates($connection){

    $countryCode = $_POST['country-code'];
    $state = "SELECT state_name, state_code FROM state where country_code = '$countryCode'";
    $stateResult = mysqli_query($connection, $state);
    if ($stateResult) {
        $states = [];
    
        while ($row = mysqli_fetch_assoc($stateResult)) {
            $states[] = $row;
        }
        echo json_encode($states);
    } else {
        echo 'error';
    }
}