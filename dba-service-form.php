<?php
include "db-config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["action"] == 'submit') {
        submit($connection);
    }
    if ($_POST["action"] == 'email-val') {
        checkEmail($connection);
    }

} else {
    echo "Invalid request method.";
}

function submit($connection)
{
    $email = '';
    $newEmail = '';
    $name = '';
    $contactNumber = '';
    $techOthers = '';
    $durationYear = '';
    $durationMonth = '';
    $technology = '';
    $knownSource = '';
    $accCreate = false;
    $techO = false;
    // Retrieve data from the POST request
    $serviceType = $_POST["dba-services"];
    if (isset($_POST['dba-tech'])) {
        $technology = $_POST["dba-tech"];
    }
    if (isset($_POST['dba-tech-other'])) {

        $techOthers =  $_POST["dba-tech-other"];

        $dbaOtherPosition = "INSERT INTO dba_technology (name, code) VALUES ('$techOthers', '$techOthers')";

        if ($connection->query($dbaOtherPosition) === TRUE) {
            $techO = true;
        } else {
            $techO == false;        
        }
    }

    if (isset($_POST['email'])) {
        $email = $_POST["email"];
    }
    if (isset($_POST["new-email"])) {
        $newEmail = $_POST["new-email"];
        $name = $_POST["full-name"];
        $contactNumber = $_POST["contact-number"];
        $createAccountSql = "INSERT INTO user_account (full_name, email, contact_number) VALUES ('$name', '$newEmail','$contactNumber')";

        if ($connection->query($createAccountSql) === TRUE) {
            $accCreate = true;
        } else {
            $accCreate == false;        
        }
    }

    if (isset($_POST['duration-year'])) {
        $durationYear = $_POST["duration-year"];
    }

    if (isset($_POST['duration-month'])) {
        $durationMonth = $_POST["duration-month"];
    }

    if (isset($_POST['dba-known-source'])) {
        $knownSource = $_POST["dba-known-source"];
    }

    $durationYear = $_POST["duration-year"];
    $durationMonth = $_POST["duration-month"];



    $finalEmail = $email != '' ? $email : $newEmail;
    $finalTechnology = $techOthers != '' ? $techOthers : $technology;

    // Insert the data into the database
    $sql = "INSERT INTO dba_services_form (service_type, technology, duration_year, duration_month, email, feedback) VALUES ('$serviceType', '$finalTechnology','$durationYear', '$durationMonth','$finalEmail', '$knownSource')";

    if ($connection->query($sql) === TRUE) {
        echo 'true';
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    // Close the database connection
    $connection->close();
}

function checkEmail($connection)
{   
    if (isset($_POST['email'])) {
        $email = $_POST["email"];
        $caction = $_POST['caction'];

        $sql = "SELECT * FROM user_account WHERE email = '$email'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($caction == 'new'){
                echo 'false';
            }
            if($caction == 'exist'){
                echo 'true';
            }
           
        } else {
            if($caction == 'exist'){
                echo 'false';
            }
            if($caction == 'new'){
                echo 'true';
            }
        }      
       
        $connection->close();
    }
}
