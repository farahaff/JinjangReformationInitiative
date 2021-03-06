<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Jinjang Reformation Initiative</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="css/agency.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Navigation
      //-->
        <nav class="navbar new navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo4.png" height="45px"; width="250px";></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#page-top">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contact -->
        <section id="signup">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Sign Up</h2><br/>
                    </div>
                </div>
                <!-- to find whether member or trainer is selected by user no need !-->
<!-- <input id="selmemtype" name="selmemtype" type="hidden" value="1" /> -->

                <!-- show msg from server !-->
                <div class="row" id="msg">
                    <div class="col-md-12" style="display:none;">
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Registered Successfully!
                        </div>
                    </div>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" style="color:#b20000;" data-toggle="tab" href="#jobSeeker" role="tab">Job Seeker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#b20000;" data-toggle="tab" href="#employer" role="tab">Employer</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="jobSeeker" role="tabpanel"><br/></br>
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="contactForm" method="POST" novalidate>
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control"  id="username" type="text"  placeholder="Username*" required data-validation-required-message="Please enter your username." required>
                                                <p class="help-block text-danger" style="color: red;"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="password" type="password" placeholder="Password*" required data-validation-required-message="Please enter your password.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="fullName" type="text"  placeholder="Full Name*" required data-validation-required-message="Please enter your full name.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="email" type="email" placeholder="Email*" required data-validation-required-message="Please enter your email.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="mobileNo" type="number" placeholder="Mobile No*" required data-validation-required-message="Please enter your mobile number.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                              <textarea class="form-control" id="qualifications" type="textarea" placeholder="Qualifications"></textarea>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <br>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <textarea class="form-control" id="skills" type="textarea" placeholder="List Your skills"></textarea>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                Availability: &nbsp <input id="startTime" type="time" placeholder="Start Time">
                                                &nbsp to &nbsp <input id="endTime" type="time" placeholder="End Time">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="preferredSalary" type="number" placeholder="Preferred Salary">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="healthConditions" type="textarea" placeholder="State Any Health Conditions"></textarea>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                Upload Resume:
                                                <input type="file" name="fileToUpload">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <br/>
                                            <div id="success"></div>
                                            <button id="resetButton" class="btn btn-primary btn-xl text-uppercase" type="reset">Reset</button>
                                            <button   class="btn btn-primary btn-xl text-uppercase" onclick="formSubmitJS();">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="employer" role="tabpanel"><br/></br>
                        <div class="row">
                            <div class="col-lg-12 offset-md-3">
                                <form id="contactForm"  action="#"  method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="eUsername" type="text" placeholder="Username*" required data-validation-required-message="Please enter your username." required>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="ePassword" type="password" placeholder="Password*" required data-validation-required-message="Please enter your password.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="orgName" type="text" placeholder="Name of Organization*" required data-validation-required-message="Please enter your full name.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="industry">
                                                    <option value="" selected disabled>Type of Organization</option>
                                                    <option value="Agriculture">Agriculture</option>
                                                    <option value="Automotive">Automotive</option>
                                                    <option value="Construction">Construction</option>
                                                    <option value="Cosmetics">Cosmetics</option>
                                                    <option value="Education">Education</option>
                                                    <option value="Engineering">Engineering</option>
                                                    <option value="Entertainment">Entertainment</option>
                                                    <option value="Finance">Finance</option>
                                                    <option value="Food">Food</option>
                                                    <option value="Health Care">Health Care</option>
                                                    <option value="Information Technology">Information Technology</option>
                                                    <option value="Marketing">Marketing</option>
                                                    <option value="Media & Comunication">Media & Communication</option>
                                                    <option value="Pharmaceutical">Pharmaceutical</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="radio-inline"><input type="radio" id="ctype" onclick="test();" value="Profitable" checked name="ctype">&nbsp;Profitable</label>
                                              <label class="radio-inline"><input type="radio" id="ctype" value="2" name="ctype">&nbsp;Non-Profit</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="empEmail" type="email" placeholder="Email*" required data-validation-required-message="Please enter your email.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="phoneNo" type="number" placeholder="Phone No*" required data-validation-required-message="Please enter your mobile number.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <br/>
                                                <div id="success"></div>

                                                <button id="resetButton" class="btn btn-primary btn-xl text-uppercase" type="reset">Reset</button>
                                                <button  class="btn btn-primary btn-xl text-uppercase" onclick="formSubmitE();">Register</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <?php
        require_once './template/footer.php';
