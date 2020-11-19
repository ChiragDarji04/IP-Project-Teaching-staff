<?php
include "../config.php";
error_reporting(0);
session_start();


$current_user = $_SESSION['username'];

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
$rollno = $_GET['rollno'];
$training = $_GET['training'];
$title = $_GET['title'];
$program = $_GET['program'];
$agency = $_GET['agency'];
$duration = $_GET['duration'];
// $Upload = $_GET['activity-upload'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/sweetalert.min.js"></script>

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
        <a class="navbar-brand mr-auto" href="../index.php"><img src="../images/logo12.png" height="60px" width="60px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-caret-down fa-lg"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>


            <div class="nav-item">
                <div>
                    <h5 style="text-transform:uppercase;" class="">WELCOME <?php echo $current_user;  ?>!!!</h5>
                </div>
                <div>
                    <a href="../logout.php" class="btn btn-danger btn-block btn-sm">Logout</a>
                </div>
            </div>
        </div>


    </nav>

    <div class=" main-container container">
        <div class="row">

            <div id="div2" class="container1 col-12 col-sm-8">
                <!-- <h4  class="teaching" style ="text-align : center; color:#def2f1;">TEACHING STAFF INFORMATION</h4> -->



                <div id="" class="container ">

                    <form id="form6" method="GET" action="activity.php" enctype="multipart/form-data">
                        <br>
                        <h3>EXTENDED LEARNING ACTIVITIES</h3>
                        <hr>
                        <div class="form-group">
                            <label for="activityy"></label>
                            <input type="hidden" name="activity-rollno" class="form-control" value='<?php echo $rollno; ?>'>
                            <select class="form-control" name="activity" id="activityy">
                                <option><?php echo $training; ?></option>
                                <option>Development</option>
                                <option>Training</option>
                                <option>STTP Attended</option>
                                <option>Webinar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="activitytitle">TITLE</label>
                            <input type="text" id="activitytitle" name="activity-title" class="form-control" value='<?php echo $title; ?>' placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="activityname">NAME OF THE PROGRAM</label>
                            <input type="text" id="activityname" name="activity-name" class="form-control" value='<?php echo $program; ?>' placeholder="Enter Name of Program">
                        </div>
                        <div class="form-group">
                            <label for="activitylocation">ORGANIZING AGENCY</label>
                            <input type="text" id="activitylocation" name="activity-location" class="form-control" value='<?php echo $agency; ?>' placeholder="Enter Organizing Agency">
                        </div>
                        <div class="form-group">
                            <label for="activityyear">SELECT YEAR</label>
                            <select class="form-control" name="activity-year" id="activityyear">
                                <option><?php echo $duration; ?>
                                <option>
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <button type="submit" name="activity-modify" class="btn btn-secondary">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <script src="../js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
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
    <?php
    if (isset($_GET['activity-modify'])) {
        $Sr = $_GET['activity-rollno'];
        $activity = $_GET['activity'];
        $title = $_GET['activity-title'];
        $activityname = $_GET['activity-name'];
        $location = $_GET['activity-location'];
        $year = $_GET['activity-year'];


        $update = "UPDATE activities SET Training = '$activity' , Title = '$title', Program = '$activityname' , Agency = '$location',Duration = '$year' WHERE Sr = '$Sr'";
        if (mysqli_query($link, $update)) {
            echo  "<script>
      swal({
        title: 'Successfully Updated',
        text: 'Document Updated',
        icon: 'success',
        button: 'Ok!',
      });
      </script>";
        } else {
            echo 'Error: ' . mysqli_error($link);
        }
        header("location: activity.php");
    }
    ?>
</body>

</html>