    firstname: $("#first-name").val(),
    lastname:$("#last-name").val(),
    address:$("#address").val(),
    contact:$("#contact").val(),
    citystate:$("#city-state"),
    postcode:$("#postcode"),
    workauthority:$("#work-authority"),
    holdingvisa:$("#holding-visa"),
    country : $("#country").val(),
    alternateEmail : $("#alter-email").val().trim(),
    email : $("#email").val().trim(),
    gender  :$("#gender").val(),
    dob :$("#dob").val(),
    avatojo:$("#ava-to-join").val(),
    workfreelance:$('input[type=radio][name=work-freelance]:checked').val(),
    corporatetrainee:$('input[type=radio][name=corporate-trainee]:checked').val(),
    withincountry:$('input[type=radio][name=within-country]:checked'),
    othercountry:$('input[type=radio][name=other-country]:checked'),
    pref_country:$("#prefrred-country").val(),
    currentsal:$('#current-salary').val(),
    currentcur:$('#current-currency').val(),
    currentsf:$('#current-sf').val(),
    expsal:$('#exp-salary').val(),
    expcur:$('#exp-currency').val(),
    expsf:$('#exp-sf').val(),
    certiname:$("#certification-name").val(),
    certiid:$("#certification-id").val(),
    certiurl:$("#certification-url").val(),
    certexp:$("#certification-expiry").val(),
    accompname:$("#accomplishment-name").val(),
    accompurl:$("#accomplishment-url").val(),
    uploadproof:$("#upload-proof")[0].files[0],
    accompreg:$("#accomplishment-reg").val(),
    accstart:$("#acc-start").val(),
    accend:$("#acc-end").val(),
    accexpiry:$("#acc-expiry").val(),
    skillSets :$('#skill-sets').val(),
    socialmedia:socialMediaJSON,
    educationdata: educationJSON,
    workexperience : WorkExperienceJSON

    

$resume_heading=$_POST[' resumeheading'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$citystate = $_POST['citystate'];
$postcode = $_POST['postcode'];
$workauthority = $_POST['workauthority'];
$holdingvisa = $_POST['holdingvisa'];
$country = $_POST['country'];
$alternateEmail = $_POST['alternateEmail'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$avatojo = $_POST['avatojo'];
$workfreelance = $_POST['workfreelance'];
$corporatetrainee = $_POST['corporatetrainee'];
$withincountry = $_POST['withincountry'];
$othercountry = $_POST['othercountry'];
$pref_country = $_POST['pref_country'];
$currentsal = $_POST['currentsal'];
$currentcur = $_POST['currentcur'];
$currentsf = $_POST['currentsf'];
$expsal = $_POST['expsal'];
$expcur = $_POST['expcur'];
$expsf = $_POST['expsf'];
$certiname = $_POST['certiname'];
$certiid = $_POST['certiid'];
$certiurl = $_POST['certiurl'];
$certexp = $_POST['certexp'];
$accompname = $_POST['accompname'];
$accompurl = $_POST['accompurl'];
$uploadproof = $_FILES['uploadproof']; // File upload
$accompreg = $_POST['accompreg'];
$accstart = $_POST['accstart'];
$accend = $_POST['accend'];