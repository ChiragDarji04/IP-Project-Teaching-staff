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
$rollno = $_GET['rollno'];
$program = $_GET['program'];
$year = $_GET['year'];
// $Upload = $_GET['fdps-upload'];
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
            
            <div id="div2" class="container1 col-12 col-sm-8">
                <!-- <h4  class="teaching" style ="text-align : center; color:#def2f1;">TEACHING STAFF INFORMATION</h4> -->

               
                <div id="" class="container ">
                   

                    <form id="form8" method="GET" action="fdps.php" enctype="multipart/form-data">
                        <br>
                        <h3>FDPS AND CONFERENCE ORGANIZED</h3>
                        <hr>
                        <div class="form-group">
                            <label for="fdpsname">PROGRAM NAME</label>
                            <input type="hidden" name="fdps-rollno" class="form-control" 
                             value = '<?php echo $rollno; ?>'   >
                            <input type="text" name="fdps-name" id="fdpsname" class="form-control"
                            value = '<?php echo $program; ?>'    placeholder="Enter Program Name">
                        </div>
                        <div class="form-group">
                            <label for="fdpsyear">SELECT YEAR</label>
                            <select class="form-control" value = ''  name="fdps-year" id="fdpsyear">
                                <option><?php echo $year; ?></option>
                                <option>2020-2021</option>
                                <option>2019-2020</option>
                                <option>2018-2019</option>
                                <option>2017-2018</option>
                                <option>2016-2017</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="fdps-modify" class="btn btn-secondary">UPDATE</button>
                           

                        </div>
                    </form>
                </div>

              



    

               

            </div>
        </div>
    </div>


    <br>






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

<?php
if(isset($_GET['fdps-modify']))
{
    $Sr = $_GET['fdps-rollno'];
    $name = $_GET['fdps-name'];
    $Year = $_GET['fdps-year'];

    $update = "UPDATE fdps SET Program = '$name',Year = '$Year' WHERE Sr = '$Sr'";
    if(mysqli_query($link, $update))
    {
      echo  "<script>
      swal({
        title: 'Successfully Updated',
        text: 'Document Updated',
        icon: 'success',
        button: 'Ok!',
      });
      </script>";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    header("location: fdps.php");
}
?>




</body>

</html>