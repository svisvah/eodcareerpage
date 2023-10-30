<?php
require_once __DIR__ . '/vendor/autoload.php';

$host = "localhost";
$username = "root";
$password = '';  
$db_name = "eod";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = " SELECT * FROM CARRERFORM where id=4";
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
 

   
    
}
$exploop='';
if($workexperience!="null")
{
  $exptitle='<div class="details">
  <div class="section">
    <div class="section__title">Experience</div>';
    
    foreach($workexperience as $value)
    {
        $exploop.=
      '  <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name">'.$value->{'Company'}.'</div>
            <div class="addr">'.$value->{'City worked'}.','.$value->{'Country worked'}.'</div>
            <div class="duration">'.$value->{'Worked from'}.','.$value->{'Worked to'}.'</div>
          </div>
          <div class="right">
            <div class="name"></div><br>
            <label class="explabel">Client Name:'.$value->{'Client Name'}.'</label><br>
            <label class="explabel"> Client Domain:'. $value->{'Client Domain'}.'</label><br>
            <label class="explabel">Salary:'.$value->{'Salary per annum'}.'</label><br>
            <label class="explabel">Mode of work:'.$value->{'Mode of work'}.'</label><br>
            <label class="explabel">Work type:'.$value->{'Work type'}.'</label><br>
            <label class="explabel">Current employer:'.$value->{'Current Employee'}.'</label><br>
        
          </div>
        </div>';
    }
}
$eduloop='';
foreach($education as $value)
{
    $eduloop.=' <div class="section__list">
    <div class="section__list-item">
      <div class="left">
        <div class="name">'.$value->UniversityName.'</div>
        <div class="addr">'.$value->UniversityCountry.'</div>
        <div class="duration">'.$value->Startyear.'</div>
      </div>
      <div class="right">
        <div class="name"></div><br>
        <div class="desc">
        <label class="explabel">Education Level:'.$value->{'Education Level'}.'</label><br>
        <label class="explabel"> Course Type:'.$value->CourseType.'</label><br>
        <label class="explabel">Specialization:'.$value->Specialization.'</label><br>
        <label class="explabel">Course duration:'. $value->Courseduration.'</label><br>
        <label class="explabel">Grading Level:'.$value->GradingLevel.'</label><br>
      </div>
    </div>
  </div>';
}


$certiloop='';
if($certifications!="null"){
$certitle='<div class="section">
<div class="section__title">Certifications</div>
<div class="section__list">';
foreach($certifications as $value)
{
  $certiloop.=' <div class="section__list-item">
  <div class="left">
  <div class="name">'.$value->{'Certification Name'}.'</div>
  <div class="text"><a href="'.$value->{'Certification Url'}.'">URL LINK</a>
  </div>
</div>
  <div class="right">
    <div class="desc">
    <label class="explabel">Certification ID:'.$value->{'Certification id'}.'</label>
           <label class="explabel"> Expiry Date:'.$value->{'Certification Expiry'}.'</label>
           
  </div>
</div>
</div>
</div>
<br><br>
';
}
}


$certiloop='';
if($certifications!="null"){
$certitle='<div class="section">
<div class="section__title">Certifications</div>
<div class="section__list">';
foreach($certifications as $value)
{
  $certiloop.=' <div class="section__list-item">
  <div class="left">
  <div class="name">'.$value->{'Certification Name'}.'</div>
  <div class="text"><a href="'.$value->{'Certification Url'}.'">URL LINK</a>
  </div>
</div>
  <div class="right">
    <div class="desc">
    <label class="explabel">Certification ID:'.$value->{'Certification id'}.'</label>
           <label class="explabel"> Expiry Date:'.$value->{'Certification Expiry'}.'</label>
           
  </div>
</div>
</div>
</div>
<br><br>
';
}
}


$certiloop='';
if($certifications!="null"){
$certitle='<div class="section">
<div class="section__title">Certifications</div>
<div class="section__list">';
foreach($certifications as $value)
{
  $certiloop.=' <div class="section__list-item">
  <div class="left">
  <div class="name">'.$value->{'Certification Name'}.'</div>
  <div class="text"><a href="'.$value->{'Certification Url'}.'">URL LINK</a>
  </div>
</div>
  <div class="right">
    <div class="desc">
    <label class="explabel">Certification ID:'.$value->{'Certification id'}.'</label>
           <label class="explabel"> Expiry Date:'.$value->{'Certification Expiry'}.'</label>
           
  </div>
</div>
</div>
</div>
<br><br>
';
}
}

$conn->close();
$mpdf = new \Mpdf\Mpdf();
$stylesheet=file_get_contents(__DIR__ . 'css/resumestyles.css');


