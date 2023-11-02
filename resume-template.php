<?php


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
    $country=$row['country'];

    print_r($country);
    die();

   
  
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

$conn->close();

?>
 <html> 
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
<link href='css/resumestyles.css' rel='stylesheet'>
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
  </style>
<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="first-name"><?php echo "$firstname";?></span> 
      <span class="last-name"><?php echo "$last_name";?></span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val"><?php echo "$email";?> | </span>
      <span class="email">Alt-email: </span>
      <span class="email-val"><?php echo "$altemail";?></span>
      <span class="separator"></span><br>
      <span class="phone">Phone: </span>
      <span class="phone-val"><?php echo "$phone";?></span>
      <span class="email">Address"</span>
      <span class="email-val"><?php echo "$address" ;?>, <?php echo "$citystate";?>, <?php echo "$postcode";?></span>

    </div>
    
    <div class="about">
      <span class="desc">
      <?php echo "$resumeheading";?>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <?php
      if($workexperience!="null"){    
foreach($workexperience as $value)
{
       

    ?>
<div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $value->{'Company'};?></div>
            <div class="addr"><?php echo $value->{'City worked'};?>,<?php echo $value->{'Country worked'};?></div>
            <?php $startdate= strtotime($value->{'Worked from'});
        $enddate=strtotime($value->{'Worked to'});?>
          <div class="duration"><?php  echo date('M-Y', $startdate)?> - <?php  echo  date('M-Y', $enddate);?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo $value->{'Role Name'};?></div><br>
            <label class="explabel">Client Name:</label><?php echo $value->{'Client Name'};?><br>
            <label class="explabel"> Client Domain:</label><?php echo $value->{'Client Domain'};?><br>
            <label class="explabel">Salary:</label><?php echo $value->{'Salary per annum'};?><br>
            <label class="explabel">Mode of work:</label><?php echo $value->{'Mode of work'};?><br>
            <label class="explabel">Work type:</label><?php echo $value->{'Work type'};?><br>
            <label class="explabel">Current employer:</label><?php echo $value->{'Current Employee'};?><br>
        
          </div>
        </div>
</div>
<?php  
 }
}
?>

      
           
    <div class="section">
      <div class="section__title">Education</div>
      <?php  
foreach($education as $value)
{
    ?>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $value->UniversityName;?></div>
            <div class="addr"><?php echo $value->UniversityCountry;?></div>
            <div class="duration"><?php echo $value->Startyear;?> - <?php echo $value->GraduateYear;?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo $value->Course;?></div><br>
            <div class="desc">
            <label class="explabel">Education Level:</label><?php echo $value->{'Education Level'};?><br>
            <label class="explabel"> Course Type:</label><?php echo $value->CourseType;?><br>
            <label class="explabel">Specialization:</label><?php echo $value->Specialization;?><br>
            <label class="explabel">Course duration:</label><?php echo $value->Courseduration;?><br>
            <label class="explabel">Grading Level:</label><?php echo $value->GradingLevel;?><br>
          </div>
        </div>
      </div>
      </div>
<?php  
 }
?>
 <?php  
    
    if($certifications!="null"){
?>       
<div class="section">
      <div class="section__title">Certifications</div>
      <?php  
  
foreach($certifications as $value)
{
    ?>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
          <div class="name"><?php echo $value->{'Certification Name'}?></div>
          <div class="text"><a href="<?php echo $value->{'Certification Url'}?>">URL LINK</a>
          </div>
</div>
          <div class="right">
            <div class="desc">
            <label class="explabel">Certification ID:</label><?php echo $value->{'Certification id'}?>
                   <label class="explabel"> Expiry Date:</label><?php echo $value->{'Certification Expiry'}?>
                   
          </div>
        </div>
      </div>
      </div>
      <br><br>
<?php 
} 
 }
