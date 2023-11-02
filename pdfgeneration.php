<?php
require_once __DIR__ . '/vendor/autoload.php';
error_reporting( E_ALL );

$host = "localhost";
$username = "root";
$password = '';  
$db_name = "eod";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = " SELECT * FROM CARRERFORM where id=30";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)) {
    $firstname= $row["first_name"];
    $last_name= $row["last_name"];
    $email= $row["email"];
    $phone = $row["contact"];
    $resumeheading=$row['resume_heading'];
    $workexperience=($row['work_experience']);
    $education=json_decode($row['education']);
    $accomplishment=($row['accomplishments']);
    $certifications=($row['certifications']);
    $socialmedia=($row['social_media']);
    $address= $row['street_address'];
    $postcode= $row['postal_code'];
    $altemail=$row['alt_email'];
    $citystate=$row['city_state'];
    $skills=$row['skillsets'];
    $skillsets = explode(',', $skills);
    $country=$row['country'];
    $dob=$row['DOB'];
    $gender=$row['gender']; 
    $wastatus=$row['work_authority_status'];
    $visaholding=$row['visa_holding'];
    $visadetails=($row['visa_details']);
    $avatojo=$row['availability'];
    $workfreelance=$row['work_freelance'];
    $trainee=$row['corporate_trainee'];
    $relcoun=$row['rellocate_within_country'];
    $reloc=$row['rellocate_other_country'];
    $cursalary=$row['current_salary'];
    $salcurr=$row['salary_curreny'];
    $salfreq=$row['salary_frequency'];
    $expsalary=$row['expected_salary'];
    $expcurr=$row['exp_sal_currency'];
    $expfreq=$row['exp_sal_frequency'];
    $prefcountries=$row['prefrred_countries'];
    $prefrredcountries=explode(',', $prefcountries);
    $counsql="SELECT name FROM countries where country_code='$country'";
    $resultcoun = mysqli_query($conn, $counsql);
    $country=mysqli_fetch_array($resultcoun);
    $countryprint=$country['name'];

    $citysql="SELECT state_name FROM state where state_code='$citystate'";
    $resultstate = mysqli_query($conn, $citysql);
    $statename=mysqli_fetch_array($resultstate);
    $stateprint=$statename['state_name'];
    
  
    if($accomplishment!="null")
    {
      $accomplishment=json_decode($accomplishment);

    }
    if($certifications!="null")
    {
      $certifications=json_decode($certifications);
    }
    if($workexperience!="null")
    {
      $workexperience=json_decode($workexperience);
    }
    if($socialmedia!="null")
    {
      $socialmedia=json_decode($socialmedia);
    }
    if($visadetails!="null")
    {
      $visadetails=json_decode($visadetails);
    }
 

   
    
  $space="    ";
}
$exploop='';
if($workexperience!="null")
{
  $exptitle='<div class="section">
  <p style="font-weight:bold;font-size:20px;border-bottom: 2px dotted black;padding-bottom:10px;">WORK EXPERIENCE</p>
  ';
}
else
{
    $exptitle='';
}
    
    foreach($workexperience as $value)
    {
        $startime=strtotime($value->{'Worked from'});
        $endtime=strtotime($value->{'Worked to'});
        $countrycode=$value->{'Country worked'};
        $counsql="SELECT name FROM countries where country_code='$countrycode'";
  $resultcoun = mysqli_query($conn, $counsql);
  $country=mysqli_fetch_array($resultcoun);
  $countrystudy=$country['name'];


  $citysql="SELECT state_name FROM state where state_code='$citystate'";
    $resultstate = mysqli_query($conn, $citysql);
    $statename=mysqli_fetch_array($resultstate);
    $stateprint=$statename['state_name'];
    
        $exploop.=  '
        <table style="width:100%">
        <tr>
        <td style="text-align:left"><b>'.$value->{'Role Name'}.', '.$value->{'Company Name'}.'</b></td>
        
        <td style="text-align:right">'.$stateprint.'  -  '.$countrystudy.'</td>

        
        </tr>
        <tr>
        <td>'.date('M-Y',$startime).' - '.date('M-Y',$endtime).'</td>
        </tr>
        </table><br>';
    }

$eduloop='';
foreach($education as $value)
{
    $startime=strtotime($value->Startyear);
    $endtime=strtotime($value->GraduateYear);

  $counsql="SELECT name FROM countries where country_code='$value->UniversityCountry'";
  $resultcoun = mysqli_query($conn, $counsql);
  $country=mysqli_fetch_array($resultcoun);
  $countrystudy=$country['name'];


    $eduloop.=' <table style="width:100%">
        <tr>
        <td style="text-align:left"><b>'.$value->UniversityName.', '.$value->{'Education Level'}.'</b></td>
        <td style="text-align:right">'.$countrystudy.'</td>
        </tr>
        <tr>
        <td  style="text-align:left">'.date('M-Y',$startime).' - '.date('M-Y',$endtime).'</td>
        </tr>
        <tr>
        <td style="text-align:left">Grade:'.$value->GradingLevel.'</td>
        </tr>
        </table><br>        ';
}