$html='<html> 
<style>
    .explabel
  {
    font-weight: bold;
    
  }
  .name
  {
    font-size:14px;
  }
  table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
          html {
            height: 100%;  
          }
          
          body {
            min-height: 100%;  
            background: #eee;
            font-family: "Lato", sans-serif;
            font-weight: 400;
            color: #222;
            font-size: 14px;
            line-height: 26px;
            padding-bottom: 50px;
          }
          
          .container {
            max-width: 700px;   
            background: #fff;
            margin: 0px auto 0px; 
            box-shadow: 1px 1px 2px #DAD7D7;
            border-radius: 3px;  
            padding: 40px;
            margin-top: 50px;
          }
          
          .header {
            margin-bottom: 30px;
            
            .full-name {
              font-size: 40px;
              text-transform: uppercase;
              margin-bottom: 5px;
            }
            
            .first-name {
              font-weight: 700;
            }
            
            .last-name {
              font-weight: 300;
            }
            
            .contact-info {
              margin-bottom: 20px;
            }
            
            .email ,
            .phone,.address {
              color: #999;
              font-weight: 300;
            } 
            
            .separator {
              height: 10px;
              display: inline-block;
              border-left: 2px solid #999;
              margin: 0px 10px;
            }
            
            .position {
              font-weight: bold;
              display: inline-block;
              margin-right: 10px;
              text-decoration: underline;
            }
          }
          
          
          .details {
            line-height: 20px;
            
            .section {
              margin-bottom: 40px;  
            }
            
            .section:last-of-type {
              margin-bottom: 0px;  
            }
            
            .section__title {
              letter-spacing: 2px;
              color: #54AFE4;
              font-weight: bold;
              margin-bottom: 10px;
              text-transform: uppercase;
            }
            
            .section__list-item {
              margin-bottom: 40px;
            }
            
            .section__list-item:last-of-type {
              margin-bottom: 0;
            }
            
            .left ,
            .right {
              vertical-align: top;
              display: inline-block;
            }
            
            .left {
              width: 60%;    
            }
            
            .right {
              tex-align: right;
              width: 39%;    
            }
            
            .name {
              font-weight: bold;
              font-size:15px;
            }
            
            a {
              text-decoration: none;
              color: #000;
              font-style: italic;
            }
            
            a:hover {
              text-decoration: underline;
              color: #000;
            }
            
            .skills {
              
            }
              
            .skills__item {
              margin-bottom: 10px;  
            }
            
            .skills__item .right {
              input {
                display: none;
              }
              
              label {
                display: inline-block;  
                width: 20px;
                height: 20px;
                background: #C3DEF3;
                border-radius: 20px;
                margin-right: 3px;
              }
              
              input:checked + label {
                background: #79A9CE;
              }
            }
          }
          
          
  </style>
<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="first-name">'.$firstname.'</span> 
      <span class="last-name">'.$last_name.'</span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val">'.$email.'| </span>
      <span class="email">Alt-email: </span>
      <span class="email-val">'.$altemail.'</span>
      <span class="separator"></span><br>
      <span class="phone">Phone: </span>
      <span class="phone-val">'.$phone.'</span>
      <span class="email">Address"</span>
      <span class="email-val">'.$address.','.$citystate.','.$postcode.'</span>

    </div>
    
    <div class="about">
      <span class="desc">
      '.$resumeheading.'
      
    </div>
  </div>
'.$exploop.'


      
           
    <div class="section">
      <div class="section__title">Education</div>
 
     '.$eduloop.'
      </div>

       '.$certiloop.'
        
<div class="section">
      <div class="section__title">Accomplishments</div>
     
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
          <div class="name"></div>
          <div class="duration"></div>
          <div class="text"><a href="">URL LINK</a>
          </div>
</div>
          <div class="right">
            <div class="desc">
            <label class="explabel">Accomplishment ID:</label>
                   <label class="explabel"> Expiry Date:</label>
    </div>
    </div>
          </div>
        </div>
      </div>
      
      <br><br>


     <div class="section">
       <div class="section__title">Skills</div>
    
       <div class="skills">
          
</div>
</div><br>

<div class="section">
      <div class="section__title">Social Media</div> 
    
       <div class="section__list">
         <div class="section__list-item">
           <div class="name"></div>
           <div class="text"><a href="">URL LINK</a>
           </div>
  </div>
</div>
</div>
        
          
     <div class="section">
     <div class="section__title">
      Additional Info
       </div>
       <div class="section__list">
         <div class="section__list-item">
         <label class="explabel">Date of Birth:</label><br>
         <label class="explabel"> Gender:</label><br>
         <label class="explabel"> Availability to Join:</label><br>
         <label class="explabel">To Work as freelancer:</label><br>
         <label class="explabel">To Work as corporate trainee:</label><br>
         <label class="explabel">To rellocate within country:</label><br>
         <label class="explabel">To rellocate to other country:</label><br>
        
         <label class="explabel">Preferred Countries:</label><br>
        
        <label class="explabel">Are you holding visa?:</label><br>
        
<table border="1">
        <tr>
            <th>Visa Country</th>
            <th>Visa Type</th>
            <th>Visa Expiry</th>
        </tr>
    <tr>
      
    <td></td>
    <td></td>
    <td></td>
      </tr>
      </table>
    
      <br>
      <div class="name">Salary details</div>
      <table>
        <tr>
            <th></th><!-- Empty cell in the first row and first column -->
            <th>Salary amount</th>
            <th>Currency</th>
            <th>Frequency</th>
        </tr>
        <tr>
        
            <td><strong>Current Salary</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
    
        <tr>
            <td><strong>Expected Salary</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
               
    </table>          
          </div>
       </div>
     </div>
     </html>
    ';
$mpdf->WriteHTML($stylesheet);
$mpdf->WriteHTML($html);
$mpdf->Output();
?>