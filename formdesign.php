<div class="features-section section-padding pt-0" style="background-image:url('images/eod-img/formbg.svg')">
    <br /><br /> <br />
      <!-- Contact form script -->
      <script>
            function eodvalidateForm() {
                var name = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var subject = document.getElementById("subject").value;
                var phone = document.getElementById("phone").value;
                var description = document.getElementById("description").value;

                if (name == "" || email == "" || subject == "" || phone == "" || description == "") {
                    alert("Please fill in all required fields.");
                    return false;
                }
                return true;
            }
            </script>
            <!-- Contact form script -->
    <div class="container-fluid">
        <div class="row clearfix justify-content-center">
            <div class="col-md-6 shapep form-spacing contact-form-text" style="background-image: url('images/eod-img/polygon-3.svg');">
                <!-- <img src="images/eod-img/Polygon 3.svg">   -->
                <h2 class="h1">
                   Let's Connect Today <br>
                  <span> </span>
                </h2>
                <p class="lead-text" style="text-align:justify;">
                To Learn how we can help you to overcome your challenges, retain and win new business, and solidify your position as a top player in the industry.
                </p>
            </div>
          

            <div class="col-md-6">
                <div class="container-fluid" id="sec4_div2">
                    <br />
                    <div class="row">
                        <div class="col">
                            <h2>Send Us Message</h2>
                        </div>
                    </div>
                    <br />
                    <form method="POST" action="process_contact_form.php" onsubmit="return eodvalidateForm()">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="name" placeholder="First Name" name="name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="email" placeholder="Enter email"
                                    name="email">
                            </div>
                            <!-- <div class="col">
                                            <input type="text" class="form-control" placeholder="Last Name" name="lastname" id="lastname">
                                        </div> -->
                        </div><br />
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="subject" placeholder="Subject"
                                    name="subject">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Contact Number" name="phone"
                                    id="phone">
                            </div>
                        </div>
                        <!-- <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Country" name="country" id="country">
                                        </div>
                                    </div> -->
                        <br />
                        <div class="row">
                            <div class="col">
                                <textarea type="text" class="form-control" id="description"
                                    placeholder="Describe what we can help you..." name="description"
                                    style="min-height: 60px;"></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col">
                                <center>
                                    <!-- <button type="button" class="btn shadow">Send Now</button> -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </center>
                            </div>
                        </div>
                        <br />
                    </form>
                </div>
            </div>
        </div><!-- End Row -->
    </div>
</div>