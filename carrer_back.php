<?php

print_r($_POST);


$resume_heading=$_POST['resumeheading'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$street_address = $_POST['formaddress'];
$contact = $_POST['contact'];
$city_state = $_POST['citystate'];
$postal = $_POST['postcode'];
$work_authority= $_POST['workauthority'];
$visa = $_POST['holdingvisa'];
$country = $_POST['country'];
$alt_email = $_POST['alternateEmail'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$avatojo = $_POST['avatojo'];
$workfreelance = $_POST['workfreelance'];
$corporatetrainee = $_POST['corporatetrainee'];
$withincountry = $_POST['withincountry'];
$othercountry = $_POST['othercountry'];
$prefrredcountries = $_POST['pref_country'];
$cursalary = $_POST['currentsal'];
$curcurrency = $_POST['currentcur'];
$expsalary = $_POST['expsal'];
$expcurrency = $_POST['expcur'];
$skillsets = $_POST['skillSets '];
$certificatename= $_POST[' certiname:'];
$certificatenid= $_POST[' certiid'];
$certificatenurl= $_POST[' certiurl'];
$certificateexpriy= $_POST['  certexp'];
$accomplishmentname= $_POST['accompname'];
$accomplishmenturl= $_POST['accompurl'];
$accomplishmentreg= $_POST['accompreg'];
$accstart= $_POST['accstart'];
$accend= $_POST['accend'];
$accexpiry= $_POST['accexpiry'];


$socialMedia = json_decode($_POST['socialmedia'], true);
$education = json_decode($_POST['education'], true);
$workexperience = json_decode($_POST['workexperience'], true);


$host = "localhost";
$username = "root";
$password = '';  
$db_name = "eod";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$socialMediaJSON = json_encode($socialMedia);
$educationJSON = json_encode($education);
$workexperienceJSON= json_encode($workexperience);



    
    

    if(isset($_POST['currentsf'])) {
        $curfrequency = $_POST['currentsf'];
    } else {
        $curfrequency = ''; // or set a default value
    }
    
    if(isset($f_POST['expsf'])) {
        $expfrequency = $_POST['expsf'];
    } else {
        $expfrequency = ''; // or set a default value
    }
    
    $uploadDirectory = 'documents/';  // Define the upload directory relative to the location of your PHP script

    if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
    $uploadFilePath = $uploadDirectory . $_FILES['file']['name'];  // Full path to the uploaded file
    }
    else
    {
        $uploadFilePath =' ';
    }
    

    $sql = "INSERT INTO CARRERFORM (resume_heading, first_name, last_name, street_address, contact, city_state, postal_code, work_authority_status, visa_holding, country, alt_email, email, gender, DOB, availability, work_freelance, corporate_trainee, rellocate_within_country, rellocate_other_country, prefrred_countries, current_salary, salary_curreny, salary_frequency, expected_salary, exp_sal_currency, exp_sal_frequency, skillsets, certification_name, certification_id, certification_url, certification_expriy, accomplishment_name, accomplishment_url, upload_proof, accomplishment_reg, acc_start, acc_end, acc_expiry,social_media,education,work_experience) VALUES ('$resume_heading', '$first_name', '$last_name', '$street_address', '$contact', '$city_state', '$postal', '$work_authority', '$visa', '$country', '$alt_email', '$email', '$gender', '$dob', '$avatojo', '$workfreelance', '$corporatetrainee', '$withincountry', '$othercountry', '$prefrredcountries', '$cursalary', '$curcurrency', '$curfrequency', '$expsalary', '$expcurrency', '$expfrequency', '$skillsets','$certificatename', '$certificatenid', '$certificatenurl', '$certificateexpriy', '$accomplishmentname', '$accomplishmenturl', '$uploadFilePath', 
    '$accomplishmentreg', '$accstart', '$accend', '$accexpiry','$socialMediaJSON','$educationJSON','$workexperienceJSON')";


    if(mysqli_query($conn, $sql)) { 
        echo "sucess";
    } else { 
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
