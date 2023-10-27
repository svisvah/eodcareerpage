<<<<<<< HEAD
<?php
$host = "localhost";
$username = "root";
$password = '';  
$db_name = "eod";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$uploadDirectory = 'documents/';  // Define the upload directory relative to the location of your PHP script

if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
    $fileName = $_FILES['file']['name'];
    $uploadFilePath = $uploadDirectory . $fileName;  // Full path to the uploaded file

    // Upload the file to the specified directory
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)) {
        // File uploaded successfully, echo the file path
        echo $uploadFilePath;
    } else {
        // Error uploading file
        echo "Error uploading file.";
    }
} else {
    // No file uploaded
    echo "No file received.";
}
?>
=======
<?php
$host = "localhost";
$username = "root";
$password = '';  
$db_name = "eod";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$uploadDirectory = 'documents/';  // Define the upload directory relative to the location of your PHP script

if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
    $fileName = $_FILES['file']['name'];
    $uploadFilePath = $uploadDirectory . $fileName;  // Full path to the uploaded file

    // Upload the file to the specified directory
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)) {
        // File uploaded successfully, echo the file path
        echo $uploadFilePath;
    } else {
        // Error uploading file
        echo "Error uploading file.";
    }
} else {
    // No file uploaded
    echo "No file received.";
}
?>
>>>>>>> 036b98e2080f6e65faeeaf90a6741a93c7d9ad60
