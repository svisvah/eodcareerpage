<?php include "header.php"; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput-jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/css/intlTelInput.css" />

<style>
    #master-head.menu-absolute {
        position: unset;
    }

    .iti.iti--allow-dropdown.iti--show-flags {
        width: 100%;
    }

    .menu-primary>li.menu-item>a {
        padding: 0px 15px;
    }

    .full-height {
        min-height: 40vh;
    }

    .solutz-text {
        color: #1B6DB4;
        background: none;
        -webkit-text-fill-color: unset;
    }

    .career-section .form-wrap.eodformbg h5 {
        color: #F03A71;
        font-size: 36px;
    }

    .career-section .eodformstyle .form-group.btnn {
        margin: 0px !important;
    }

    .career-section #remove-visa {
        width: 100%;
    }

    .c-row {
        justify-content: space-between;
    }

    .career-section .eodformstyle .form-control {
        background: #FFFFFF;
        border-color: #CFD1D8;
        border: 0.5px;
    }

    .career-section .eodformstyle .form-wrap {
        background: none;
        border: none;
        width: 100%;
        max-width: 1080px;
        padding: 0px;
        margin: 0 auto;
        position: relative;
        box-shadow: none;
        border-radius: 0px;
    }

    .career-section.section-padding {
        background: #ECEDF0 !important;
    }

    .section-padding {
        padding: 0px;
    }

    /*  workaround */
    .intl-tel-input {
        display: table-cell;
    }

    .intl-tel-input .selected-flag {
        z-index: 4;
    }

    .intl-tel-input .country-list {
        z-index: 5;
    }

    .salary-div {
        position: relative;
    }

    .currency-sym {
        z-index: 1;
        position: absolute;
        display: flex;
        align-items: center;
        height: 100%;
        font-size: 18px;
        padding: 10px;
    }

    .input-group .intl-tel-input .form-control {
        border-top-left-radius: 4px;
        border-top-right-radius: 0;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 0;
    }
    input[type=file]::file-selector-button {
    border: none;
    margin-right: 18px;
    height: 50px;
    margin-left: -15px;
    background: #1b6db4;
    padding: 10px 30px;
    border-radius: 0px;
    color: #fff;
    cursor: pointer;
    transition: background .2s ease-in-out;
}
button#career-submit {
    width: auto;
    margin: 0 auto;
    background: #F03890;
}
form#career-form {
    padding-bottom: 100px;
}
.add-additional {
    display: flex;
    justify-content: space-between;
}
span.add-more-items:before {
    content: "\F0415";
    font-family: 'Material Design Icons';
    font-size: 28px;
    color: #f03a71;
    font-weight: bold;
    cursor: pointer;
}
span.remove-last:after {
    content: "\F0374";
    font-family: 'Material Design Icons';
    font-size: 28px;
    color: #f03a71;
    font-weight: bold;
    cursor: pointer;
}
h6.my-title {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 12px;
    color: #f03a71;
}
</style>
<div id="main-wrapper" class="page-wrapper">
    <div class="page-header section-padding  full-height pb-0 dbbg">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-md-12 db-logo-bg ">
                    <div class="">
                        <h1 class="solutz-text">CANDIDATE REGISTRATIOM FORM</h1>
                    </div>
                    <div class="empty-space-30 clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include "db-config.php" ?>
    <?php

    $countries = "SELECT * FROM countries";
    $countriesResult = mysqli_query($connection, $countries);
    $countriesResult2 = mysqli_query($connection, $countries);
    $countriesResult3 = mysqli_query($connection, $countries);
    $countriesResult4 = mysqli_query($connection, $countries);
    $countriesResult5 = mysqli_query($connection, $countries);

    $currency = "SELECT name, currency_name, currency_symbol FROM countries";
    $currencyResult = mysqli_query($connection, $currency);
    ?>
    <div class="career-section section-padding">
        <div class="container">
            <div class="row">
                <div class="container eodformstyle">
                    <div class="form-wrap eodformbg">
                        <p class="msg-tag"></p>
                        <form id="career-form" method="POST" action="carrer_back.php">
                            <div class="row">
                                <div class="col-lg-12 pt-50">
                                    <div class=" align-items-center pb-15">
                                        <h5>Resume Headline</h5>
                                        <span>Maximum 50 words</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="resume-headline" id="resume-headline" class="mandatory form-control">
                                                <span id="resume-headline-error" class="error-message"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-1 col-md-6 col-lg-6">
                                            <div class="form-group position-others" style="display:none">
                                                <span class="pos-other-label">Others</span>
                                                <input type="text" name="position-name-others" id="position-name-others" placeholder="" class="mandatory form-control">
                                                <span id="position-others-error" class="error-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class=" align-items-center pb-15">
                                        <h5>Contact Information</h5>
                                    </div>
                                    <div class="">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="first-name">First Name</label>
                                                <input type="text" name="first-name" id="first-name" class="mandatory form-control">
                                                <span id="first-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="last-name">Last Name</label>
                                                <input type="text" name="last-name" id="last-name" class="mandatory form-control">
                                                <span id="last-name-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="address">Street / Address</label>
                                                <input type="text" name="address" id="address" class="mandatory form-control">
                                                <span id="address-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="contact">Contact Number</label>
                                                <input type="text" name="contact" id="contact" class="mandatory form-control">
                                                <input type="hidden" name="country_code" id="country_code" >
                                                <span id="contact-error" class="error-message"></span>                                           
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="city-state">City / State</label>
                                                <input type="text" name="city-state" id="city-state" class="mandatory form-control">
                                                <span id="city-state-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="postcode">Postal Code</label>
                                                <input type="text" name="postcode" id="postcode" class="mandatory form-control">
                                                <span id="postcode-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="form-group  col-md-6">
                                                <label for="work-authority">Your work authority status of current country you are living in?</label>
                                                <select id="work-authority" name="work-authority" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="Citizen">Citizen</option>
                                                    <option value="Permenent Residence">Permenent Residence</option>
                                                    <option value="In other company work permit, need sponsorship to work">In other company work permit, need sponsorship to work</option>
                                                    <option value="In tourist/business/visit visa, need sponsorship to work">In tourist/business/visit visa, need sponsorship to work</option>
                                                </select>
                                                <span id="work-authority-error" class="error-message"></span>

                                            </div>
                                            <div class="form-group  col-md-6">
                                                <label for="holding-visa">Are you holding visa for any other countries</label>
                                                <select id="holding-visa" name="holding-visa" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                <span id="holding-visa-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="form-group visa-yes" style="display:none">
                                                <div class="visa-details">
                                                    <div class="individual-visa row">
                                                        <div class="form-group col-md-4">
                                                            <label for="visa-country">Visa Country</label>

                                                            <select id="visa-country" name="visa-country" class="mandatory form-control">
                                                                <option disabled selected value>Select</option>
                                                                <?php
                                                                if ($countriesResult) {
                                                                    while ($countriesRow = mysqli_fetch_assoc($countriesResult)) { ?>
                                                                        <option value="<?= $countriesRow['name']; ?>"><?= $countriesRow['name']; ?></option>
                                                                <?php }
                                                                } ?>
                                                            </select>
                                                            <span id="visa-country-error" class="error-message"></span>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="visa-type">Visa Type</label>
                                                            <input type="text" name="visa-type" id="visa-type" class="mandatory form-control">
                                                            <span id="visa-type-error" class="error-message"></span>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="visa-expiry">Visa Expiry</label>
                                                            <input type="date" name="visa-expiry" id="visa-expiry" min="<?php echo date("Y-m-d"); ?>" class="mandatory form-control">
                                                            <span id="visa-expiry-error" class="error-message"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div><button class="btn btn-primary" type="button" id="add-visa">Add</button></div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <label for="country">Country</label>
                                                <select id="country" name="country" class="mandatory form-control">
                                                    <option disabled selected value>Select</option>
                                                    <?php
                                                    if ($countriesResult2) {
                                                        while ($countriesRow2 = mysqli_fetch_assoc($countriesResult2)) { ?>
                                                            <option value="<?= $countriesRow2['name']; ?>"><?= $countriesRow2['name']; ?></option>
                                                    <?php }
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="form-group  col-md-6">
                                                <label for="alter-email">Alternative E-mail</label>
                                                <input type="text" name="alter-email" id="alter-email" class="mandatory form-control">
                                                <span id="alter-email-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <label for="email">Email Id</label>
                                                <input type="text" name="email" id="email" class="mandatory form-control">
                                                <span id="email-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group  col-md-6">
                                                <label for="gender">Gender</label>
                                                <select id="gender" name="gender" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="others">Others</option>
                                                </select>

                                                <span id="gender-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <label for="dob">DOB</label>
                                                <input type="date" name="dob" id="dob" class="mandatory form-control">
                                                <span id="dob-error" class="error-message"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class=" align-items-center pb-15">
                                        <h5>Additional Info</h5>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="ava-to-join">Availability to Join</label>
                                                <select id="ava-to-join" name="ava-to-join" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="15 days or less">15 days or less</option>
                                                    <option value="1 Month">1 Month</option>
                                                    <option value="2 Months">2 Months</option>
                                                    <option value="3 Months">3 Months</option>
                                                    <option value="More than 3 Months">More than 3 Months</option>
                                                    <option value="Serving Notice Period">Serving Notice Period</option>
                                                </select>
                                                <span id="ava-to-join-error" class="error-message"></span>
                                            </div>
                                        </div>

                                        <div class="row c-row">
                                            <div class="col-md-6 row form-group">
                                                <label class="col-md-12">Interested to work as Freelancer</label>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="work-freelance" value="yes" />
                                                        <span>Yes</span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="work-freelance" value="no" />
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                                <span id="work-freelance-error" class="error-message"></span>
                                            </div>
                                            <div class="col-md-6 row form-group">
                                                <label class="col-md-12">Interested to be the Corporate Trainer</label>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="corporate-trainee" value="yes" />
                                                        <span>Yes</span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="corporate-trainee" value="no" />
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                                <span id="corporate-trainee-error" class="error-message"></span>
                                            </div>

                                        </div>
                                        <div class="row c-row">
                                            <div class="col-md-6 row form-group">
                                                <label class="col-md-12">Willing to relocate within Country</label>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="within-country" value="yes" />
                                                        <span>Yes</span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="within-country" value="no" />
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                                <span id="within-country-error" class="error-message"></span>
                                            </div>
                                            <div class="col-md-6 row form-group">
                                                <label class="col-md-12">Willing to relocate to any Country</label>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="other-country" value="yes" />
                                                        <span>Yes</span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="other-country" value="no" />
                                                        <span>No</span>
                                                    </label>
                                                    </div>
                                                    <span id="other-country-error" class="error-message"></span>
                                                
                                                <div class="form-group preferrence-country col-md-12" style="display:none">
                                                    <label for="prefrred-country">Preferrence Countries</label>
                                                    <span>Separate with comma</span>
                                                    <input type="text" name="prefrred-country" id="prefrred-country" class="mandatory form-control">
                                                    <span id="prefrred-country-error" class="error-message"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="">Current Salary</label>
                                                <input type="text" name="current-salary" id="current-salary" class="mandatory form-control">
                                                <span id="current-salary-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Curreny</label>
                                                <input type="text" name="current-currency" id="current-currency" class="mandatory form-control">
                                                <span id="current-currency-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Salary Frequency</label>
                                                <select id="current-sf" name="current-sf" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="weekly">Weekly</option>
                                                    <option value="monthly">Monthly</option>
                                                    <option value="yearly">Yearly</option>
                                                </select>
                                                <span id="current-sf-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="name">Expected Salary</label>
                                                <input type="text" name="exp-salary" id="exp-salary" class="mandatory form-control">
                                                <span id="exp-salary-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Curreny</label>
                                                <input type="text" name="exp-currency" id="exp-currency" class="mandatory form-control">
                                                <span id="exp-currency-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Salary Frequency</label>
                                                <select id="exp-sf" name="exp-sf" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="weekly">Weekly</option>
                                                    <option value="monthly">Monthly</option>
                                                    <option value="yearly">Yearly</option>
                                                </select>
                                                <span id="exp-sf-error" class="error-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                <!-- <label class="col-md-12">Are you a fresher</label>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="fresher" value="yes" />
                                                        <span>Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="fresher" value="no" />
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                                <span id="fresher-error" class="error-message"></span>
                                            </div> -->
                                    <div class="add-additional align-items-center pb-15">
                                        <h5>Work Experience</h5><div><span class="add-more-items work-exp"></span><span class="remove-last work-exp"></span></div>
                                    </div>
                                    <div class="row c-row">
                                        <div class="form-group col-md-6 radiobtn ">
                                                <label class="col-md-6">Are you a fresher</label>
                                              <div class="row c-row">  <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="fresher" value="yes">
                                                        <span>Yes</span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>
                                                        <input type="radio" name="fresher" value="no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                              </div>
                                                <span id="fresher-error" class="error-message"></span>
                                            </div>
                                                </div>
                                    <div class="my-work-exp">
                                    <h6 class="my-title"></h6>
                                    

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Role Name</label>
                                                <input type="text" name="role-name" id="role-name" class="mandatory form-control">
                                                <span id="role-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Company Name</label>
                                                <input type="text" name="company-name" id="company-name" class="mandatory form-control">
                                                <span id="company-name-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Client Name</label>
                                                <input type="text" name="client-name" id="client-name" class="mandatory form-control">
                                                <span id="client-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Client Domain</label>
                                                <select name="client-domain" id="client-domain" class="mandatory form-control">
                                                    <option selected disabled value>Select</option>
                                                    <option value="IT Services">IT Services</option>
                                                    <option value="Life Science">Life Science</option>
                                                    <option value="Medical">Medical</option>
                                                    <option value="Media">Media</option>
                                                    <option value="Supply Chain">Supply Chain</option>
                                                    <option value="Retail">Retail</option>
                                                    <option value="Banking">Banking</option>
                                                    <option value="Fintech">Fintech</option>
                                                    <option value="Insurance">Insurance</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                                <span id="client-domain-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <label for="name">Country worked</label>
                                                <select id="country-worked" name="country-worked" class="mandatory form-control">
                                                    <option disabled selected value>Select</option>
                                                    <?php
                                                    if ($countriesResult4) {
                                                        while ($countriesRow2 = mysqli_fetch_assoc($countriesResult4)) { ?>
                                                            <option value="<?= $countriesRow2['country_code']; ?>"><?= $countriesRow2['name']; ?></option>
                                                    <?php }
                                                    } ?>
                                                </select>
                                                <span id="country-worked-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group  col-md-6">
                                                <label for="name">City/State</label>
                                                <select name="worked-city-select" id="worked-city-select" class="mandatory form-control">

                                                </select>
                                                <span id="worked-city-error" class="error-message"></span>
                                                <input style="display:none" type="text" name="worked-city" id="worked-city" class="mandatory form-control">
                                                <span id="worked-city-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <label for="name">From (Month, Year)</label>
                                                <input type="date" name="work-from" id="work-from" class="mandatory form-control">
                                                <span id="work-from-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">To (Month, Year)</label>
                                                <input type="date" id="work-to" name="work-to" class="mandatory form-control">
                                                <span id="work-to-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="name">Currency</label>
                                                        <select id="salary-currency" name="salary-currency" class="mandatory form-control">
                                                             <option disabled selected value>Select</option>
                                                            <?php
                                                            if ($currencyResult) {
                                                                while ($currenncyRow = mysqli_fetch_assoc($currencyResult)) { ?>
                                                                    <option data-sym="<?= $currenncyRow['currency_symbol'] ?>" value="<?= $currenncyRow['name']; ?>"><?= $currenncyRow['name']; ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                        <span id="salary-currency-error" class="error-message"></span>
                                                    </div>
                                                    <div class="form-group align-self-center col-md-1">
                                                        <div class="salary-div">
                                                            <p class="currency-sym">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-7">
                                                        <label for="name">Salary per anum (Gross)</label>
                                                        <input type="text" name="salary-per-anum" id="salary-per-anum" class="mandatory form-control">
                                                        <span id="salary-per-anum-error" class="error-message"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Mode of work</label>
                                                <select id="mode-of-work" name="mode-of-work" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="full-time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                </select>
                                                <span id="mode-of-work-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Work Type</label>
                                                <select id="work-type" name="work-type" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="Permenant">Permenant </option>
                                                    <option value="Contractor">Contractor</option>
                                                    <option value="Freelancer">Freelancer</option>
                                                </select>
                                                <span id="work-type-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Is it your current company</label>
                                                <select id="current-company" name="current-company" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                <span id="current-company-error" class="error-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class="add-additional align-items-center pb-15">
                                        <h5>Education</h5><div><span class="add-more-items edu"></span><span class="remove-last edu"></span></div>
                                    </div>
                                    <div class="my-education">
                                    <h6 class="my-title"></h6>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Education Level</label>
                                                <select id="education-level" name="education-level" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="phd">Phd. (or) Doctorate </option>
                                                    <option value="pg">Post Graduation (or) Masters</option>
                                                    <option value="ug">Under Graduation (or) Bachelors</option>
                                                    <option value="diploma">Diploma</option>
                                                    <option value="highsec">Higher Seconday / Junior College / Grade 12</option>
                                                    <option value="high">High School / Grade 10</option>
                                                </select>
                                                <span id="education-level-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="name">Course</label>
                                                <select id="course" name="course" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="Engineering">Engineering</option>
                                                    <option value="3diploma">3 years Polytechnic Diploma</option>
                                                    <option value="1diploma">1 year Diploma</option>
                                                    <option value="Arts">Arts</option>
                                                    <option value="Science">Science</option>
                                                </select>
                                                <span id="course-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Course Type</label>
                                                <select id="course-type" name="course-type" class="mandatory form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Correspondence">Correspondence</option>
                                                    <option value="Distance Learning">Distance Learning</option>
                                                </select>
                                                <span id="course-type-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Specialization</label>
                                                <select name="special" id="special" class="mandatory form-control">
                                                    <option selected disabled value>Select</option>
                                                    <option value="IT Services">IT Services</option>
                                                    <option value="Computer Science">Computer Science</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                <span id="special-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">

                                                <label for="name">University Name</label>
                                                <input type="text" name="university-name" id="university-name" class="mandatory form-control">
                                                <span id="university-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group  col-md-6">
                                                <label for="name">University Country</label>
                                                <select id="university-country" name="university-country" class="mandatory form-control">
                                                    <option disabled selected value>Select</option>
                                                    <?php
                                                    if ($countriesResult5) {
                                                        while ($countriesRow5 = mysqli_fetch_assoc($countriesResult5)) { ?>
                                                            <option value="<?= $countriesRow5['country_code']; ?>"><?= $countriesRow5['name']; ?></option>
                                                    <?php }
                                                    } ?>
                                                </select>
                                                <span id="university-country-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <div class="row">

                                                    <div class="form-group col-md-4">
                                                        <label for="name">Starting Year</label>

                                                        <input type="date" name="start-year" id="start-year" class="mandatory form-control">
                                                        <span id="start-year-error" class="error-message"></span>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="name">Course Duration</label>
                                                        <input type="text" name="course-duration" id="course-duration" class="mandatory form-control" fdprocessedid="cmius5">
                                                        <span id="course-duration-error" class="error-message"></span>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="name">Graduate Year</label>

                                                        <input type="date" id="graduate-year" name="graduate-year" class="mandatory form-control">
                                                        <span id="graduate-year-error" class="error-message"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Grading Level</label>
                                                <input type="text" name="grade-level" id="grade-level" class="mandatory form-control">
                                                <span id="grade-level-error" class="error-message"></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 pt-50">
                                    <div class="d-flex align-items-center pb-15">
                                        <h5>Skillsets Required</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-md-6 col-lg-6">
                                            <div id="skill-input" class="input-group mb-3">
                                                <input type="text" id="skill" class="form-control" placeholder="Add a skill" aria-label="Add a skill" aria-describedby="add-skill">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" id="add-skill">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-12 col-lg-12">
                                            <span class="error-message" id="skill-sets-error"></span>
                                        </div>
                                        <div class="col-sm-1 col-md-12 col-lg-12">
                                            <div class="mt-3">
                                                <div id="skill-list">
                                                </div>
                                                <input type="hidden" name="skill-sets" id="skill-sets" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class="add-additional align-items-center pb-15">
                                        <h5>Social media participation</h5><div><span class="add-more-items social-med"></span><span class="remove-last social-med"></span></div>
                                    </div>
                                    <div class="my-social-media">
                                        <h6 class="my-title"></h6>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Social Media Name</label>
                                                <input type="text" id="social-media-name" name="social-media-name" class="mandatory form-control">
                                                <span id="social-media-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Url</label>
                                                <input type="text" id="social-media-url" name="social-media-url" class="mandatory form-control">
                                                <span id="social-media-url-error" class="error-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class="add-additional align-items-center pb-15">
                                   
                                        <h5>Certifications</h5><div><span class="add-more-items certi"></span><span class="remove-last certi"></span></div>
                                    </div>
                                  
                                    <div class=" align-items-center pb-15">
                                    <div class="my-certi">
                                    <h6 class="my-title"></h6>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification Name</label>
                                                <input type="text" id="certification-name" name="certification-name" class="mandatory form-control">
                                                <span id="certification-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification Refference Number / ID</label>
                                                <input type="text" id="certification-id" name="certification-id" class="mandatory form-control">
                                                <span id="certification-id" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification URL</label>
                                                <input type="text" id="certification-url" name="certification-url" class="mandatory form-control">
                                                <span id="certification-url-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification Expirty Date</label>
                                                <input type="date" id="certification-expiry" name="certification-expiry" class="mandatory form-control">
                                                <span id="certification-expiry" class="error-message"></span>
                                                <!-- <input class="form-check-input" type="checkbox" id="certification-expiry-no">
                                                <label class="form-check-label" for="certification-expiry-no">
                                                    No Expiry
                                                </label> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                </div>
                                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                <div class="add-additional align-items-center pb-15">
                                        <h5>Accomplishments</h5><div><span class="add-more-items accomp"></span><span class="remove-last accomp"></span></div>
                                    </div>
                                  
                                    <div class=" align-items-center pb-15">
                                    <div class="my-accomp">
                                    <h6 class="my-title"></h6>
                                   
                                    
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Name (Patent / White Paper / Articles / Presentation / Reasearch Projects)</label>
                                                <input type="text" id="accomplishment-name" name="accomplishment-name" class="mandatory form-control">
                                                <span id="accomplishment-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">URL (if any)</label>
                                                <input type="text" id="accomplishment-url" name="accomplishment-url" class="mandatory form-control">
                                                <span id="accomplishment-url" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Upload proofs</label>
                
                                                <input type="file" id="upload-proof" name="upload-proof" class="mandatory form-control" class="upload-proof">
                                               
                                              
                                                <input type="hidden" id="upload-proof-path" name="upload-proof-path" >
                                               
                                               
                                                <span id="upload-proof-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">ID (Patent / White Paper / Articles / Presentation / Reasearch Projects)</label>
                                                <input type="date" id="accomplishment-id" name="accomplishment-id" class="mandatory form-control">
                                                <span id="accomplishment-id" class="error-message"></span>
                                                <!-- <input class="form-check-input" type="checkbox" id="certification-expiry-no">
                                                <label class="form-check-label" for="certification-expiry-no">
                                                    No Expiry
                                                </label> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Recogonized body / Institution Name / Organization Name</label>
                                                <input type="text" id="accomplishment-reg" name="accomplishment-reg" class="mandatory form-control">
                                                <span id="accomplishment-reg-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group  col-md-6">
                                                <div class="row">

                                                    <div class="form-group col-md-6">
                                                        <label for="name">Start Time</label>
                                                        <input type="date" name="acc-start" id="acc-start" class="mandatory form-control">
                                                        <span id="acc-start-error" class="error-message"></span>
                                                    </div>
                                                   
                                                    <div class="form-group col-md-6">
                                                        <label for="name">End Time</label>
                                                        <input type="date" id="acc-end" name="acc-end" class="mandatory form-control">
                                                        <span id="acc-end-error" class="error-message"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                               
                                               
                                        <div class="row">
                                            
                                            <div class="form-group col-md-6">
                                                <label for="name">Accomplishment Expirty Date</label>
                                                <input type="date" id="acc-expiry" name="acc-expiry" class="mandatory form-control">
                                                <span id="acc-id" class="error-message"></span>
                                                <!-- <input class="form-check-input" type="checkbox" id="certification-expiry-no">
                                                <label class="form-check-label" for="certification-expiry-no">
                                                    No Expiry
                                                </label> -->
                                            </div>
                                        </div>
                                        </div>
                                                </div>

                                <div class="col-lg-12 pt-50">
                                    <div class="col-md-12 text-center submit-btn">
                                        <button type="button" id="career-submit" class="btn btn-primary btn-block">Submit
                                        </button>
                                        <span id="responsetext"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>skill-sets
</div>
<div id="country-options" style="display: none;">
    <?php
    if ($countriesResult3) {
        while ($countriesRow = mysqli_fetch_assoc($countriesResult3)) {
            echo "<option value='" . $countriesRow['name'] . "'>" . $countriesRow['name'] . "</option>";
        }
    }
    ?>
</div>

<script>

$(document).ready(function() {
        $("body").delegate("#add-skill", "click", function() {
            var skill = $("#skill").val().trim();
            if (skill !== "") {
                if($("#skill-sets").val()){
                    $("#skill-sets").val($("#skill-sets").val() + ", " + skill);
                } else{
                    $("#skill-sets").val(skill);
                }
                var skillList = $("#skill-list");
                $("<div class='skill-in'><span class='skill-name'>" + skill + "</span><span class='remove-skill mdi-close'></span></div>").appendTo(skillList);
                $("#skill").val(""); // Clear the input
            }
        });
    });

    $("body").delegate("span.remove-skill.mdi-close", "click", function() {
        jQuery(this).parent('.skill-in').remove();
    });

    $("body").delegate("select[name='salary-currency']", "change", function() {
        var element = $(this).find('option:selected');
        var symbol = element.attr("data-sym");
        $('.currency-sym').text(symbol);
    });
    $("body").delegate("select[name='country-worked']", "change", function() {
        var selectedVal = $(this).val();
        $.ajax({
            type: 'post',
            url: 'careers-form.php',
            data: 'country-code=' + selectedVal + '&action=getstates',
            success: function(data) {
                console.log(typeof(data));
                if (data != '  []') {
                    let allState = JSON.parse(data);
                    // Clear the state select options
                    $('#worked-city-select').empty();
                    $('#work-city').hide();
                    // Add the retrieved state options to the state select
                    $('#worked-city-select').append('<option value="">Select a state</option>'); // Add a default option

                    allState.forEach(function(state) {
                        $('#worked-city-select').append($('<option>', {
                            value: state.state_code,
                            text: state.state_name
                        }));
                    });
                } else {
                    $('#worked-city-select').empty();
                    $('#work-city').show();
                    $('#work-city-select').hide();
                }

            }
        });
    });

    // $("body").delegate("#career-submit", "click", function() {
    //     $('.error-message').text('');
    //     $('.mandatory').each(function(index, item) {
    //         if($(item).val() == ''){
    //             $(item).next('.error-message').text("Required")
    //         }
    //     });
    // })

    $("body").delegate("span.add-more-items.work-exp", "click", function() {
        var len = $('.my-work-exp').length + 1;
        $(".my-work-exp").first().clone().insertAfter("div.my-work-exp:last");
        $("div.my-work-exp:last .my-title").text("Work Experience "+len);
    });

    $("body").delegate("span.add-more-items.edu", "click", function() {
        var len = $('.my-education').length + 1;
        $(".my-education").first().clone().insertAfter("div.my-education:last");
        $("div.my-education:last .my-title").text("Education "+len);
    });

    $("body").delegate("span.add-more-items.social-med", "click", function() {
        var len = $('.my-social-media').length + 1;
        $(".my-social-media").first().clone().insertAfter("div.my-social-media:last");
        $("div.my-social-media:last .my-title").text("Social Media "+len);
    });

    $("body").delegate("span.remove-last.social-med", "click", function() {
        var len = $('.my-social-media').length;
        if(len == 1){
        }else{
            $("div.my-social-media:last").remove();
        }
    });

    $("body").delegate("span.remove-last.edu", "click", function() {
        var len = $('.my-education').length;
        if(len == 1){
        }else{
            $("div.my-education:last").remove();
        }
    });

    $("body").delegate("span.remove-last.work-exp", "click", function() {
        var len = $('.my-work-exp').length;
        if(len == 1){
        }else{
            $("div.my-work-exp:last").remove();
        }
    });
    $("body").delegate("span.add-more-items.certi", "click", function() {
        var len = $('.my-certi').length + 1;
        $(".my-certi").first().clone().insertAfter("div.my-certi:last");
        $("div.my-certi:last .my-title").text("Certifications"+len);
    });

    $("body").delegate("span.remove-last.certi", "click", function() {
        var len = $('.my-certi').length;
        if(len == 1){
        }else{
            $("div.my-certi:last").remove();
        }
    });
    $("body").delegate("span.add-more-items.accomp", "click", function() {
        var len = $('.my-accomp').length + 1;
        $(".my-accomp").first().clone().insertAfter("div.my-accomp:last");
        $("div.my-accomp:last .my-title").text("Accomplishment"+len);
    });

    $("body").delegate("span.remove-last.accomp", "click", function() {
        var len = $('.my-accomp').length;
        if(len == 1){
        }else{
            $("div.my-accomp:last").remove();
        }
    });

  


    $("body").delegate("input[name='other-country']", "click", function() {
        var selectedValue = $(this).val();
        if (selectedValue == 'yes') {
            $('.form-group.preferrence-country').show();
        } else {
            $('.form-group.preferrence-country').hide();
        }
    });

    $("body").delegate("select[name='holding-visa']", "change", function() {
        var selectedValue = $(this).val();
        if (selectedValue == 'yes') {
            $('.visa-yes').show();
        } else {
            $('.visa-yes').hide();
        }
    });

    // $("#contact").intlTelInput({
    //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
    // });

    $("body").delegate("button#remove-visa", "click", function() {
        $(this).parent().parent('.individual-visa.additional').remove();
    })

    $(document).ready(function() {
        let counter = 2; // Initialize the counter
        var countryOptions = $("#country-options").html();
        // Handler for the 'Add More' button click
        $("#add-visa").on("click", function() {
            // Create a new set of visa details fields with incremented names
            var newVisaDetails = `
            <div class="individual-visa additional row">
                <div class="form-group col-md-4">
                    <label for="visa-country${counter}">Visa Country</label>
                    <select id="visa-country${counter}" name="visa-country${counter}" class="mandatory form-control">
                        <option disabled selected value>Select</option>
                        ${countryOptions} 
                    </select>
                    <span id="visa-country${counter}-error" class="error-message"></span>
                </div>
                <div class="form-group col-md-3">
                    <label for="visa-type${counter}">Visa Type</label>
                    <input type="text" name="visa-type${counter}" id="visa-type${counter}" class="mandatory form-control">
                    <span id="visa-type${counter}-error" class="error-message"></span>
                </div>
                <div class="form-group col-md-3">
                    <label for="visa-expiry${counter}">Visa Expiry</label>
                    <input type="date" name="visa-expiry${counter}" id="visa-expiry${counter}" min="<?php echo date("Y-m-d"); ?>" class="mandatory form-control">
                    <span id="visa-expiry${counter}-error" class="error-message"></span>
                </div>
                <div class="form-group col-md-2 align-self-center btnn">
                    <button class="btn btn-danger" type="button" id="remove-visa">Remove</button>
                </div>
            </div>
        `;

            // Append the new set of visa details to the parent div
            $(".visa-details").append(newVisaDetails);

            counter++;
        });
    });
</script>

<script>
$(document).on("change", "#upload-proof", function() {
    var fileInput = $(this);
    var file = fileInput.prop("files")[0];
   
   
    $(this).next("#upload-proof-path").addClass("currentclass");
    
   


    // Check if a file is selected
    if (file) {
        var formData = new FormData();
        formData.append('file', file);

        // Send file to PHP using AJAX
        $.ajax({
            url: 'fileupload.php', // Change this to the path of your PHP file
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $(".currentclass").val(response);
                console.log("File path received from PHP:", response);
                $("#upload-proof-path").removeClass("currentclass");

                // Log hidden field values after they have been set by the AJAX response
                
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    } else {
        // No file selected
        console.log("No file selected");
    }
});

</script>
<script>
    $(document).ready(function () {
    $("#career-submit").click(function () {
        // Reset previous error messages
        $(".error-message").text("");

        // Validation logic
        var isValid = true;

        // Resume Headline validation
        var resumeHeadline = $("#resume-headline").val().trim();
        var wordCount = resumeHeadline.split(/\s+/).length; // Count words in the input

        if (resumeHeadline === "") {
          $("#resume-headline-error").text("Resume Headline is required.");
            isValid = false;
        } else if (wordCount > 50) {
          $("#resume-headline-error").text("Resume Headline should not exceed 50 words.");
             isValid = false;
        }


        // First Name validation
        var firstName = $("#first-name").val().trim();
        if (firstName === "") {
            $("#first-name-error").text("First Name is required.");
            isValid = false;
        }

        // Last Name validation
        var lastName = $("#last-name").val().trim();
        if (lastName === "") {
            $("#last-name-error").text("Last Name is required.");
            isValid = false;
        }

        // Address validation
        var address = $("#address").val().trim();
        if (address === "") {
            $("#address-error").text("Address is required.");
            isValid = false;
        }

        // Contact Number validation
        var contactNumber = $("#contact").val().trim();
        if (contactNumber === "") {
            $("#contact-error").text("Contact Number is required.");
            isValid = false;
        } else if (!/^\d{10}$/.test(contactNumber)) {
            $("#contact-error").text("Invalid Contact Number.");
            isValid = false;
        }

        // City/State validation
        var cityState = $("#city-state").val().trim();
        if (cityState === "") {
            $("#city-state-error").text("City/State is required.");
            isValid = false;
        }

        // Postal Code validation
        var postalCode = $("#postcode").val().trim();
        if (postalCode === "") {
            $("#postcode-error").text("Postal Code is required.");
            isValid = false;
        } else if (!/^\d{6}$/.test(postalCode)) {
            $("#postcode-error").text("Invalid Postal Code.");
            isValid = false;
        }

        // Work Authority validation
        var workAuthority = $("#work-authority").val();
        if (workAuthority === null) {
            $("#work-authority-error").text("Work Authority status is required.");
            isValid = false;
        }

        // Holding Visa validation
        var holdingVisa = $("#holding-visa").val();
        if (holdingVisa === null) {
            $("#holding-visa-error").text("Holding Visa information is required.");
            isValid = false;
        }

        // Visa Country, Type, and Expiry validation if holding visa
        if (holdingVisa === "yes") {
            var visaCountry = $("#visa-country").val();
            var visaType = $("#visa-type").val().trim();
            var visaExpiry = $("#visa-expiry").val();

            if (visaCountry === null) {
                $("#visa-country-error").text("Visa Country is required.");
                isValid = false;
            }
            if (visaType === "") {
                $("#visa-type-error").text("Visa Type is required.");
                isValid = false;
            }
            if (visaExpiry === "") {
                $("#visa-expiry-error").text("Visa Expiry Date is required.");
                isValid = false;
            } else if (new Date(visaExpiry) < new Date()) {
                $("#visa-expiry-error").text("Visa has expired.");
                isValid = false;
            }
        }

        // Country validation
        var country = $("#country").val();
        if (country === null) {
            $("#country-error").text("Country is required.");
            isValid = false;
        }

        // Alternative Email validation
        var alternateEmail = $("#alter-email").val().trim();
        if (alternateEmail !== "" && !isValidEmail(alternateEmail)) {
            $("#alter-email-error").text("Invalid Alternative Email.");
            isValid = false;
        }

        // Email validation
        var email = $("#email").val().trim();
        if (email === "" || !isValidEmail(email)) {
            $("#email-error").text("Invalid Email.");
            isValid = false;
        }

        // Gender validation
        var gender = $("#gender").val();
        if (gender === null) {
            $("#gender-error").text("Gender is required.");
            isValid = false;
        }

        // Date of Birth validation
        var dob = $("#dob").val();
        if (dob === "") {
            $("#dob-error").text("Date of Birth is required.");
            isValid = false;
        } else if (new Date(dob) > new Date()) {
            $("#dob-error").text("Invalid Date of Birth.");
            isValid = false;
        }
        var avatojo=$("#ava-to-join").val();
        if(avatojo === null)
        {
            $("#ava-to-join-error").text("Please select your availability");
            isValid=false;
        }
        if($('input[type=radio][name=work-freelance]:checked').length == 0)
        {
            $("#work-freelance-error").text("Please select your option");
            isValid=false;
        }
        if($('input[type=radio][name=corporate-trainee]:checked').length == 0)
        {
            $("#corporate-trainee-error").text("Please select a option");
            isValid=false;
        }
        if($('input[type=radio][name=within-country]:checked').length == 0)
        {
            $("#within-country-error").text("Please select a option");
            isValid=false;
        }
        if($('input[type=radio][name=other-country]:checked').length == 0)
        {
            $("#other-country-error").text("Please select a option");
            isValid=false;
        }
        var pref_country=$("#prefrred-country").val();
        if(pref_country==null)
        {
            $("#prefrred-country-error").text("Please type the countries");
            isValid=false;
        }

        let skillSets = $('#skill-sets').val();
        if (!skillSets) {
            $('#skill-sets-error').text("Please Choose the Skill sets");
            isValid = false;
        }
        if($('input[type=radio][name=fresher]:checked').length == 0)
        {
            $("#fresher-error").text("Please select a option");
            isValid=false;
        }
//Work experiene validation.
if($('input[type=radio][name=fresher]:checked').val() == "no")
{
        $(".my-work-exp").each(function()
        {
            var role=$(this).find("input[name='role-name']");
            var company=$(this).find("input[name='company-name']");
            var client=$(this).find("input[name='client-name']");
            var domain=$(this).find("select[name='client-domain']");
            var workcountry=$(this).find("select[name='country-worked']");
            var workcity=$(this).find("select[name='worked-city-select']");
            var workfrom=$(this).find("input[name='work-from']");
            var workto=$(this).find("input[name='work-to']");
            var salcur=$(this).find("select[name='salary-currency']");
            var salanum=$(this).find("input[name='salary-per-anum']");
            var mow=$(this).find("select[name='mode-of-work']");
            var worktype=$(this).find("select[name='work-type']");
            var curcom=$(this).find("select[name='current-company']");

            var rolval=role.val();
            var comval=company.val();
            var clientval=client.val();
            var domainval=domain.val()
            var workcounval=workcountry.val();
            var workcityval=workcity.val();
            var workfromval=workfrom.val();
            var worktoval=workto.val();
            var salcurval=salcur.val();
            var salanumval=salanum.val();
            var mowal=mow.val();
            var typeval=worktype.val();
            var curcomval=curcom.val();

            if(rolval.length===0)
            {
                role.next(".error-message").text("Pleae enter your role name");
                isValid=false;
            }
            if(comval.length===0)
            {
                company.next(".error-message").text("Pleae enter your company name");
                isValid=false;
            }
            if(clientval.length===0)
            {
                client.next(".error-message").text("Pleae enter your client name");
                isValid=false;
            }
            if(domainval===null)
            {
                domain.next(".error-message").text("Please select the domain");
                isValid=false;
            }
            if(workcounval===null)
            {
                workcountry.next(".error-message").text("Please select the work country");
                isValid=false;
            }
            if(workcityval===null)
            {
                workcity.next(".error-message").text("Please select the work city");
                isValid=false;
            }
            if(workfromval.length===0)
            {
                workfrom.next(".error-message").text("Please enter the work from date");
                isValid=false;
            }
            if(worktoval.length===0)
            {
                workto.next(".error-message").text("Please enter the work to date");
                isValid=false;

            }
            if(salcurval===null)
            {
                salcur.next(".error-message").text("Pleae choose the salary currency");
                isValid=false;
            }
            if(salanumval.length===0)
            {
                salanum.next(".error-message").text("Pleae enter your salary");
                isValid=false;
            }
            if(mowal===null)
            {
                mow.next(".error-message").text("Please choose the mode of work");
                isValid=false;
            }
            if(typeval===null)
            {
                worktype.next(".error-message").text("Please choose the work type");
                isValid=false;
            }
            if(curcomval===null)
            {
                curcom.next(".error-message").text("Please choose whether it is your current company or not");
                isValid=false;
            }

        });
    }

    //Education validation
    $(".my-education ").each(function()
        {
                var level = $(this).find("select[name='education-level']");
                var course = $(this).find("select[name='course']");
                var coursetype = $(this).find("select[name='course-type']");
                var specialization = $(this).find("select[name='special']");
                var university_name = $(this).find("input[name='university-name']");
                var universitu_country = $(this).find("select[name='university-country']");
                var start_year = $(this).find("input[name='start-year']");
                var course_duration = $(this).find("input[name='course-duration']");
                var graduate_year = $(this).find("input[name='graduate-year']");
                var grade_level = $(this).find("input[name='grade-level']");

                var levelval=level.val();
                var courseval=course.val();
                var coursetypeval=coursetype.val();
                var specializationval=specialization.val();
                var universityval=university_name.val();
                var unicounval=universitu_country.val();
                var startval=start_year.val();
                var coursedurval=course_duration.val();
                var graduval=graduate_year.val();
                var gradeval=grade_level.val();

            
            if(levelval===null)
            {
                level.next(".error-message").text("Pleae select your education level");
                isValid=false;
            }
            if(courseval===null)
            {
                course.next(".error-message").text("Pleae select your course");
                isValid=false;
            }
            if(coursetypeval===null)
            {
                coursetype.next(".error-message").text("Pleae select your course type");
                isValid=false;
            }
            if(specializationval===null)
            {
                specialization.next(".error-message").text("Please select your specialization");
                isValid=false;
            }
            if(universityval.length===0)
            {
                university_name.next(".error-message").text("Please enter the university name");
                isValid=false;
            }
            if(unicounval===null)
            {
                universitu_country.next(".error-message").text("Please select the university country");
                isValid=false;
            }
            if(startval.length===0)
            {
                start_year.next(".error-message").text("Please enter the starting date");
                isValid=false;
            }
            if(coursedurval.length===0)
            {
                course_duration.next(".error-message").text("Please enter the the course duration date");
                isValid=false;

            }
            if(graduval.length===0)
            {
                graduate_year.next(".error-message").text("Pleease enter your graduation date");
                isValid=false;
            }
            if(gradeval.length===0)
            {
                grade_level.next(".error-message").text("Pleae enter your grade level");
                isValid=false;
            }
        });


        $(".my-social-media .row").each(function() {
            var nameInput = $(this).find("input[name='social-media-name']");
            var urlInput = $(this).find("input[name='social-media-url']");
            var nameValue = nameInput.val().trim();
            var urlValue = urlInput.val().trim();
            

            // Check if either name or URL is provided
            if ((nameValue === "" && urlValue !== "") || (nameValue !== "" && urlValue === "")) {
                
                nameInput.next(".error-message").text("Please fill out both fields.");
                urlInput.next(".error-message").text("Please fill out both fields.");
                isValid = false;
            }  
            

        
        });
        $(".my-certi").each(function() {
            var certiname = $(this).find("input[name='certification-name']");
            var certiid = $(this).find("input[name='certification-id']");
            var certinameValue = certiname.val().trim();
            var certiidValue = certiid.val().trim();
            

            // Check if either name or URL is provided
            if ((certinameValue === "" && certiidValue !== "") ) {
                
                certiname.next(".error-message").text("Please enter your certification name.");
                isValid = false;
            }  
            if((certiidValue === "" && certinameValue!=="")){
                certiid.next(".error-message").text("Please enter your certification id");
                isValid=false; 
            }
            

        
        });
        $(".my-accomp").each(function() {
            var accompname = $(this).find("input[name='accomplishment-name']");
            var uploadproof = $(this).find("input[name='upload-proof-path']");
            var startdate =  $(this).find("input[name='acc-start']");
            var enddate = $(this).find("input[name='acc-end']");

            var accompnamevalue=accompname.val();
            var uploadproofval=uploadproof.val();
            var startdateval=startdate.val();
            var enddateval=enddate.val();
            

            // Check if either name or URL is provided
            if (( accompnamevalue !== "" && uploadproofval === "" && startdateval ==="" && enddateval ==="") ) {
                
                uploadproof.next(".error-message").text("Please upload the proof.");
                startdate.next(".error-message").text("Please enter the start date.");
                enddate.next(".error-message").text("Please enter the end date.");
                
                isValid = false;
            }  
            if (( uploadproofval !== "" && accompnamevalue === "" && startdateval ==="" && enddateval ==="") ) {
                
                accompname.next(".error-message").text("Please enter your accomplishment name.");
                startdate.next(".error-message").text("Please enter the start date.");
                enddate.next(".error-message").text("Please enter the end date.");
                
                isValid = false;
            } 
            if (( accompnamevalue === "" && uploadproofval === "" && startdateval !=="" && enddateval ==="") ) {
                accompname.next(".error-message").text("Please enter your accomplishment name.");
                uploadproof.next(".error-message").text("Please upload the proof.");
                
                enddate.next(".error-message").text("Please enter the end date.");
                
                isValid = false;
            } 
            if (( accompnamevalue === "" && uploadproofval === "" && startdateval ==="" && enddateval !=="") ) {

                accompname.next(".error-message").text("Please enter your accomplishment name.");
                uploadproof.next(".error-message").text("Please upload the proof.");
                startdate.next(".error-message").text("Please enter the start date.");
               
                
                isValid = false;
            } 
            

        
        });



        



        

        // If validation passes, make an AJAX request
        if (isValid) {
            var formData = $("#career-form").serialize(); // Replace "yourFormId" with your form's ID
//social media
            var socialMediaData = [];
            var index=1;
            $(".my-social-media .row").each(function() {
                
                var socialMediaName = $(this).find("input[name='social-media-name']").val();
                var socialMediaURL = $(this).find("input[name='social-media-url']").val();
                socialMediaData.push({
                    "socialMedia":index,
                    "name": socialMediaName,
                    "url": socialMediaURL
                });
                index++;
                
            });

//Education
var educationData = [];
            var index=1;
            $(".my-education").each(function() {
                
                var level = $(this).find("select[name='education-level']").val();
                var course = $(this).find("select[name='course']").val();
                var coursetype = $(this).find("select[name='course-type']").val();
                var specialization = $(this).find("select[name='special']").val();
                var university_name = $(this).find("input[name='university-name']").val();
                var universitu_country = $(this).find("select[name='university-country']").val();
                var start_year = $(this).find("input[name='start-year']").val();
                var course_duration = $(this).find("input[name='course-duration']").val();
                var graduate_year = $(this).find("input[name='graduate-year']").val();
                var grade_level = $(this).find("input[name='grade-level']").val();
                
                educationData.push({
                    "Education Details ":index,
                    "Education Level": level,
                    "Course": course,
                    "CourseType": coursetype,
                    "Specialization":specialization,
                    "UniversityName":university_name,
                    "UniversityCountry":universitu_country,
                    "Startyear":start_year,
                    "Courseduration":course_duration,
                    "GraduateYear":graduate_year,
                    "GradingLevel":grade_level
                });
                index++;
                
            });
  
var WorkExperienceData = [];
            var index=1;
            $(".my-work-exp").each(function() {
                
                var role = $(this).find("text[name='role-name']").val();
                var company = $(this).find("text[name='company-name']").val();
                var client = $(this).find("text[name='client-name']").val();
                var clientdom = $(this).find("select[name='client-domain']").val();
                var countryworked = $(this).find("select[name='country-worked']").val();
                var workedcity = $(this).find("select[name='worked-city']").val();
                var workfrom = $(this).find("input[name='work-from']").val();
                var workto = $(this).find("input[name='work-to']").val();
                var salarycur = $(this).find("select[name='salary-currency']").val();
                var salpa = $(this).find("input[name='salary-per-anum']").val();
                var mow=    $(this).find("select[name='mode-of-work']").val();
                var worktype=    $(this).find("select[name='mode-of-work']").val();
                var curremp=    $(this).find("select[name='current-company']").val();
                

                
                WorkExperienceData.push({
                    "Work experience Details ":index,
                    "Role Name": role,
                    "Company Name": company,
                    "Client Name": client,
                    "Client Domain":clientdom,
                    "Country worked":countryworked,
                    "City worked":workedcity,
                    "Worked from":workfrom,
                    "Worked to":workto,
                    "Salary currency":salarycur,
                    "Salary per annum":salpa,
                    "Mode of work":mow,
                    "Work type":worktype,
                    "Current Employee":curremp

                });
                index++;
                
            });

//Certifications
var CertificationData = [];
            var index=1;
            $(".my-certi").each(function() {
                
                var cername = $(this).find("#certification-name").val();
                var cerid = $(this).find("#certification-id").val();
                var cerurl = $(this).find("#certification-url").val();
                var cerexp = $(this).find("#certification-expiry").val();


                CertificationData.push({
                    "Certification ":index,
                    "Certification Name":cername,
                    "Certification id":cerid,
                    "Certification Url":cerurl,
                    "Certification Expiry":cerexp
                });
                index++;
            });

           

//Accomplishment            
var AccomplishmentData = [];
var index = 1;

$(".my-accomp").each(function() {
    var accname = $(this).find("#accomplishment-name").val();
    var accurl = $(this).find("#accomplishment-url").val();
    var accid = $(this).find("#accomplishment-id").val();
    var accreg = $(this).find("#accomplishment-reg").val();
    var uplpro = $(this).find("#upload-proof-path").val();
    var accsta = $(this).find("#acc-start").val();
    var accend = $(this).find("#acc-end").val();
    var accexp = $(this).find("#acc-expiry").val();

    AccomplishmentData.push({
        "Accomplishment ": index,
        "Accomplishment Name": accname,
        "Accomplishment Url": accurl,
        "Upload docs": uplpro,
        "Accomplishment id": accid,
        "Accomplishment reg": accreg,
        "Starting Date": accsta,
        "Ending Date": accend,
        "Accomplishment Expiry": accexp
    });
    index++;
});





var socialMediaJSON = JSON.stringify(socialMediaData);
var educationJSON = JSON.stringify(educationData);
var WorkExperienceJSON = JSON.stringify(WorkExperienceData);
var certificateJSON=JSON.stringify(CertificationData);
var accomplishmentJSON=JSON.stringify(AccomplishmentData);




var formData=new FormData();
formData.append("resumeheading", $("#resume-headline").val());
formData.append("firstname", $("#first-name").val());
formData.append("lastname", $("#last-name").val());
//formData.append("file", file); // Assuming 'file' is the file input element
formData.append("formaddress", $("#address").val());
formData.append("contact",$("#contact").val());
formData.append("country_code",$("#country_code").val());
formData.append("citystate", $("#city-state").val());
formData.append("postcode", $("#postcode").val());
formData.append("workauthority", $("#work-authority").val());
formData.append("holdingvisa", $("#holding-visa").val());
formData.append("country", $("#country").val());
formData.append("alternateEmail", $("#alter-email").val());
formData.append("email", $("#email").val().trim());
formData.append("gender", $("#gender").val());
formData.append("dob", $("#dob").val());
formData.append("avatojo", $("#ava-to-join").val());
formData.append("workfreelance", $('input[type=radio][name=work-freelance]:checked').val());
formData.append("corporatetrainee", $('input[type=radio][name=corporate-trainee]:checked').val());
formData.append("withincountry", $('input[type=radio][name=within-country]:checked').val());
formData.append("othercountry", $('input[type=radio][name=other-country]:checked').val());
formData.append("pref_country", $("#prefrred-country").val());
formData.append("currentsal", $('#current-salary').val());
formData.append("currentcur", $('#current-currency').val());
formData.append("currentsf", $('#current-sf').val());
formData.append("expsal", $('#exp-salary').val());
formData.append("expcur", $('#exp-currency').val());
formData.append("expsf", $('#exp-sf').val());
formData.append("skillSets", $('#skill-sets').val());
// formData.append("certiname", $("#certification-name").val());
// formData.append("certiid", $("#certification-id").val());
// formData.append("certiurl", $("#certification-url").val());
// formData.append("certexp", $("#certification-expiry").val());
// formData.append("accompname", $("#accomplishment-name").val());
// formData.append("accompurl", $("#accomplishment-url").val());
// formData.append("accompreg", $("#accomplishment-reg").val());
// formData.append("accstart", $("#acc-start").val());
// formData.append("accend", $("#acc-end").val());
// formData.append("accexpiry", $("#acc-expiry").val());
// formData.append("file", file);
formData.append("socialmedia",socialMediaJSON);
formData.append("education",educationJSON);
formData.append("workexperience",WorkExperienceJSON);
formData.append("certification",certificateJSON);
formData.append("accomplishment",accomplishmentJSON);

console.log()






            $.ajax({
     type: "POST",
    url: "carrer_back.php",
    data:formData,
    contentType: false,
    processData: false,
    success: function (response) {
        
    

        // Check the response from the server
        if (response === "success") {
            $("#responsetext").html("<p >Submitted</p>");
            
        } else {
            // Handle other types of responses or errors from the server
           console.log("Error: " + response);
        }
    },
    error: function (xhr, status, error) {
        // Handle AJAX errors
        console.log("AJAX Error: " + status + " - " + error);
    }
});

        }
    });

    // Email validation function
    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
}); 
</script>

<script>
$(document).ready(function() {
    // Attach a change event listener to the radio buttons
    $('input[type=radio][name=fresher]').change(function() {
        // Check if the "Yes" radio button is selected
        if (this.value === 'yes') {
            // Disable all input fields within the .my-work-exp container
            $('.my-work-exp input[type=text], .my-work-exp select').prop('disabled', true);
        } else {
            // Enable all input fields within the .my-work-exp container
            $('.my-work-exp input[type=text], .my-work-exp select').prop('disabled', false);
        }
    });
});

</script>

<script>
var instance = $("#contact")
instance.intlTelInput();
$("#contact").on("blur", function() {
    $('#country_code').val(instance.intlTelInput('getSelectedCountryData').dialCode);
})
                                                </script>

<?php include "footer.php"; ?>