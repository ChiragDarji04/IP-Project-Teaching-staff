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
$course_cd = $_GET['course_cd'];
$sem = $_GET['sem'];
$sub = $_GET['sub'];
$rollno = $_GET['rollno'];
$year = $_GET['year'];
// $Upload = $_GET['nptel-upload'];


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
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>

        <div>
            <div class="">
                <h5 style="text-transform:uppercase;" class="">WELCOME <?php echo $current_user;  ?>!!!</h5>
            </div>
            <div>
                <a href="../logout.php" class="btn btn-danger btn-block btn-sm">Logout</a>
            </div>
        </div>
    </nav>


    <div class=" main-container container">
        <div class="row">

            <div id="div2" class="container1 col-12 col-sm-8">

                <div id="" class="container ">


                    <form id="form10" method="GET" action="subject.php" enctype="multipart/form-data">
                        <br>
                        <h3>ADD SUBJECTS TAUGHT</h3>
                        <hr>
                        <div class="form-group">
                            <label for="subname">COURSE NAME</label>
                            <input type="hidden" name="subrollno" class="form-control" value=<?php echo $rollno; ?>>
                            <input type="text" name="sub" id="sub" class="form-control" value='<?php echo $sub; ?>' placeholder="Enter Course Name">
                        </div>
                        <div class="form-group">
                            <label for="course_cd">COURSE CODE</label>
                            <input type="text" name="course_cd" id="course_cd" class="form-control" value='<?php echo $course_cd; ?>' placeholder="Enter Course Code">
                        </div>
                        <div class="form-group">
                            <label for="n">SEMESTER OF COURSE</label>
                            <select class="form-control" name="sem" id="sem">
                                <option><?php echo $sem; ?></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="year">SELECT YEAR</label>
                            <select class="form-control" name="year" id="year">
                                <option><?php echo $year; ?></option>
                                <option>2013-2014</option>
                                <option>2014-2015</option>
                                <option>2015-2016</option>
                                <option>2016-2017</option>
                                <option>2017-2018</option>
                                <option>2018-2019</option>
                                <option>2019-2020</option>
                                <option>2020-2021</option>
                                <option>2022-2023</option>
                                <option>2021-2022</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submodify" class="btn btn-secondary" value="1234">UPDATE</button>
       

                        </div>
                    </form>
                </div>









            </div>
        </div>
    </div>


    <br>






    <script src="main.js"></script>
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
    if (isset($_GET['submodify'])) {
        $Sr = $_GET['subrollno'];
        $sub = $_GET['sub'];
        $course_cd = $_GET['course_cd'];
        $sem = $_GET['sem'];
        $year = $_GET['year'];

        $update = "UPDATE subject SET sub = '$sub', course_cd = '$course_cd' , sem = '$sem', year='$year' WHERE Sr = '$Sr'";
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
        
    }
    ?>


</body>

</html>