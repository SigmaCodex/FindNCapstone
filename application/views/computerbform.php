<!DOCTYPE html>
<html>
<head>
	<title>FindN-Booking Form</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bform.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="assets/admin/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bform.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3 ">
                <h2 id="heading">Printing Services Booking Form</h2>
                <p>Fill all form field to go to next step</p>
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Account</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="payment"><strong>File Upload</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul><!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Account Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Email: *</label> <input class="form-control" type="email" name="email" placeholder="johndoe@gmail.com" /> <label class="fieldlabels">Password: *</label> <input class="form-control" type="password" name="pwd" placeholder="Password" /> <label class="fieldlabels">Confirm Password: *</label> <input class="form-control" type="password" name="cpwd" placeholder="Confirm Password" />
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" /> <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> 
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">File Upload:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Upload Your File:</label> <input type="file" name="pic" accept="image/*"> 
                            <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">How many copies?</label>
          <input id="edit-submitted-constituent-base-total-constituents" class="form-text hs-input" name="total_number_of_constituents_in_your_database" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number" >
                        </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have </h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>