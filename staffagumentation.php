<?php include "header.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<!-- Main Wrapper -->

<div id="main-wrapper" class="page-wrapper">
    <div class="page-header section-padding  full-height pb-0 dbbg">
        <video autoplay loop muted plays-inline class="dbback-video">
            <source src="images/videos/DBA-BG.mp4">
        </video>

        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-md-12 db-logo-bg ">
                    <div class="heading-wrapper wow fadeInDown " data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                        <p class="db-bannertext">We made your job smarter</p>
                        <h1 class="solutz-text">Staff Augmentation</h1>
                        <div class="">
                            <p class="db-bannertext">we provide flexible staff augmentation services that allow you to
                                access on-demand resources and skills, become an extension of your IT and non-IT
                                businesses. </p>
                        </div>
                    </div>
                    <div class="btn-wrapper wow fadeIn" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeIn;">
                        <a class="btn btn-outline-primary" data-toggle="modal" data-target="#dba-video-modal" href="#"><i class="fas fa-play-circle"></i>watch
                            video</a>
                    </div>

                    <!-- modal starts -->

                    <!-- <div class="modal fade" id="dba-video-modal" tabindex="-1" role="dialog"
                        aria-labelledby="videoModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/sFUwdfGNweE" allowfullscreen width="560"
                                            height="315"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- modal ends -->
                    <div class="empty-space-30 clearfix"></div>
                </div>
                <!-- End Col -->
            </div><!-- End Row -->
        </div>
    </div>


    <div class="page-header dblogos-slide">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="slider">
                        <div class="slide-track">
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/adobe.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/python.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/wordpress.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/dotnet.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/php.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/figma.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/node.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/adobe.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/python.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/wordpress.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/dotnet.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/php.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/figma.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/staff-augmentation/staffaug-logos/node.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include "db-config.php" ?>
    <?php

    $positionName = "SELECT id, name FROM staffagumentation_position_names";
    $positionNameResult = mysqli_query($connection, $positionName);

    $dbaTech = "SELECT id, name, icon_typ FROM dba_technology";
    $dbaTechsResult = mysqli_query($connection, $dbaTech);
    ?>
    <div class="about-section section-padding" style="background-color: #8EC5FC; background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);">
        <div class="container">
            <div class="row">
                <div class="container eodformstyle">
                    <h3 class="formtitletext">Tell your needs in simple 8 steps below to serve you better</h3>
                    <div class="form-wrap eodformbg">
                        <p class="msg-tag"></p>
                        <form id="staff-aug-form">
                            <div class="row">
                                <div class="col-lg-12 pt-50">
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="btn formstep"> Step 1</div>
                                        <h5>Position Name</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <span class="pos-other-none" style="visibility:hidden">Others</span>
                                                <select id="position-name" name="position-name" class="form-control">
                                                    <option disabled selected value>Position Name</option>
                                                    <?php
                                                    if ($positionNameResult) {
                                                        while ($positionRow = mysqli_fetch_assoc($positionNameResult)) { ?>
                                                            <option value="<?php $positionRow['name']; ?>"><?php $positionRow['name']; ?></option>
                                                    <?php }
                                                    } ?>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center pb-15">
                                                <span id="position-name-error" class="error-message"></span>
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
                                <div class="col-lg-12 pt-50">
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="btn formstep"> Step 2</div>
                                        <h5>No of Candidates Required</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <select id="no-candidates-req" name="no-candidates-req" class="form-control">
                                                    <option disabled selected value>Select no of candidates</option>
                                                    <option value="below-10">Below 10</option>
                                                    <option value="20-40">20 - 40</option>
                                                    <option value="40-60">40 - 60</option>
                                                    <option value="60-80">60 - 80</option>
                                                    <option value="above-100">Above 100</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center pb-15">
                                        <span class="error-message" id="candidates-error"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12 pt-50">
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="btn formstep"> Step 3</div>
                                        <h5>Expertise Level</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <select id="expertise-level" name="expertise-level" class="form-control">
                                                    <option disabled selected value>Choose the option</option>
                                                    <option value="Level-0 (Freshers)">Level-0 (Freshers)</option>
                                                    <option value="Level-1 (1-2 years exp)">Level-1 (1-2 years exp)</option>
                                                    <option value="Level-2 (3-5 years exp)">Level-2 (3-5 years exp)</option>
                                                    <option value="Level-3 (5+ years exp)">Level-3 (5+ years exp) </option>
                                                    <option value="Level-4 (8+ Technology & Leadership exp)">Level-4 (8+ Technology & Leadership exp)</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center pb-15">
                                        <span class="error-message" id="expertise-level-error"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12 pt-50">
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="btn formstep"> Step 3</div>
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
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="btn formstep"> Step 5</div>
                                        <h5>Work Location</h5>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-1 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="work-location" value="on-site" />
                                                    <span>On-site (work in your country)</span>
                                                </label>
                                                <div class="form-group wrk-location" style="display:none">
                                                    <label class="req-field" id="work-label" for="name">Work Country</label>
                                                    <input type="text" name="work-country" id="work-country" placeholder="Enter the work country" class="form-control">
                                                    <span id="work-country-error" class="error-message"></span>
                                                    <label class="req-field" id="work-label" for="name">Work City</label>
                                                    <input type="text" name="work-city" id="work-city" placeholder="Enter the work country" class="form-control">
                                                    <span id="work-city-error" class="error-message"></span>
                                                </div>
                                                <div class="form-group wrk-location" style="display:none">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="on-site-check">
                                                        <label class="form-check-label" for="on-site-check">
                                                            We agree to provide required Infrastructure, Instruments & Software licenses for this IT Staff to work in our office premises. We may provide the sponsor letters & other legal assistance for IT Staff visa processing. However, EasyOutDesk will completely own all travel tasks & ensure IT Staff is available at your site
                                                        </label>
                                                    </div>
                                                    <span id="on-site-check-error" class="error-message"></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-1 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="work-location" value="remote" />
                                                    <span>Remote (To work from Easy Outdesk' Secured ODC)</span>
                                                </label>
                                                <span class="note-loc">This Will Cut your cost to nearly half.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center pb-15">
                                        <span class="error-message" id="work-location-error"></span>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn ">
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="btn formstep"> Step 6</div>
                                        <h5>Work Type</span></h5>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-1 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="work-type" value="full-time" />
                                                    <span>Full Time</span>
                                                </label>
                                                <div class="full-time" style="display:none">
                                                    <div class="form-group">
                                                        <select id="work-hours" name="work-hours" class="form-control">
                                                            <option disabled selected value>Choose work hours Required per day</option>
                                                            <option value="8(single shift)">8(single shift) </option>
                                                            <option value="16(2shifts)">16(2shifts)</option>
                                                            <option value="24(3shifts)">24(3shifts)</option>

                                                        </select>
                                                        <span id="work-hours-error" class="error-message"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <select id="work-days" name="work-days" class="form-control">
                                                            <option disabled selected value>Choose the days</option>
                                                            <option value="Weekdays ">Weekdays</option>
                                                            <option value="Weekend  ">Weekend</option>
                                                            <option value="Entire Week ">Entire Week</option>
                                                        </select>
                                                        <span id="work-days-error" class="error-message"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <select id="work-start" name="work-start" class="form-control">
                                                            <option disabled selected value>Our weekday starts on</option>
                                                            <option value="Sunday">Sunday</option>
                                                            <option value="Monday">Monday</option>
                                                        </select>
                                                        <span id="work-start-error" class="error-message"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xs-6 col-sm-1 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="work-type" value="part-time" />
                                                    <span>Part Time/Freelancing</span>
                                                </label>
                                                <div class="form-group part-time" style="display:none">
                                                    <select id="work-hours-type" name="work-hours-type" class="form-control">
                                                        <option disabled selected value>Choose work hours</option>
                                                        <option value="std-hours">Standard Hours Daily</option>
                                                        <option value="free-hours">Free Hours</option>
                                                    </select>
                                                    <span id="work-hours-type-error" class="error-message"></span>
                                                </div>
                                                <div class="std-hours" style="display:none">
                                                    <div class="form-group">
                                                        <select id="work-days-per-week" name="work-days-per-week[]" class="form-control" multiple>
                                                            <option disabled selected value>Choose work required days per week</option>
                                                            <option value="Monday">Monday</option>
                                                            <option value="Tuesday ">Tuesday</option>
                                                            <option value="Wednesday ">Wednesday</option>
                                                            <option value="Thursday ">Thursday</option>
                                                            <option value="Friday ">Friday</option>
                                                            <option value="Saturday ">Saturday</option>
                                                            <option value="Sunday ">Sunday</option>
                                                        </select>
                                                        <span id="work-days-per-week-error" class="error-message"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="req-field" id="daily-support-label" for="name">Daily Support hours needed</label>
                                                        <select id="daily-support-from" name="daily-support-from" class="form-control">
                                                            <option disabled selected value>From</option>
                                                            <?php for ($i = 1; $i <= 24; $i++) { ?>
                                                                <option value="<?php echo $i; ?>"><?php echo $i . ' Hours'; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <span id="daily-support-from-error" class="error-message"></span>
                                                        <select id="daily-support-to" name="daily-support-to" class="form-control">
                                                            <option disabled selected value>To</option>
                                                            <?php for ($i = 1; $i <= 24; $i++) { ?>
                                                                <option value="<?php $i; ?>"><?php $i . ' Hours'; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <span id="daily-support-to-error" class="error-message"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group free-hours" style="display:none">
                                                    <label class="req-field" id="custom-time-label" for="name">Please provide your customized work time required</label>
                                                    <input type="text" name="custom-time" id="custom-time" placeholder="" class="form-control">
                                                    <span id="custom-time-error" class="error-message"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center pb-15">
                                        <span class="error-message" id="work-type-error"></span>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn ">
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="btn formstep"> Step 7</div>
                                        <h5>Duration</h5>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-1 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="duration" value="long-term" />
                                                    <span>Long Term (>6 months)</span>
                                                </label>
                                                <div class="form-group long-term" style="display:none">
                                                    <label class="req-field" id="how-many-months-req" for="name">How many Months / Days required</label>
                                                    <input type="text" name="mons-days-req" id="mons-days-req-long" placeholder="" class="form-control">
                                                    <span id="mons-days-req-error" class="error-message"></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-1 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="duration" value="short-term" />
                                                    <span>Short Term (< 6 months)</span>
                                                </label>
                                                <div class="form-group short-term" style="display:none">
                                                    <label class="req-field" id="mons-days-req" for="name">How many Months / Days required</label>
                                                    <input type="text" name="mons-days-req" id="mons-days-req-short" placeholder="" class="form-control">
                                                    <span id="mons-days-req-error" class="error-message"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center pb-15">
                                        <span class="error-message" id="duration-error"></span>
                                    </div>
                                </div>

                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn mt-50">
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="btn formstep"> Step 4</div>
                                        <h5 class="">Contact Information</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-md-5 col-lg-5">
                                            <div class="form-group">
                                                <label class="req-field" id="email-label" for="name">Login Name (If already created)</label>
                                                <input type="text" name="email" id="email" placeholder="Email-ID" class="form-control">
                                                <span id="login-email" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-2 col-lg-2">
                                            <div class="or-image">
                                                <image src="images/eod-img/or-img.png" alt="Or" />
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-5 col-lg-5">
                                            <div class="form-group">
                                                <label class="req-field" id="email-label" for="name">New Login Name (If not created
                                                    already)</label>
                                                <input type="text" name="new-email" id="new-email" placeholder="Email-ID" class="form-control">
                                                <span id="login-new-email" class="error-message"></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="req-field" id="name-label" for="name">Full Name</label>
                                                <input type="text" name="full-name" id="full-name" placeholder="Enter full name" class="form-control">
                                                <span id="login-name" class="error-message"></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="req-field" id="contant-number-label" for="name">Contact Number</label>
                                                <input type="text" name="contact-number" id="contact-number" placeholder="Enter your contact number" class="form-control">
                                                <span id="login-contact-no" class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-12 col-lg12">
                                            <span id="contact-info" class="error-message"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-50">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center pb-15">
                                                <div class="btn formstep feedback">FEEDBACK</div>
                                                <h5 class="">How do you know about Easy Outdesk <span class="title-additional">(Optional)</span></h5>
                                            </div>
                                            <div class="form-group">
                                                <select id="dropdown" name="staff-known-source" class="form-control">
                                                    <option disabled selected value>Select any one</option>
                                                    <option value="Friends">Friends </option>
                                                    <option value="Already had EasyOutDesk service">Already had EasyOutDesk service</option>
                                                    <option value="LinkedIN">LinkedIN</option>
                                                    <option value="Facebook">Facebook</option>
                                                    <option value="Google">Google</option>
                                                    <option value="Told by EasyOutDesk">Told by EasyOutDesk</option>
                                                </select>
                                                <span id="dba-known" class="error-message"></span>
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

    <div class="features-section section-padding  ">
        <div class="container">
            <div class="row clearfix justify-content-center">
                <div class="col-lg-12">
                    <div class="heading-wrapper with-separator">
                        <h2 class="sideheading-thin">Staff Augmentation Service (Staffing) </h2>
                        <div class="lead-text">
                            <p>At Easy Outdesk, we provide flexible staff augmentation services that allow you to
                                access on-demand resources and skills, become an extension of your IT and non-IT
                                businesses. Whether you need professionals with specific skill sets to fill talent gaps
                                or additional support for your existing projects, our staff augmentation service team is
                                here to help you strike the perfect balance between project progress and
                                cost-effectiveness.
                            </p>
                            <p>With our staff augmentation services, you can easily build your team up and down based on
                                your current development needs, avoiding the costly and time-consuming recruitment
                                processes and the paperwork hassle of on-site hiring. <br><br>As a leading IT staff
                                augmentation service provider, Easy Outdesk offers a range of staffing solutions on
                                demand, ensuring you receive relevant staffing support without overpaying for redundant
                                recruitment stages.</p>
                            <P>
                                Our remote developers seamlessly join your in-house development processes, assisting
                                your staff in desktop, mobile, or web product development. We provide the support and
                                assistance you need right now, allowing you to focus on your core business objectives.
                            </P>
                        </div>
                    </div>
                    <!-- End Heading -->
                </div><!-- End Col -->
            </div><!-- End Row -->
        </div>
    </div>

    <div class="features-section section-padding worldmap-bg">
        <div class="container">
            <div class="row clearfix ">
                <div class="col-lg-9">
                    <div class="heading-wrapper with-separator">
                        <ul class="list-style-one lead-text">
                            <h5 class="mb-4 staff-aug-services-title">Our Services (Staff Augmentation)</h5>
                            <li><b>Onsite Support : </b>Our Technical Associates will be placed in your organization’s
                                site anywhere in the world according to your requirement and among your other employees
                                with EasyOutDesk payroll.
                            <li>
                            <li><b>Remote Support : </b>Our Technical Associates will be aligned to your organization’s
                                daily activity. Your needs will be supported from remote countries, Offshore Development
                                Center (ODC) with high class Security, Reliability & Performance Ability. Hence reducing
                                your employment management costs in deep volume.</li>
                            <li><b>Full Time :</b> Our full-time staff augmentation service seamlessly integrates
                                skilled professionals into your team, effectively making them an extension of your
                                full-time workforce, ensuring ongoing project success and long-term growth</li>
                            <li><b>Freelancing :</b> Service connects you with independent professionals to augment your
                                team, offering flexibility and specialised skills for project-based work.</li>
                            <li><b>Short-Term Staff Augmentation :</b> When you have urgent hiring needs for tech
                                talent,
                                our short-term staff augmentation model is ideal. We have a candidate base of top
                                talent ready to take on the job within a week, providing you with immediate support.
                            </li>
                            <li><b>Long-Term Extended Team :</b> For stable cooperation and long-term projects, we offer
                                custom recruitment solutions. You can hire developers with the required hard and
                                soft skills, and while you or your project manager supervise task completion, we
                                take care of the rest.</li>
                        </ul>
                    </div>
                </div>

                <!-- End Heading -->
                <div class="d-lg-none d-xl-block empty-space-30"></div>
            </div><!-- End Col -->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 lead-text">

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="image-wrapper">
                    <!-- <img src="images/svg/real-estate.svg" alt=""> -->
                </div>
            </div>
        </div><!-- End Row -->
    </div>


    <div class="features-section section-padding mt-50 ">
        <div class="container">
            <h5 class="sideheading-thin text-center pb-50">Benefits of Staff Augmentation </h5>
            <div class="row clearfix justify-content-center">
                <div class="col-lg-3 col-sm-1">
                    <div class="benefits-staug">
                        <div class="card" style=" border: none;">
                            <div class="card-body ">
                                <h5 class="card-title">No Recruitment Hassles</h5>
                                <p class="card-text"> We handle the screening process and send you approved CVs,
                                    saving you the hassle of searching and recruiting vetted development talent.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-1">
                    <div class="benefits-staug">
                        <div class="card " style=" border: none;">
                            <div class="card-body ">
                                <h5 class="card-title">Lower Operational Costs</h5>
                                <p class="card-text">By leveraging our IT augmentation services, you can reduce spending on
                                    office space, equipment, and taxes. Pay for what drives the most value for your company.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-1">
                    <div class="benefits-staug">
                        <div class="card " style=" border: none;">
                            <div class="card-body ">
                                <h5 class="card-title">Fewer Legal Hassles</h5>
                                <p class="card-text">As the official employers of your hires within our IT augmentation
                                    services, we take care of all legal responsibilities and documentation, ensuring a
                                    hassle-free experience for your business..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-1">
                    <div class="benefits-staug">
                        <div class="card " style=" border: none;">
                            <div class="card-body ">
                                <h5 class="card-title">Access to Vetted Talent</h5>
                                <p class="card-text">Easy Outdesk provides immediate access to a vast talent pool of
                                    certified software specialists at affordable costs. Amplify your team’s capabilities
                                    with highly skilled professionals.</p>
                            </div>
                        </div>
                    </div class="benefits-staug">
                </div>

                <div class="col-lg-3 col-sm-1">
                    <div class="benefits-staug">
                        <div class="card " style=" border: none;">
                            <div class="card-body ">
                                <h5 class="card-title">Aggressive Deadlines</h5>
                                <p class="card-text"> When you’re chasing stringent deadlines, our team of dedicated
                                    developers ramps up their technical capacity to deliver the project on time.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-1">
                    <div class="benefits-staug">
                        <div class="card " style=" border: none;">
                            <div class="card-body ">
                                <h5 class="card-title">Full Control</h5>
                                <p class="card-text">We encourage you to actively participate in the screening process and
                                    cherry-pick your team members. This allows you to manage project success and stay
                                    updated on all changes, maintaining full control over your projects.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-1">
                    <div class="benefits-staug">
                        <div class="card " style=" border: none;">
                            <div class="card-body ">
                                <h5 class="card-title">Add Extra Force in Your Existing Project</h5>
                                <p class="card-text">Augment your existing team with extra talent to deliver a high-quality
                                    project within your timeline. Leverage our IT team augmentation services to build custom
                                    teams with a diverse set of skills that cover your business needs.</p>
                            </div>
                        </div>
                    </div class="benefits-staug">
                </div>

                <div class="col-lg-3 col-sm-1">
                    <div class="benefits-staug">
                        <div class="card " style=" border: none;">
                            <div class="card-body ">
                                <h5 class="card-title">Vendor Transition</h5>
                                <p class="card-text">If you’re looking for a new technology provider to launch your
                                    solution, we can assist you in a smooth and effective vendor transition. We seamlessly
                                    take over your project in the middle of your journey, ensuring a seamless transition and
                                    continued progress.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="features-section section-padding50 mb-lg-5">
        <div class="container">
            <div class="row clearfix justify-content-center ">
                <div class="col-lg-12 ">
                    <div class="partner-sec align-middle text-center pb-30">
                        <p class="">Partner with Easy Outdesk for efficient and cost-effective staff augmentation
                            services that
                            empower your business with the right talent at the right time. Contact us today to learn
                            more and take your projects to new heights of success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php /*


<!-- Form Starts -->

<div class="about-section section-padding" style="background: #C7CACD;">
    <div class="container">
        <div class="row">
            <div class="container eodformstyle">
                <h3 class="text-center">Tell your needs in simple 5 steps below to serve you better</h3>
                <div class="form-wrap eodformbg">
                    <form id="survey-form">
                        <div class="row">
                            <div class="col-sm-1 col-md-6 col-lg-12 radiobtn mt-50">
                                <p class="btn bg-primary"> Step 1</p>
                                <h5 class="pb-30">Position Name</h5>
                                <div class="row">
                                    <div class="col-sm-1 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label id="number-label" for="number">Select Position</label>
                                            <select id="dropdown" name="role" class="form-control" required>
                                                <option disabled selected value>Select</option>
                                                <option value="student">1</option>
                                                <option value="job">2</option>
                                                <option value="learner">3</option>
                                                <option value="preferNo">4</option>
                                                <option value="other">5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-1 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label id="name-label" for="name">Others</label>
                                            <input type="text" name="name" id="name" placeholder="Enter your name"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 pt-50">
                                <div>
                                    <p class="btn bg-primary"> Step 2</p>
                                    <h5 class="pb-30">No of Candidates Required</h5>
                                    <div class="row">
                                        <div class="col-sm-1 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label id="number-label" for="number">Select Candidates Required</label>
                                                <select id="dropdown" name="role" class="form-control" required>
                                                    <option disabled selected value>Select</option>
                                                    <option value="student">1</option>
                                                    <option value="job">2</option>
                                                    <option value="learner">3</option>
                                                    <option value="preferNo">4</option>
                                                    <option value="other">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-30">
                                    <p class="btn bg-primary"> Step 3</p>
                                    <h5 class="">Work Type</h5>
                                    <div class=" mt-30 radiobtn">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-1 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio">
                                                    <span>Full Time</span>
                                                </label>
                                            </div>

                                            <div class="col-xs-6 col-sm-1 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio">
                                                    <span>Freelancing</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 pt-30">
                                        <p class="btn bg-primary"> Step </p>
                                        <h5 class="pb-30">Where did you hear about us (Optional)</h5>
                                        <div class="form-group">
                                            <label>Select from below</label>
                                            <select id="dropdown" name="role" class="form-control" required>
                                                <option disabled selected value>Select</option>
                                                <option value="student">1</option>
                                                <option value="job">2</option>
                                                <option value="learner">3</option>
                                                <option value="preferNo">4</option>
                                                <option value="other">5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <button type="submit" id="submit" class="btn btn-primary btn-block">Submit
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

<!-- Form Ends -->

*/ ?>
<script>
    $("body").delegate("select#position-name", "change", function() {
        if ($(this).find(":selected").val() == 'others') {
            $('.form-group.position-others').show();
        } else {
            $('.form-group.position-others').hide();
        }
    });
    $("body").delegate("input[name='work-location']", "click", function() {
        var selectedValue = $(this).val();
        if (selectedValue == 'on-site') {
            $('.form-group.wrk-location').show();
        } else {
            $('.form-group.wrk-location').hide();
        }
    });

    $("body").delegate("input[name='work-type']", "click", function() {
        var selectedValue = $(this).val();
        if (selectedValue == 'full-time') {
            $('.full-time').show();
            $('.std-hours').hide();
            $('.part-time').hide();
            $('.free-hours').hide();
            $("select[name='work-hours-type']").val($("select[name='work-hours-type']").defaultValue);
        } else {
            $('.full-time').hide();
        }
        if (selectedValue == 'part-time') {
            $('.part-time').show();
            $('.full-time').hide();
        } else {
            $('.part-time').hide();
        }
    });

    $("body").delegate("select[name='work-hours-type']", "change", function() {
        var selectedValue = $(this).val();
        if (selectedValue == 'std-hours') {
            $('.std-hours').show();
            $('.free-hours').hide();

        } else {
            $('.std-hours').hide();
        }

        if (selectedValue == 'free-hours') {
            $('.free-hours').show();
            $('.std-hours').hide();
        } else {
            $('.free-hours').hide();
        }
    });

    $("body").delegate("input[name='duration']", "click", function() {
        var selectedValue = $(this).val();
        if (selectedValue == 'long-term') {
            $('.form-group.long-term').show();
            $('.form-group.short-term').hide();
        } else {
            $('.form-group.long-term').hide();
        }

        if (selectedValue == 'short-term') {
            $('.form-group.short-term').show();
            $('.form-group.long-term').hide();
        } else {
            $('.form-group.short-term').hide();
        }
    });
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

    function validateEmail() {
        let existCustomer = $("input#email").val();
        let newCustomer = $('input#new-email').val();
        let fullName = $('input#full-name').val();
        let contactNumber = $('input#contact-number').val();
        let email = '';
        let caction = '';
        if (existCustomer) {
            caction = 'exist';
            email = existCustomer;
        } else {
            if (newCustomer) {
                caction = 'new';
                email = newCustomer;
            }
        }
        $.ajax({
            type: 'post',
            url: 'dba-service-form.php',
            data: 'email=' + email + '&action=email-val&caction=' + caction,
            success: function(response) {
                console.log(caction)
                console.log(response)
                if (caction == 'new' && response == '  false') {
                    $("span#login-new-email").text("Email Address already exist.  Try login");
                }
                if (caction == "exist" && response == "  false") {
                    console.log("test")
                    $("span#login-email").text("No account present with this email address try to login");
                }
                if (response == "  true") {
                    submitForm();
                }
            }
        });
    }

    function submitForm() {
        $.ajax({
            type: 'post',
            url: 'staff-augment-form.php',
            data: $('#staff-aug-form').serialize() + '&action=submit',
            success: function(response) {
                if (response == "  true") {
                    $('p.msg-tag').addClass('success');
                    $("p.msg-tag").text("Thank you for submitting");
                } else {
                    $('p.msg-tag').addClass('error');
                    $("p.msg-tag").text("Something went Wrong");
                }
                jQuery('.skill-in').remove();
                $('.part-time').hide();
                $('.full-time').hide();
                $('.std-hours').hide();
                $('.free-hours').hide();
                $('.free-hours').hide();
                $('.std-hours').hide();
                $('.form-group.long-term').hide();
                $('.form-group.short-term').hide();
                $('#staff-aug-form').trigger("reset");

                $('html, body').animate({
                    scrollTop: $(".container.eodformstyle").offset().top
                }, 2000);
            }
        });
    }

    function isValidEmail(email) {
        var emailPattern = /^\S+@\S+\.\S+$/;
        return emailPattern.test(email);
    }
    $("body").delegate("#staff-augment-submit", "click", async function() {
        $(".error-message").text("");
        let dbaServices = $("input[name='dba-services']:checked").val();
        let positionName = $('select#position-name').find(":selected").val();
        let otherPosition = $('#position-name-others').val();
        let noCandidatesReq = $('select#no-candidates-req').find(":selected").val();
        let expertiseLevel = $('select#expertise-level').find(":selected").val();
        let skillSets = $('#skill-sets').val();
        let workLocation = $("input[name='work-location']:checked").val();
        let workCountry = $('input#work-country').val();
        let workCity = $('input#work-city').val();
        let onSiteCheck = $('#on-site-check').is(':checked');
        let workType = $("input[name='work-type']:checked").val();
        let workHours = $('select#work-hours').find(":selected").val();
        let workDays = $('select#work-days').find(":selected").val();
        let workStart = $('select#work-start').find(":selected").val();
        let WorkHoursType = $('select#work-hours-type').find(":selected").val();
        let WorkPerWeek = $('select#work-days-per-week').find(":selected").val();
        let supportFrom = $('select#daily-support-from').val();
        let supportTo = $('select#daily-support-to').val();
        let customTime = $('input#custom-time').val();
        let duration = $("input[name='duration']:checked").val();
        // let noOfMonsReq = $('input#mons-days-req').val();
        let noOfMonsReqShort = $('input#mons-days-req-short').val();
        let noOfMonsReqLong = $('input#mons-days-req-long').val();
        let existCustomer = $("input#email").val();
        let newCustomer = $('input#new-email').val();
        let fullName = $('input#full-name').val();
        let contactNumber = $('input#contact-number').val();
        let hasErrors = false;

        if (positionName) {
            if (positionName == 'others') {
                if (!otherPosition) {
                    $('#position-others-error').text("Please specify the Position Name.")
                    hasErrors = true;
                }
            }
        } else {
            $('#position-name-error').text('Please Select the Position');
            hasErrors = true;
        }
        if (!noCandidatesReq) {
            $('#candidates-error').text('Please Select the No of Candidates');
            hasErrors = true;
        }
        if (!expertiseLevel) {
            $('#expertise-level-error').text('Please Select the Expertise Level');
            hasErrors = true;
        }
        if (!skillSets) {
            $('#skill-sets-error').text("Please Choose the Skill sets");
            hasErrors = true;
        }

        if (workLocation) {
            if (workLocation == 'on-site') {
                if (!workCountry) {
                    $('#work-country-error').text('Please Specify the work Country');
                    hasErrors = true;
                }
                if (!workCity) {
                    $('#work-city-error').text('Please Specify the work City');
                    hasErrors = true;
                }
                if (!onSiteCheck) {
                    $('#on-site-check-error').text('Please accept to the terms and conditions');
                    hasErrors = true;
                }
            }
        } else {
            $('#work-location-error').text("Please Choose the Prefered Work Locaiton");
            hasErrors = true;
        }

        if (workType) {
            if (workType == 'full-time') {
                if (!workHours) {
                    $('#work-hours-error').text('Please Select the Working Hours');
                }
                if (!workDays) {
                    $('#work-days-error').text('Please Select the Work Days');
                }
                if (!workStart) {
                    $('#work-start-error').text('Please Select the Work Start Day');
                }
            }
            if (workType == 'part-time') {
                if (WorkHoursType) {
                    if (WorkHoursType == 'std-hours') {
                        if (!WorkPerWeek) {
                            $('#work-days-per-week-error').text('Please Choose the work per week')
                        }
                        if (!supportFrom) {
                            $('#daily-support-from-error').text('Please fill the Support From hours')
                        }
                        if (!supportTo) {
                            $('#daily-support-to-error').text('Please fill the Support to hours')
                        }
                    }
                    if (WorkHoursType == 'free-hours') {
                        if (!customTime) {
                            $('#custom-time-error').text('Please specify the custom time')
                        }
                    }
                } else {
                    $('#work-hours-type-error').text('Please Choose the work hours type')
                }
            }
        } else {
            $('#work-type-error').text('Please Choose the work type')
            hasErrors = true;
        }
        if (duration) {
            if (duration == 'short-term') {
                if (!noOfMonsReqShort) {
                    $('span#mons-days-req-error').text("Please specify the duration months and year")
                    hasErrors = true;
                }
            }
            if (duration == 'long-term') {
                if (!noOfMonsReqLong) {
                    $('span#mons-days-req-error').text("Please specify the duration months and year")
                    hasErrors = true;
                }
            }
        } else {
            $('#duration-error').text("Please select the duration")
            hasErrors = true;
        }

        if (!existCustomer && !newCustomer) {
            $('#contact-info').text("Contact information is required");
            hasErrors = true;
        } else {
            if (existCustomer) {
                if (!isValidEmail(existCustomer)) {
                    $("span#login-email").text("Please Enter a Valid Email Address.");
                    hasErrors = true;
                }
            } else {
                if (newCustomer) {
                    if (!isValidEmail(newCustomer)) {
                        $("span#login-new-email").text("Please Enter a Valid Email Address.");
                        hasErrors = true;
                    }
                    if (!fullName) {
                        $("span#login-name").text("Please Enter the Name.");
                        hasErrors = true;
                    }
                    if (!contactNumber) {
                        $("span#login-contact-no").text("Please Enter the Contact Number.");
                        hasErrors = true;
                    }
                }
            }
        }
        if (!hasErrors) {
            validateEmail();
        }

    });
</script>
<?php include "footer.php"; ?>