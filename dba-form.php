<?php include"header.php"; ?>

<!-- Main Wrapper -->

<div id="main-wrapper" class="page-wrapper">
    <div class="area" style="height: 250px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <div class="page-header section-padding dc-seven banner-bgcolor">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-12 text-center">
                    <div class="heading-wrapper wow fadeInLeft" data-wow-delay="0.2s">
                        <h1 class="solutz-text mt-30 herotextbg" style="font-size: 7vh !important;">Database
                            Administration Form</h1>
                    </div>
                </div><!-- End Col -->
            </div>
        </div>
    </div>

    <!-- Page Header -->
    <div class="about-section section-padding" style="background-color: #fbfaff;">
        <div class="container">
            <div class="row">
                <div class="container eodformstyle">
                    <h3 class="text-center">Tell your needs in simple 8 steps below to serve you better</h3>
                    <div class="form-wrap">
                        <form id="survey-form">
                            <div class="row">
                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn ">
                                    <h5>What service you need ? (Select One)</h5>
                                    <div class="form-check d-flex mt-30">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio" />
                                                    <span>24/5 Limited DBA Support</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio" />
                                                    <span>24/7 Limited DBA Support</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio" />
                                                    <span> 24/5 Full DBA Support</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio" />
                                                    <span> 24/7 Full DBA Support</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio" />
                                                    <span> DBA Corporate Training</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio" />
                                                    <span> End Users Corporate Training</span>
                                                </label>
                                            </div>
                                       
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label>
                                                    <input type="radio" name="radio" />
                                                    <span>Database Automation & DevOps Support</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-1 col-md-6 col-lg-12 radiobtn mt-50">
                                    <h5>Choose a Technology you want (Select One)</h5>

                                    <div class="form-check d-flex mt-30">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <label>
                                                    <input type="radio" name="technology" />
                                                    <span>Oracle</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <label>
                                                    <input type="radio" name="technology" />
                                                    <span>MS SQL Server</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <label>
                                                    <input type="radio" name="technology" />
                                                    <span>IBM DB2</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <label>
                                                    <input type="radio" name="technology" />
                                                    <span>PostgreSQL</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <label>
                                                    <input type="radio" name="technology" />
                                                    <span>Mongo DB</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <label>
                                                    <input type="radio" name="technology" />
                                                    <span>MySQL</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <label>
                                                    <input type="radio" name="technology" />
                                                    <span>MariaDB</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <label>
                                                    <input type="radio" name="technology" />
                                                    <span>Others</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 ">
                                <h5>Timeline requried</h5>
                                <div class="row">
                                    <div class="col-sm-1 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label id="number-label" for="number">Select Year Duration</label>
                                            <select id="dropdown" name="role" class="form-control" required>
                                                <option disabled selected value>Select</option>
                                                <option value="student">Student</option>
                                                <option value="job">Full Time Job</option>
                                                <option value="learner">Full Time Learner</option>
                                                <option value="preferNo">Prefer not to say</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Select Month Duration</label>
                                            <select id="dropdown" name="role" class="form-control" required>
                                                <option disabled selected value>Select</option>
                                                <option value="student">Student</option>
                                                <option value="job">Full Time Job</option>
                                                <option value="learner">Full Time Learner</option>
                                                <option value="preferNo">Prefer not to say</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Leave Message</label>
                                        <textarea id="comments" class="form-control" name="comment"
                                            placeholder="Enter your comment here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" id="submit" class="btn btn-primary btn-block">Submit
                                        Survey</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div><!-- End Row -->
        </div>
    </div><!-- About Section -->

    <?php include"footer.php"; ?>