$certiloop='';
if($certifications!="null"){
$certitle='<div class="section">
<p style="font-weight:bold;font-size:20px;border-bottom: 2px dotted black;padding-bottom:10px;padding-top:10px;">CERTIFICATIONS</p>
';;
}
else
{
    $certitle='';
}
foreach($certifications as $value)
{
    $certiexpiry=strtotime($value->{'Certification Expiry'});
   
  $certiloop.=' <table>
  <tr>
  <td><b>'.$value->{'Certification Name'}.'</b>&nbsp;&nbsp;<a href="'.$value->{'Certification Url'}.'">URL LINK</a></td> 
  </tr>
  <tr>
  <td>EXPIRY: '.date('M-Y',$certiexpiry).'</td>
  </tr>
  <tr>
  <td>Certification ID:'.$value->{'Certification id'}.'</td>
  </tr>
  </table>  
  <br>
';
}

$accomploop='';
if($accomplishment!="null"){
$accomptitle='<div class="section">
<p style="font-weight:bold;font-size:20px;border-bottom: 2px dotted black;padding-bottom:10px;padding-top:10px;">ACCOMPLISHMENTS</p>
';;
}
else
{
  $accomptitle='';
}
foreach($accomplishment as $value)
{
    $startime=strtotime($value->{'Starting Date'});
    $endtime=strtotime($value->{'Ending Date'});
    $accompexpiry=strtotime($value->{'Accomplishment Expiry'});

     
  $accomploop.='<table>
  <tr>
  <td><b>'.$value->{'Accomplishment Name'}.'</b>&nbsp;&nbsp;&nbsp;'.'<a href="'.$value->{'Accomplishment Url'}.'">URL LINK</a></td> 
  </tr>
  <tr>
  <td>Accomplishment ID:'.$value->{'Accomplishment id'}.'</td>
  </tr>
  <tr>
  <td>'.date('M-Y',$startime).' - '.date('M-Y',$endtime).'</td>
  </tr>
  <tr>
  <td>EXPIRY: '.date('M-Y',$accompexpiry).'</td>

  </tr>
  </table>  
  <br>
';
}


$socialmedialoop='';
if($socialmedia!="null")
{
  $socialmediatitle='<div class="section">
  <p style="font-weight:bold;font-size:20px;border-bottom: 2px dotted black;padding-bottom:10px;padding-top:10px;">SOCIAL MEDIA</p>
  ';
  
}

else
{
  $soicalmediatitle='';
}
foreach($socialmedia as $value)
{

  $socialmedialoop.='
  '.$value->name.' &nbsp;&nbsp; <a href="'.$value->url.'">URL LINK</a></th> 
      
</div>';

}
$skillloop='';
foreach($skillsets as $value)
{
  $skillloop.='<td style="background: #d9d9d9;padding: 6px 15px;border-radius: 50px; text-transform: uppercase;margin: 0px 20px;">'.$value.'  </td>';
}
$conn->close();
$mpdf = new \Mpdf\Mpdf();
$stylesheet=file_get_contents(__DIR__ . 'css/pdfstyles.css');


$html='<html> 

<title>PDF GENERATION</title>
<body>
<table style="width:100%">
<tr>
<td style="text-align:left"><h1 style=color:blue>'.$firstname.'  '.$last_name.'</h2></td>
</tr>
<tr>
<td style="text-align:left">'.$email.' | '.$phone.'</td>
</tr>
<tr>
<td style="text-align:left">'.$address.' </td>
</tr>
<tr>
<td style="text-align:left"> '.$stateprint.', '.$postcode.'</td>
</tr>
<tr>
<td style="text-align:left">'.$countryprint.'</td>
</tr>
</table>
<br>
<div class="section">
  <p style="font-weight:bold;font-size:20px;border-bottom: 2px dotted black;padding-bottom:10px;padding-top:10px;">PROFESSIONAL SUMMARY</p>
'.$resumeheading.'<br>
'.$exptitle.'
'.$exploop.'<br>
<div class="section">
  <p style="font-weight:bold;font-size:20px;border-bottom: 2px dotted black;padding-bottom:10px;padding-top:10px;">EDUCATION HISTORY</p>
  
'.$eduloop.'
<br>
  <p style="font-weight:bold;font-size:20px;border-bottom: 2px dotted black;padding-bottom:10px;padding-top:10px;">SKILLS</p>
  <table>
  <tr style="display: flex;justify-content:space-between">
  '.$skillloop.';
</tr></table>
<br>
'.$certitle.'
'.$certiloop.'
<br>
'.$accomptitle.'
'.$accomploop.'
<br>
'.$socialmediatitle.'
'.$socialmedialoop.'


</body>
</html>

';
// print_r($html);
// exit();
$mpdf->WriteHTML($stylesheet);
$mpdf->WriteHTML($html);

// $mpdf->WriteHTML($html);
$mpdf->Output();
