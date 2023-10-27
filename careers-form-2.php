<?php include "header.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput-jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/css/intlTelInput.css" />
<script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
button#staff-augment-submit {
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
                        <form id="career-form">
                            <div class="row">
                                <div class="col-lg-12 pt-50">
                                    <div class=" align-items-center pb-15">
                                        <h5>Resume Headline</h5>
                                        <span>Maximum 50 words</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="resume-headline" id="resume-headline" class="form-control">
                                                <span id="resume-headline-error" class="error-message"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-1 col-md-6 col-lg-6">
                                            <div class="form-group position-others" style="display:none">
                                                <span class="pos-other-label">Others</span>
                                                <input type="text" name="position-name-others" id="position-name-others" placeholder="" class="form-control">
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
                                                <label for="name">First Name</label>
                                                <input type="text" name="first-name" id="first-name" class="form-control">
                                                <span id="first-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Last Name</label>
                                                <input type="text" name="last-name" id="last-name" class="form-control">
                                                <span id="last-name-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Street / Address</label>
                                                <input type="text" name="address" id="address" class="form-control">
                                                <span id="address-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Contact Number</label>
                                                <input type="text" name="contact" id="contact" class="form-control">
                                                <span id="contact-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">City / State</label>
                                                <input type="text" name="city-state" id="city-state" class="form-control">
                                                <span id="city-state-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Postal Code</label>
                                                <input type="text" name="postcode" id="postcode" class="form-control">
                                                <span id="postcode-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="form-group  col-md-6">
                                                <label for="name">Your work authority status of current country you are living in?</label>
                                                <select id="work-authority" name="work-authority" class="form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="Citizen">Citizen</option>
                                                    <option value="Permenent Residence">Permenent Residence</option>
                                                    <option value="In other company work permit, need sponsorship to work">In other company work permit, need sponsorship to work</option>
                                                    <option value="In tourist/business/visit visa, need sponsorship to work">In tourist/business/visit visa, need sponsorship to work</option>
                                                </select>
                                                <span id="work-authority-error" class="error-message"></span>

                                            </div>
                                            <div class="form-group  col-md-6">
                                                <label for="name">Are you holding visa for any other countries</label>
                                                <select id="holding-visa" name="holding-visa" class="form-control">
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
                                                            <label for="name">Visa Country</label>

                                                            <select id="visa-country" name="visa-country" class="form-control">
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
                                                            <label for="name">Visa Type</label>
                                                            <input type="text" name="visa-type" id="visa-type" class="form-control">
                                                            <span id="visa-type-error" class="error-message"></span>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="name">Visa Expiry</label>
                                                            <input type="date" name="visa-expiry" id="visa-expiry" min="<?php echo date("Y-m-d"); ?>" class="form-control">
                                                            <span id="visa-expiry-error" class="error-message"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div><button class="btn btn-primary" type="button" id="add-visa">Add</button></div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <label for="name">Country</label>
                                                <select id="country" name="country" class="form-control">
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
                                                <label for="name">Alternative E-mail</label>
                                                <input type="text" name="alter-email" id="alter-email" class="form-control">
                                                <span id="alter-email-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <label for="name">Email Id</label>
                                                <input type="text" name="email" id="email" class="form-control">
                                                <span id="email-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group  col-md-6">
                                                <label for="name">Gender</label>
                                                <select id="gender" name="gender" class="form-control">
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
                                                <label for="name">DOB</label>
                                                <input type="date" name="dob" id="dob" class="form-control">
                                                <span id="dob-error" class="error-message"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                                </form>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class=" align-items-center pb-15">
                                        <h5>Additional Info</h5>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Availability to Join</label>
                                                <select id="ava-to-join" name="ava-to-join" class="form-control">
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
                                                <div class="form-group preferrence-country col-md-12" style="display:none">
                                                    <label for="name">Preferrence Countries</label>
                                                    <span>Separate with comma</span>
                                                    <input type="text" name="prefrred-country" id="prefrred-country" class="form-control">
                                                    <span id="prefrred-country-error" class="error-message"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="name">Current Salary</label>
                                                <input type="text" name="current-salary" id="current-salary" class="form-control">
                                                <span id="current-salary-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Curreny</label>
                                                <input type="text" name="current-currenty" id="current-currenty" class="form-control">
                                                <span id="current-currenty-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Salary Frequency</label>
                                                <select id="current-sf" name="current-sf" class="form-control">
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
                                                <input type="text" name="exp-salary" id="exp-salary" class="form-control">
                                                <span id="exp-salary-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Curreny</label>
                                                <input type="text" name="exp-currenty" id="exp-currenty" class="form-control">
                                                <span id="exp-currenty-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Salary Frequency</label>
                                                <select id="exp-sf" name="current-sf" class="form-control">
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
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class="add-additional align-items-center pb-15">
                                        <h5>Work Experience</h5><div><span class="add-more-items work-exp"></span><span class="remove-last work-exp"></span></div>
                                    </div>
                                    <div class="my-work-exp">
                                    <h6 class="my-title"></h6>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Role Name</label>
                                                <input type="text" name="role-name" id="role-name" class="form-control">
                                                <span id="role-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Company Name</label>
                                                <input type="text" name="company-name" id="company-name" class="form-control">
                                                <span id="company-name-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Client Name</label>
                                                <input type="text" name="client-name" id="client-name" class="form-control">
                                                <span id="client-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Client Domain</label>
                                                <select name="client-domain" id="client-domain" class="form-control">
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
                                                <select id="country-worked" name="country-worked" class="form-control">
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
                                                <select name="worked-city-select" id="worked-city-select" class="form-control">

                                                </select>
                                                <input style="display:none" type="text" name="worked-city" id="worked-city" class="form-control">
                                                <span id="worked-city-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <label for="name">From (Month, Year)</label>
                                                <input type="date" name="work-from" id="work-from" class="form-control">
                                                <span id="work-from-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">To (Month, Year)</label>
                                                <input type="text" id="work-to" name="work-to" class="form-control">
                                                <span id="work-to-error" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="name">Currency</label>
                                                        <select id="salary-currency" name="salary-currency" class="form-control">
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
                                                        <input type="text" name="salary-per-anum" id="salary-per-anum" class="form-control">
                                                        <span id="salary-per-anum-error" class="error-message"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Mode of work</label>
                                                <select id="mode-of-work" name="mode-of-work" class="form-control">
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
                                                <select id="work-type" name="work-type" class="form-control">
                                                    <option disabled selected values>Select</option>
                                                    <option value="Permenant">Permenant </option>
                                                    <option value="Contractor">Contractor</option>
                                                    <option value="Freelancer">Freelancer</option>
                                                </select>
                                                <span id="work-type-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Is it your current company</label>
                                                <select id="current-company" name="current-company" class="form-control">
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
                                                <select id="education-level" name="education-level" class="form-control">
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

                                                <label for="name">Education Level</label>
                                                <select id="course" name="course" class="form-control">
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
                                                <select id="course-type" name="course-type" class="form-control">
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
                                                <select name="special" id="special" class="form-control">
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
                                                <input type="text" name="university-name" id="university-name" class="form-control">
                                                <span id="university-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group  col-md-6">
                                                <label for="name">University Country</label>
                                                <select id="university-country" name="university-country" class="form-control">
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

                                                        <input type="date" name="start-year" id="start-year" class="form-control">
                                                        <span id="start-year-error" class="error-message"></span>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="name">Course Duration</label>
                                                        <input type="text" name="course-duration" id="course-duration" class="form-control" fdprocessedid="cmius5">
                                                        <span id="course-duration-error" class="error-message"></span>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="name">Graduate Year</label>

                                                        <input type="date" id="graduate-year" name="graduate-year" class="form-control">
                                                        <span id="graduate-year-error" class="error-message"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Grading Level</label>
                                                <input type="text" name="grade-level" id="grade-level" class="form-control">
                                                <span id="grade-level-error" class="error-message"></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 pt-50">
                                    <div class=" align-items-center pb-15">
                                        <h5>Skills</h5>
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
                                                <input type="text" id="social-media-name" name="social-media-name" class="form-control">
                                                <span id="social-media-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Url</label>
                                                <input type="text" id="social-media-url" name="social-media-url" class="form-control">
                                                <span id="social-media-url-error" class="error-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class=" align-items-center pb-15">
                                        <h5>Certifications</h5>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification Name</label>
                                                <input type="text" id="certification-name" name="certification-name" class="form-control">
                                                <span id="certification-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification Refference Number / ID</label>
                                                <input type="text" id="certification-id" name="certification-id" class="form-control">
                                                <span id="certification-id" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification URL</label>
                                                <input type="text" id="certification-url" name="certification-url" class="form-control">
                                                <span id="certification-url-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification Expirty Date</label>
                                                <input type="date" id="certification-expiry" name="certification-expiry" class="form-control">
                                                <span id="certification-id" class="error-message"></span>
                                                <!-- <input class="form-check-input" type="checkbox" id="certification-expiry-no">
                                                <label class="form-check-label" for="certification-expiry-no">
                                                    No Expiry
                                                </label> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn pt-50">
                                    <div class=" align-items-center pb-15">
                                        <h5>Accomplishments</h5>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Name (Patent / White Paper / Articles / Presentation / Reasearch Projects)</label>
                                                <input type="text" id="accomplishment-name" name="accomplishment-name" class="form-control">
                                                <span id="accomplishment-name-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">URL (if any)</label>
                                                <input type="text" id="accomplishment-url" name="accomplishment-url" class="form-control">
                                                <span id="accomplishment-url" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Upload proofs</label>
                                                <input type="file" id="upload-proof" name="upload-proof" class="form-control">
                                                <span id="upload-proof-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">ID (Patent / White Paper / Articles / Presentation / Reasearch Projects)</label>
                                                <input type="date" id="accomplishment-id" name="accomplishment-id" class="form-control">
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
                                                <input type="text" id="accomplishment-reg" name="accomplishment-reg" class="form-control">
                                                <span id="accomplishment-reg-error" class="error-message"></span>
                                            </div>
                                            <div class="form-group  col-md-6">
                                                <div class="row">

                                                    <div class="form-group col-md-6">
                                                        <label for="name">Start Time</label>
                                                        <input type="date" name="acc-start" id="acc-start" class="form-control">
                                                        <span id="acc-start-error" class="error-message"></span>
                                                    </div>
                                                   
                                                    <div class="form-group col-md-6">
                                                        <label for="name">End Time</label>
                                                        <input type="date" id="acc-end" name="acc-end" class="form-control">
                                                        <span id="acc-end-error" class="error-message"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="form-group col-md-6">
                                                <label for="name">Certification Expirty Date</label>
                                                <input type="date" id="acc-expiry" name="acc-expiry" class="form-control">
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
                                        <button type="button" id="staff-augment-submit" class="btn btn-primary btn-block">Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    $("#contact").intlTelInput({
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
    });

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
                    <select id="visa-country${counter}" name="visa-country${counter}" class="form-control">
                        <option disabled selected value>Select</option>
                        ${countryOptions} 
                    </select>
                    <span id="visa-country${counter}-error" class="error-message"></span>
                </div>
                <div class="form-group col-md-3">
                    <label for="visa-type${counter}">Visa Type</label>
                    <input type="text" name="visa-type${counter}" id="visa-type${counter}" class="form-control">
                    <span id="visa-type${counter}-error" class="error-message"></span>
                </div>
                <div class="form-group col-md-3">
                    <label for="visa-expiry${counter}">Visa Expiry</label>
                    <input type="date" name="visa-expiry${counter}" id="visa-expiry${counter}" min="<?php echo date("Y-m-d"); ?>" class="form-control">
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
    




    
<?php include "footer.php"; ?>

