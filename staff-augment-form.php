<?php 
include "db-config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["action"] == 'submit') {
        submit($connection);
    }

} else {
    echo "Invalid request method.";
}


function submit($connection)
{
    $positionName = $_POST['position-name'];
    $noOfCandRequired = $_POST['no-candidates-req'];
    $expertiseLevel = $_POST['expertise-level'];
    $skillSets = $_POST['skill-sets'];
    $workLocation = $_POST['work-location'];
    $workCountry = '';
    $workCity = '';
    $workHours = '';
    $workDays = '';
    $workStart = '';
    $workHoursType = '';
    $workDaysPerWeek = '';
    $supportFromTo = '';
    $customTime = '';
    $duration = $_POST['duration'];
    $accCreate = false;

    if($workLocation == 'on-site'){
        $workCountry = $_POST['work-country'];
        $workCity = $_POST['work-city'];
    }

    $workType = $_POST['work-type'];

    if($workType == 'full-time'){
        $workHours = $_POST['work-hours'];
        $workDays = $_POST['work-days'];
        $workStart = $_POST['work-start'];
    }

    if($workType == 'part-time'){
        $workHoursType = $_POST['work-hours-type'];
        if($workHoursType == 'std-hours'){
            // $workDaysPerWeek = $_POST['work-days-per-week'];
            $workDaysPerWeek = implode(', ',$_POST['work-days-per-week']);
            $supportFromTo = $_POST['daily-support-from'] .' '. $_POST['daily-support-to'];
        }
        if($workHoursType == 'free-hours'){
            $customTime = $_POST['custom-time'];
        } 
    }

    $monsDaysReq = $_POST['mons-days-req'];
    $feedback = $_POST['staff-known-source'];

    if($positionName == 'others'){
        $otherPosition = $_POST['position-name-others'];
        $positionName = 'Others('. $otherPosition . ')';
        $createStaffPositionName = "INSERT INTO staffagumentation_position_names (name, code) VALUES ('$otherPosition', '$otherPosition')";

        if ($connection->query($createStaffPositionName) === TRUE) {
            $accCreate = true;
        } else {
            $accCreate == false;        
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

    $finalEmail = $email != '' ? $email : $newEmail;

    $sql = "INSERT INTO staffagumentation_form (email, position_name, no_candidates_req, expertise_level, skillsets, work_location, work_country, work_city, work_type, working_hours_per_day, working_days, weekday_starts, work_hours_remote, work_days_remote, customized_work_time, support_hours, duration, duration_months, feedback) VALUES ('$finalEmail', '$positionName', '$noOfCandRequired', '$expertiseLevel', '$skillSets', '$workLocation', '$workCountry', '$workCity', '$workType', '$workHours', '$workDays', '$workStart', '$workHoursType', '$workDaysPerWeek', '$supportFromTo', '$customTime', '$duration', '$monsDaysReq', '$feedback')";

    if ($connection->query($sql) === TRUE) {
        echo 'true';
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