?>
 <?php  
    
    if($accomplishment!="null"){
?> 
            
<div class="section">
      <div class="section__title">Accomplishments</div>
      <?php  
    foreach($accomplishment as $value)
    {
    ?>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
          <div class="name"><?php echo $value->{'Accomplishment Name'}?></div>
          <div class="duration"><?php echo $value->{'Starting Date'};?> - <?php  echo $value->{'Ending Date'};?></div>
          <div class="text"><a href="<?php echo $value->{'Accomplishment Url'}?>">URL LINK</a>
          </div>
</div>
          <div class="right">
            <div class="desc">
            <label class="explabel">Accomplishment ID:</label><?php echo $value->{'Accomplishment id'}?>
                   <label class="explabel"> Expiry Date:</label><?php echo $value->{'Accomplishment Expiry'}?>
    </div>
    </div>
          </div>
        </div>
      </div>
      
      <br><br>
<?php  
    }
 }
?>

     <div class="section">
       <div class="section__title">Skills</div>
       <?php  
      
foreach($skillsets as $value)
{
    ?>
       <div class="skills">
           <?php echo $value?>
             
        <?php  

 }
?>
</div>
</div><br>
 <?php  
    
    if($socialmedia!="null"){
?> 
<div class="section">
      <div class="section__title">Social Media</div> 
      <?php  
       
foreach($socialmedia as $value)
{
    ?>
       <div class="section__list">
         <div class="section__list-item">
           <div class="name"><?php echo $value->name?></div>
           <div class="text"><a href="<?php echo $value->url?>">URL LINK</a>
           </div>
  </div>
</div>
</div>
        
           <?php  

}}
?>
     <div class="section">
     <div class="section__title">
      Additional Info
       </div>
       <div class="section__list">
         <div class="section__list-item">
         <label class="explabel">Date of Birth:</label><?php echo "$dob";?><br>
         <label class="explabel"> Gender:</label><?php echo "$gender";?><br>
         <label class="explabel"> Availability to Join:</label><?php echo "$avatojo";?><br>
         <label class="explabel">To Work as freelancer:</label><?php echo "$workfreelance";?><br>
         <label class="explabel">To Work as corporate trainee:</label><?php echo "$trainee";?><br>
         <label class="explabel">To rellocate within country:</label><?php echo "$relcoun";?><br>
         <label class="explabel">To rellocate to other country:</label><?php echo "$reloc";?><br>
        
         <?php  
      if($reloc=="yes"){
        ?>
        <label class="explabel">Preferred Countries:</label><br>
        <?php
      foreach($prefrredcountries as $value)
      {
          ?>
           
                 <li><?php echo $value?></li>
                   
                
                 <?php  
      }

}
?>
 
 <?php  
      if($visaholding=="yes"){
        ?>
        <label class="explabel">Are you holding visa?:</label><?php echo "$visaholding";?><br>
        
<table border="1">
        <tr>
            <th>Visa Country</th>
            <th>Visa Type</th>
            <th>Visa Expiry</th>
        </tr>
    <tr>
      <?php foreach($visadetails as $value)
      {
          ?>

    <td><?php echo $value->{'Visa Country'};?></td>
    <td><?php echo $value->{'Visa Type'};?></td>
    <td><?php echo $value->{'Visa Expriy'};?></td>
      </tr>
      </table>
    <?php
      }
      }
      ?>
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
        <?php
        {
            if($cursalary!=0&& $salcurr!=null&& $salfreq!=0){
        
?>
            <td><strong>Current Salary</strong></td>
            <td><?php echo " $cursalary";?></td>
            <td><?php echo "  $salcurr";?></td>
            <td><?php echo "  $salfreq";?></td>
        </tr>
        <?php
            }
        }
        ?>
        
    
        <tr>
            <td><strong>Expected Salary</strong></td>
            <td><?php echo "$expsalary";?></td>
            <td><?php echo "$expcurr";?></td>
            <td><?php echo "$expfreq";?></td>
        </tr>
               
    </table>          
          </div>
       </div>
     </div>
     </html>
    