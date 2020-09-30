<?php 
include "config.php" ;
error_reporting(0);
session_start();
 

$current_user = $_SESSION['username'] ;

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="sweetalert.min.js"></script>

    <style>
    body {
        margin: 0px;
        padding: 0px;
        background-color: #2b7a78 !important;
    }

    .hide {
        display: none;
    }
    </style>
</head>

<body>
    <nav id="navbar" class="navbar smart-scroll navbar-expand-lg navbar-info">
        <a class="navbar-brand mr-auto" href="#"><img src="images/logo12.png" height="60px" width="60px"></a>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>

        <div>
            <div class="">
                <h5 style="text-transform:uppercase;" class="">WELCOME <?php echo $current_user;  ?>!!!</h5>
            </div>
            <div>
                <a href="logout.php" class="btn btn-danger btn-block btn-sm">Logout</a>
            </div>
        </div>
    </nav>


    <div class=" main-container container">
        <div class="row">
            <div id="div1" class="container1 col-12 col-sm-4">
                <div id="items">
                    <button class="button-item" type="button" id="conferenceclick">CONFERENCE</button>
                    <button class="button-item" type="button" id="journalclick">JOURNAL</button>
                    <button class="button-item" type="button" id="interactionclick">INTERACTION</button>
                    <button class="button-item" type="button" id="trainingclick">CORPORATE TRAINING</button>
                    <button class="button-item" type="button" id="activityclick">LEARNING ACTIVITIES</button>
                    <button class="button-item" type="button" id="nptelclick">NPTEL</button>
                    <button class="button-item" type="button" id="fdpsclick">FDPS ORGANIZED</button>
                    <button class="button-item" type="button" id="membershipclick">PROFESSIONAL MEMBERSHIP</button>
                </div>

            </div>
            <div id="div2" class="container1 col-12 col-sm-8">
                <!-- <h4  class="teaching" style ="text-align : center; color:#def2f1;">TEACHING STAFF INFORMATION</h4> -->

                <div id="" class="conference-form container ">
                  
                    <form id="form1" method="POST" action="upload.php">
                        <br>
                        <h3>PUBLICATION IN CONFERENCE</h3>
                        <hr>
                        <div class="form-group">
                            <label for="conferencetitle">Title / Topic</label>
                            <input type="text" name="conference-Title" class="form-control" id="conferencetitle"
                                aria-describedby="emailHelp" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputconference">NAME OF THE CONFERENCE</label>
                            <input type="Text" name="Conference" class="form-control" id="exampleInputconference"
                                placeholder="Enter Name of the Conference">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPaper">VOL NO , PAGE NO</label>
                            <input type="Text" name="conference-Paper" class="form-control" id="exampleInputPaper"
                                placeholder="Enter Page No">
                        </div>
                        <div class="form-group">
                            <label for="conferenceyear">YEAR OF PUBLICATION</label>
                            <select class="form-control" name="conference-Year" id="conferenceyear">
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdoc">UPLOAD CONFERENCE LINK</label>
                            <input name="conference-upload" type="text" class="form-control" id="exampleInputdoc"
                                placeholder="Enter Conference Link" required><br>
                            <button type="submit" name="conference-submit" class="btn btn-primary">Submit</button>
                         
                        </div>
                    </form>
                </div>


                <div id="" class="journal-form container ">
                   
                    <form id="form2" method="POST" action="upload.php" enctype="multipart/form-data">
                        <br>
                        <h3>PUBLICATION IN JOURNALS</h3>
                        <hr>
                        <div class="form-group">
                            <label for="formGroupjournalInput">TITLE</label>
                            <input type="text" name="journal-title" class="form-control" id="formGroupjournalInput"
                                placeholder="Enter Journal Title">
                        </div>
                        <div class="form-group">
                            <label for="formGroupjournalInput2">NAME OF THE JOURNAL</label>
                            <input type="text" name="journal" class="form-control" id="formGroupjournalInput2"
                                placeholder="Enter Name Of The Journal">
                        </div>
                        <div class="form-group">
                            <label for="formGroupjournalInput3">PAGES</label>
                            <input type="text" name="journal-pages" class="form-control" id="formGroupjournalInput3"
                                placeholder="Vol , Page No">
                        </div>
                        <div class="form-group">
                            <label for="formGroupjournalInput4">Journal with Impact FACTOR</label>
                            <input type="text" name="journal-factor" class="form-control" id="formGroupjournalInput4"
                                placeholder="Journal With Impact FACTOR">
                        </div>
                        <div class="form-group">
                            <label for="journalyear">SELECT YEAR</label>
                            <select class="form-control" name="journal-year" id="journalyear">
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupjournalInput6">ENTER JOURNAL LINK</label><br>
                            <input name="journal-upload" type="text" class="form-control" id="formGroupjournalInput6"
                                placeholder="Enter Journal Link" required> <br>
                            <button type="submit" name="journal-submit" class="btn btn-primary">Submit</button>
                            
                        </div>

                    </form>
                </div>


                <div id="" class="interaction-form container ">
                   
                    <form id="form3" method="POST" action="upload.php" enctype="multipart/form-data">
                        <br>
                        <h3>INTERACTION WITH OUTSIDE WORLD</h3>
                        <hr>
                        <div class="form-group">
                            <label for="formGroupinteractionInput">NATURE OF INTERACTION</label>
                            <input type="text" name="interaction" class="form-control" id="formGroupinteractionInput"
                                placeholder="Resource Person/Judge">
                        </div>
                        <div class="form-group">
                            <label for="interactionyear">SELECT YEAR</label>
                            <select class="form-control" name="interaction-year" id="interactionyear">
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupinteractionInput3">UPLOAD DOCUMENT</label>
                            <input type="file" name="interaction-upload" accept=".pdf" id="formGroupinteractionInput3"
                                required><br><br>
                            <button type="submit" name="interaction-submit" class="btn btn-primary">Submit</button>
                            

                        </div>
                    </form>
                </div>


                <div id="" class="training-form container ">
                   
                    <form id="form5" method="POST" action="upload.php" enctype="multipart/form-data">
                        <br>
                        <h3>CORPORATE TRAINING</h3>
                        <hr>
                        <div class="form-group">
                            <label for="formGrouptrainingInput">TRAINING</label>
                            <input type="text" name="training" class="form-control" id="formGrouptrainingInput"
                                placeholder="Enter Training">
                        </div>
                        <div class="form-group">
                            <label for="formGrouptrainingInput2">TITLE</label>
                            <input type="text" name="training-title" class="form-control" id="formGrouptrainingInput2"
                                placeholder="Enter Training Title">
                        </div>
                        <div class="form-group">
                            <label for="formGrouptrainingInput3">NAME OF THE PROGRAM</label>
                            <input type="text" name="training-program" class="form-control" id="formGrouptrainingInput3"
                                placeholder="Enter Training Program">
                        </div>
                        <div class="form-group">
                            <label for="formGrouptrainingInput4">ORGANIZING AGENCY</label>
                            <input type="text" name="training-agency" class="form-control" id="formGrouptrainingInput4"
                                placeholder="Enter Organizing Agency">
                        </div>
                        <div class="form-group">
                            <label for="trainingyear">SELECT YEAR</label>
                            <select class="form-control" name="training-year" id="trainingyear">
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGrouptrainingInput6">UPLOAD DOCUMENT</label>
                            <input type="file" name="training-upload" accept=".pdf" id="formGrouptrainingInput6"
                                required><br><br>
                            <button type="submit" name="training-submit" class="btn btn-primary">Submit</button>
                          

                        </div>
                    </form>
                </div>


                <div id="" class="activity-form container ">
                   
                    <form id="form6" method="POST" action="upload.php" enctype="multipart/form-data">
                        <br>
                        <h3>EXTENDED LEARNING ACTIVITIES</h3>
                        <hr>
                        <div class="form-group">
                            <label for="activityy"></label>
                            <select class="form-control" name="activity" id="activityy">
                                <option>Development</option>
                                <option>Training</option>
                                <option>STTP Attended</option>
                                <option>Webinar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="activitytitle">TITLE</label>
                            <input type="text" id="activitytitle" name="activity-title" class="form-control"
                                placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="activityname">NAME OF THE PROGRAM</label>
                            <input type="text" id="activityname" name="activity-name" class="form-control"
                                placeholder="Enter Name of Program">
                        </div>
                        <div class="form-group">
                            <label for="activitylocation">ORGANIZING AGENCY</label>
                            <input type="text" id="activitylocation" name="activity-location" class="form-control"
                                placeholder="Enter Organizing Agency">
                        </div>
                        <div class="form-group">
                            <label for="activityyear">SELECT YEAR</label>
                            <select class="form-control" name="activity-year" id="activityyear">
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="activityupload"></label>
                            <input type="file" name="activity-upload" id="activityupload" value="browse"
                                required><br><br>
                            <button type="submit" name="activity-submit" class="btn btn-primary">Submit</button>
                            

                        </div>

                    </form>
                </div>


                <div id="" class="nptel-form container ">
                   

                    <form id="form7" method="POST" action="upload.php" enctype="multipart/form-data">
                        <br>
                        <h3>DETAILS OF NPTEL COURSES COMPLETED </h3>
                        <hr>
                        <div class="form-group">
                            <label for="nptelname">COURSE NAME</label>
                            <input type="text" name="nptel-name" id="nptelname" class="form-control"
                                placeholder="Enter Course Name">
                        </div>
                        <div class="form-group">
                            <label for="nptelduration">DURATION</label>
                            <input type="text" name="nptel-duration" id="nptelduration" class="form-control"
                                placeholder="Enter Duration">
                        </div>
                        <div class="form-group">
                            <label for="nptelyear">SELECT YEAR</label>
                            <select class="form-control" name="nptel-year" id="nptelyear">
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nptelupload"></label>
                            <input type="file" name="nptel-upload" id="nptelupload" value="browse" required><br><br>
                            <button type="submit" name="nptel-submit" class="btn btn-primary">Submit</button>
                            

                        </div>
                    </form>
                </div>


                <div id="" class="fdps-form container ">
                   

                    <form id="form8" method="POST" action="upload.php" enctype="multipart/form-data">
                        <br>
                        <h3>FDPS AND CONFERENCE ORGANIZED</h3>
                        <hr>
                        <div class="form-group">
                            <label for="fdpsname">PROGRAM NAME</label>
                            <input type="text" name="fdps-name" id="fdpsname" class="form-control"
                                placeholder="Enter Program Name">
                        </div>
                        <div class="form-group">
                            <label for="fdpsyear">SELECT YEAR</label>
                            <select class="form-control" name="fdps-year" id="fdpsyear">
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fdpsupload"></label>
                            <input type="file" name="fdps-upload" id="fdpsupload" value="browse" required><br><br>
                            <button type="submit" name="fdps-submit" class="btn btn-primary">Submit</button>
                           

                        </div>
                    </form>
                </div>

                <div id="" class="membership-form container ">
                  

                    <form id="form9" method="POST" action="upload.php" enctype="multipart/form-data">
                        <br>
                        <h3>PROFESSIONAL MEMBERSHIP DETAILS </h3>
                        <hr>
                        <div class="form-group">
                            <label for="membershipname">MEMBERSHIP NAME</label>
                            <input type="text" placeholder="CSI/IEEE/ISTE.." name="membership-name" id="membershipname"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="membershipupload"></label>
                            <input type="file" name="membership-upload" id="membershipupload" value="browse"
                                required><br><br>
                            <button type="submit" name="membership-submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <br>

    <footer class="site-footer">

        <div class="container">
            <div class="row">

                <!-- <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright © 2020 V.C.E.T. All Rights Reserved.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <p class="developedby" style="text-align: center; color: #2b7a78;">Developed by - Chirag | Suchit |
                        Adnan</p> -->
                <!-- </div> -->

            </div>
        </div>
    </footer>




    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <script>
    $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

    if ($('.smart-scroll').length > 0) {
        var last_scroll_top = 0;
        $(window).on('scroll', function() {
            scroll_top = $(this).scrollTop();
            if (scroll_top < last_scroll_top) {
                $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
            } else {
                $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
            }
            last_scroll_top = scroll_top;
        });
    }
    </script>
    <script>
    $(document).ready(function() {
        $("#conferenceclick").click(function() {
            $(".conference-form").toggle();
            $(".journal-form").hide();
            $(".interaction-form").hide();
            $(".training-form").hide();
            $(".activity-form").hide();
            $(".nptel-form").hide();
            $(".fdps-form").hide();
            $(".membership-form").hide();
        });
    });

    $(document).ready(function() {
        $("#journalclick").click(function() {
            $(".journal-form").toggle();
            $(".conference-form").hide();
            $(".interaction-form").hide();
            $(".training-form").hide();
            $(".activity-form").hide();
            $(".nptel-form").hide();
            $(".fdps-form").hide();
            $(".membership-form").hide();
        });
    });

    $(document).ready(function() {
        $("#interactionclick").click(function() {
            $(".interaction-form").toggle();
            $(".conference-form").hide();
            $(".journal-form").hide();
            $(".training-form").hide();
            $(".activity-form").hide();
            $(".nptel-form").hide();
            $(".fdps-form").hide();
            $(".membership-form").hide();
        });
    });



    $(document).ready(function() {
        $("#trainingclick").click(function() {
            $(".training-form").toggle();
            $(".conference-form").hide();
            $(".interaction-form").hide();
            $(".journal-form").hide();
            $(".activity-form").hide();
            $(".nptel-form").hide();
            $(".fdps-form").hide();
            $(".membership-form").hide();
        });
    });

    $(document).ready(function() {
        $("#activityclick").click(function() {
            $(".activity-form").toggle();
            $(".conference-form").hide();
            $(".interaction-form").hide();
            $(".training-form").hide();
            $(".journal-form").hide();
            $(".nptel-form").hide();
            $(".fdps-form").hide();
            $(".membership-form").hide();
        });
    });

    $(document).ready(function() {
        $("#nptelclick").click(function() {
            $(".nptel-form").toggle();
            $(".conference-form").hide();
            $(".interaction-form").hide();
            $(".training-form").hide();
            $(".activity-form").hide();
            $(".journal-form").hide();
            $(".fdps-form").hide();
            $(".membership-form").hide();
        });
    });

    $(document).ready(function() {
        $("#fdpsclick").click(function() {
            $(".fdps-form").toggle();
            $(".conference-form").hide();
            $(".interaction-form").hide();
            $(".training-form").hide();
            $(".activity-form").hide();
            $(".nptel-form").hide();
            $(".journal-form").hide();
            $(".membership-form").hide();
        });
    });

    $(document).ready(function() {
        $("#membershipclick").click(function() {
            $(".membership-form").toggle();
            $(".conference-form").hide();
            $(".interaction-form").hide();
            $(".training-form").hide();
            $(".activity-form").hide();
            $(".nptel-form").hide();
            $(".fdps-form").hide();
            $(".journal-form").hide();
        });
    });

    $(document).ready(function() {
        $("#conference-modify").click(function() {
            $("#conference-hidden").toggle()
        });
        $("#journal-modify").click(function() {
            $("#journal-hidden").toggle()
        });
        $("#interaction-modify").click(function() {
            $("#interaction-hidden").toggle()
        });
        $("#training-modify").click(function() {
            $("#training-hidden").toggle()
        });
        $("#activity-modify").click(function() {
            $("#activity-hidden").toggle()
        });
        $("#nptel-modify").click(function() {
            $("#nptel-hidden").toggle()
        });
        $("#fdps-modify").click(function() {
            $("#fdps-hidden").toggle()
        });
        $("#membership-modify").click(function() {
            $("#membership-hidden").toggle()
        });

    });
    </script>



</body>

</html>