<?php
include "config.php";
error_reporting(0);
session_start();
$style = "";
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    $style = "style='display:none;'";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>yogesh-pingle</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="sweetalert.min.js"></script>


    <style>
        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>




    <!-- ------------------------------------navbar------------------------------- -->

    <nav id="navbar" class="navbar smart-scroll navbar-expand-lg navbar-info">
        <a class="navbar-brand mr-auto" href="#"><img src="images/logo12.png" height="55px" width="55px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-caret-down fa-lg"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#personalinformation"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-book"></i> Background
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#workexp">Work Experience</a>
                        <a class="dropdown-item" href="#eduqua">Education Qualification</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cogs"></i> Research & Development
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#pubincon">Publication in conference</a>
                        <a class="dropdown-item" href="#pubinjou">Publication in Journals</a>
                        <a class="dropdown-item" href="#books">Books Published</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#books"><i class="fa fa-award"></i> Achievements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#youtube"> <i class="fa fa-video"></i> Media</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-file-word"></i> Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#books">Courses Taught</a>
                        <a class="dropdown-item" href="#nptel">Nptel</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Others
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#pro">Professional Membership</a>
                        <a class="dropdown-item" target="_blank" href="https://scholar.google.com/scholar?hl=en&as_sdt=0%2C5&q=yogesh+pingle&btnG=&oq=yogesh+">Google
                            Scholor</a>
                        <a class="dropdown-item" target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57170579400">Scopus</a>
                        <a class="dropdown-item" target="_blank" href="https://yogeshpingle.home.blog/">Blog</a>
                        <a class="dropdown-item" target="_blank" href="https://orcid.org/0000-0003-2124-885X">Orcid</a>

                        <a <?php echo $style; ?> class="dropdown-item" href="form.php">Add Data</a>

                        <div class="dropdown-item">
                            <input type="checkbox" class="container" id="checkbox">
                            <label for="checkbox" class="label ">
                                <i class="fa fa-moon-o"></i>
                                <i class="fa fa-sun-o "></i>
                                <div class="ball"></div>
                            </label>
                        </div>
                    </div>
                </li>
            </ul>
            <div>
                <div <?php if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                            echo " style='display: none'";
                        } else {
                            echo " style='display: block'";
                        } ?>>
                    <div class="">
                        <h5 style="text-transform:uppercase;" class="">WELCOME <?php echo $_SESSION['username'];  ?>!!!
                        </h5>
                    </div>
                    <div class="btn btn-danger btn-block btn-sm">
                        <a style="color:black;" href="logout.php">LOGOUT</a>
                    </div>

                </div>


                <div <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
                            echo " style='display: none'";
                        } ?>>
                    <a class="btn btn-outline-success btn-block btn-md" href="login.php">Login</a>
                </div>

            </div>
        </div>
    </nav>
    <!-- -----------------------------------navbar end------------------------------- -->

    <!-- ---------------------------------personal information--------------------- -->

    <div style="padding-top: 10px;" id="personalinformation" class="container ">
        <div class="row">
            <div class="heading col-12 col-sm-12 col-md-12">
                <h3> PERSONAL INFORMATION</h3>
            </div>
        </div>
    </div>
    <?php

    $query = "SELECT * FROM personal_information";
    $result = mysqli_query($link, $query);
    ?>
    <div class="container">
        <div class="row">
            <div class=" col-12 col-sm-12 card mb-3">
                <div class=" container d-flex justify-content-center">
                    <div class="row">
                        <div class="ypimg col-12 col-sm-6 align-self-center">
                            <img id="profile-card" src="images/pic.jpg">
                        </div>

                        <div class="personalinfo col-12 col-sm-6  card-body">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <h5 class="card-title">PROF. <?php echo $row["Name"];  ?></h5>
                                <p class="card-text"><?php echo $row["Department"];  ?></p>
                                <p class="card-text">Experience - <?php echo $row["Experience"];  ?> Years</p>
                                <p class="card-text">Mail - <?php echo $row["Email"];  ?></p>
                                <p class="card-text">Languages : <?php echo $row["Languages"];  ?>
                                </p>
                            <?php
                            };
                            ?>

                        </div>

                    </div>
                </div>

                <div class="">
                    <div class="objective card card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">OBJECTIVE</p>
                            <footer class="blockquote-footer">
                                <cite title="Source Title">Teaching is simply a passion and comes from dedication
                                    and hard work to achieve a common goal that is to be an effective & efficient
                                    professional, dedicated to my Institution’s Growth, and excelling in every
                                    sphere of life.
                                </cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>


                <br>
                <div class="">
                    <div class="value-offered card card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">PROFESSIONAL VALUE OFFERED</p>
                            <footer class="blockquote-footer">
                                <cite title="Source Title">A result & process driven Post Graduation M.E. (Computer
                                    Engg) with 16 years experience in
                                    Teaching Technology and Software Management ; excelled in academic environments
                                    and
                                    capable of adding significant value to students and the Institution.
                                    A strong command over the English language and desire to impart sustained
                                    learning ,
                                    complemented by a passion for achieving high quality at work while bringing
                                    about positive
                                    change in the society and maintaining high standards of personal ethics , An
                                    effective
                                    communicator with strong mentoring, relationship management & interpersonal
                                    skills .
                                </cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <div class="card container">
        <div class="card-body row">
            <div class="additional-teach">
                <h5>Approved PG Teacher</h5>
                <ul>
                    <li>
                        <p>Letter of approved PG (Post Graduate) Teacher for M.E. (Computer Engg).
                            <span><a href="docs/ME_Letter1.pdf#toolbar=0" target="_blank" class="btn btn-outline-info btn-sm">View</a></span>
                        </p>
                    </li>

                </ul>
            </div>
            <div class="additional-teach">
                <h5>ADDITIONAL TEACHING</h5>
                <ul>
                    <li>
                        <p>Teaching German Language of A1 Certification level at a professional level in the College .
                            <span><a href="docs/german.jpg" target="_blank" class="btn btn-outline-info btn-sm">View</a></span>
                        </p>

                    </li>
                    <li>
                        <p>Opted German Language in school and Cleared G2 Course from Max Mueller Bhavan, Pune .
                            <span><a href="docs/german2.jpg" target="_blank" class="btn btn-outline-info btn-sm">View</a><span>
                        </p>

                    </li>
                </ul>
            </div>
            <div class="conference">
                <h5>CONFERENCES PARTICIPATION</h5>
                <ul>
                    <li>
                        <p>Selected as a Session Chairperson on Special Theme IOT
                            (Artificial Intelligence, Data Science, Wireless Communication and IoT)
                            for the IEEE International Conference to be held in March 2021 .
                            <a href="http://www.bvicam.ac.in/indiacom/splSessionDetails.asp?sessionRequestID=1087" class="btn btn-outline-info btn-sm" target="_blank"> View </a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ------------------------------personal information end--------------------- -->
    <br>


    <!-- ------------------------------Educational Qualification-------------------------- -->

    <?php

    $education = "SELECT * FROM education";
    $eduresult = mysqli_query($link, $education);


    ?>
    <div style="padding-top: 10px;" id="eduqua" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 ">
                <h3>EDUCATIONAL QUALIFICATIONS </h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Course</th>
                            <th>Institute</th>
                            <th>Year</th>
                            <th>Percentage</th>
                            <th>Projects</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($eduresult)) {
                        ?>
                            <tr>
                                <td><?php echo $row["Degree"]; ?></td>
                                <td><?php echo $row["Course"]; ?></td>
                                <td><?php echo $row["Institute"]; ?></td>
                                <td><?php echo $row["Year"]; ?></td>
                                <td><?php echo $row["Percentage"]; ?>%</td>
                                <td><?php echo $row["Projects"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info"><i class="far fa-eye"></i></a></td>

                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ------------------------------Educational Qualification-------------------------- -->
    <hr>
    <!-- ----------------------------------Work Experience-------------------------- -->

    <div style="padding-top: 10px;" id="workexp" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h3>
                    WORK EXPERIENCE
                </h3>
            </div>

            <?php
            $work = "SELECT * FROM workexperience";
            $workresult = mysqli_query($link, $work);
            ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead">
                        <tr>
                            <th>Institute/Industry</th>
                            <th>Designation</th>
                            <th>Period</th>
                            <th>View </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($workresult)) {
                        ?>
                            <tr>
                                <td><?php echo $row["Institute"]; ?></td>
                                <td><?php echo $row["Designation"]; ?></td>
                                <td><?php echo $row["Period"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info"><i class="far fa-eye"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- -----------------------------------Work Experience-------------------------- -->
    <hr>
    <!-- ------------------------------------achievements courses books------------------------ -->

    <div class="container">
        <div class="row ">

            <div class="col-12 col-sm-4" id="accordion">
                <div class="card">
                    <div id="books" class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="collapse-btn btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                BOOKS <i class="fas fa-caret-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <ol>
                                <li><a target="_blank" href="https://techknowledgebooks.com/product/internet-of-things/">Yogesh P.
                                        Pingle, Sandeep Kamble, Shrutika Waghmare , “Internet of Things”,
                                        2019, ISBN : 978-93-89233-20-9</a></li>
                                <li><a target="_blank" href="https://techknowledgebooks.com/product/internet-of-everything/">Yogesh P.
                                        Pingle, Dr. Vinayak Shinde,” Internet of Everything”, Techknowledge
                                        Publications-Pune, Jan 2020, ISBN – 978-93-89748-80-2.</a></li>
                                <li><a target="_blank" href="https://techknowledgebooks.com/product/internet-of-things-2/">Yogesh P.
                                        Pingle, Likhesh N. Kolhe , “Internet of Things”, Tech-Max Publication-Pune,
                                        2018, ISBN – 978-93-88200-57-8</a></li>
                                <li><a target="_blank" href="https://techknowledgebooks.com/product/architecting-of-iot/">Yogesh P.
                                        Pingle, Dr. Vinayak Shinde,” Architecting of IoT”, Tech-Max
                                        Publication-Pune, 2018, ISBN – 978-93-88200-57-8</a></li>
                                <li><a target="_blank" href="https://techknowledgebooks.com/product/physical-camputing-iot-programming/">Suvarna
                                        Shirke, Yogesh Pingle, Mansi Kambli,” Physical Computing and IoT
                                        Programming, Tech-Max Publication-Pune, 2017, ISBN – 978-93-5077-090-0.</a></li>
                                <!-- <li>Yogesh P. Pingle, Mrs. Shipla Muley, Manoj Burad, Jyoti Mante,” Visual Basic
                                    Programming”, Nirali Prakashan, June 2003</li> -->

                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div id="achievements" class="col-12 col-sm-4" id="accordion">
                <div class="card">
                    <div id="books" class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class=" collapse-btn btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ACHIEVEMENTS <i class="fas fa-caret-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <ol>
                                <li><a target="_blank" href="docs/harmonium.jpg">Harmonium Visharad of Akhil Bharatiya
                                        Gandharva Mahavidyalaya, Miraj.</a></li>
                                <li><a target="_blank" href="docs/german2.jpeg">G-II German Language Certified from Max
                                        Mueller Bhavan, Pune; Goethe-Institute of
                                        Germany </a></li>
                                <li><a target="_blank" href="docs/allindia.jpeg"> Achieved 2nd prize in ALL INDIA Level
                                        Air Instrument competition (2004) in “Swara
                                        Sadhana Samiti”, Churchgate</a>
                                </li>
                                <li><a target="_blank" href="docs/book.jpeg">Participated in Limca Book of World Record
                                        for Continuous Instrument playing
                                        organized by Young Star Trust, Virar for 48 hours. Contributed Continuous
                                        Classical
                                        Harmonium Playing for 2 Hours</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-4" id="accordion">
                <div class="card">
                    <div id="books" class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="collapse-btn btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                COURSES TAUGHT<i class="fas fa-caret-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <ol>
                                <li> Internet Programming</li>
                                <li>Internet of Everything</li>
                                <li>Skill Lab (C++ and Java Programming) for EXTC</li>
                                <li>Advanced Internet Technology</li>
                                <li>Microcontroller and Embedded Programming</li>
                                <li>IoT Mini Project Lab</li>
                                <li>Electronic Communication and Electronic Business</li>
                                <li>Web Programming</li>
                                <li>German Language (Computer Engg. Dept.)</li>
                                <li>Computer Simulation and Modeling</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------achievements courses books------------------------ -->
    <hr>
    <!-- --------------------------------publication in conferences------------------ -->
    <div style="padding-top: 10px;" id="pubincon" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h6> <a class="" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        PUBLICATION IN CONFERENCE <i class="fas fa-caret-down"></i>
                    </a> </h6>
            </div>
            <?php
            $conference = "SELECT * FROM conference ORDER BY Year DESC";
            $conferenceresult = mysqli_query($link, $conference);
            ?>
            <div class="collapse table-responsive" id="collapseExample2">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Title/Topic</th>
                            <th>Name of the Conference</th>
                            <th>Vol,page no</th>
                            <th>Year of Publication</th>
                            <th>View </th>
                            <th <?php echo $style; ?>>Edit</th>
                            <th <?php echo $style; ?>>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srno = 0;
                        while ($row = mysqli_fetch_assoc($conferenceresult)) {
                            $srno++;
                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $row["Title"]; ?></td>
                                <td><?php echo $row["Conference"]; ?></td>
                                <td><?php echo $row["Place"]; ?></td>
                                <td><?php echo $row["Year"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info"><i class="far fa-eye"></i></a></td>
                                <?php
                                echo "
                            <td " . $style . "><a class='btn btn-outline-success' href='conference.php?title=$row[Title]&conference=$row[Conference]&place=$row[Place]&year=$row[Year]&view=$row[View]&rollno=$row[Sr]'><i class='fas fa-edit'></i></a></td>
                            ";
                                ?>
                                <?php
                                echo '<td ' . $style . '>
                                            <form action="index.php" method = "POST"><input type="hidden" name = "title" value = ' . $row['Sr'] . '>
                                            <button class="btn btn-outline-danger" name="conference-delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button></form>
                                        </td>';
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- --------------------------------publication in conferences------------------ -->
    <hr>
    <!-- -----------------------------------publication in Journals------------------ -->

    <div style="padding-top: 10px;" id="pubinjou" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h6> <a class="" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                        PUBLICATION IN JOURNALS <i class="fas fa-caret-down"></i>
                    </a> </h6>
            </div>
            <?php
            $journal = "SELECT * FROM journal ORDER BY Year DESC";
            $journalresult = mysqli_query($link, $journal);
            ?>
            <div class="collapse table-responsive" id="collapseExample3">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Title/Topic</th>
                            <th>Name of the Journal</th>
                            <th>Vol, page no</th>
                            <th>Journal with Impact FACTOR</th>
                            <th>Year of Publication</th>
                            <th>View </th>
                            <th <?php echo $style; ?>>Edit</th>
                            <th <?php echo $style; ?>>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srno = 0;
                        while ($row = mysqli_fetch_assoc($journalresult)) {
                            $srno++;
                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $row["Title"]; ?></td>
                                <td><?php echo $row["Journal"]; ?></td>
                                <td><?php echo $row["Page"]; ?></td>
                                <td><?php echo $row["Factor"]; ?></td>
                                <td><?php echo $row["Year"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info "><i class="far fa-eye"></i></a></td>
                                <?php
                                echo "
                            <td " . $style . "><a class='btn btn-outline-success' href='journal.php?title=$row[Title]&journal=$row[Journal]&page=$row[Page]&year=$row[Year]&view=$row[View]&rollno=$row[Sr]'><i class='fas fa-edit'></i></a></td>
                            ";
                                ?>
                                <?php echo '<td ' . $style . '>
                                <form action="index.php" method = "POST"><input type="hidden" name = "title" value = ' . $row['Sr'] . '>
                                    <button class="btn btn-outline-danger" name="journal-delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                                </td>';
                                ?>

                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- ------------------------------------publication in Journals------------------ -->

    <hr>
    <!-- ---------------------------------Interaction With outside World-------------- -->
    <div style="padding-top: 10px;" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h6> <a class="" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                        INTERACTION WITH OUTSIDE WORLD <i class="fas fa-caret-down"></i>
                    </a> </h6>
            </div>
            <?php
            $interaction = "SELECT * FROM interaction ORDER BY Year DESC";
            $interactionresult = mysqli_query($link, $interaction);
            ?>
            <div class="collapse table-responsive" id="collapseExample4">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Nature of Interaction </th>
                            <th>Year</th>
                            <th>View </th>
                            <th <?php echo $style; ?>>Edit</th>
                            <th <?php echo $style; ?>>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srno = 0;
                        while ($row = mysqli_fetch_assoc($interactionresult)) {
                            $srno++;
                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $row["Interaction"]; ?></td>
                                <td><?php echo $row["Year"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info "><i class="far fa-eye"></i></a></td>
                                <?php
                                echo "
                            <td " . $style . "><a class='btn btn-outline-success ' href='interaction.php?interaction=$row[Interaction]&year=$row[Year]&view=$row[View]&rollno=$row[Sr]'><i class='fas fa-edit'></i></a></td>
                            ";
                                ?>
                                <?php echo '<td ' . $style . '>
                                <form action="index.php" method = "POST"><input type="hidden" name = "title" value = ' . $row['Sr'] . '>
                                <input type="hidden" name = "interactiondocument" value = ' . $row['View'] . '>
                                    <button class="btn btn-outline-danger" name="interaction-delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button>

                                </form>
                                </td>';
                                ?>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <hr>

    <!-- ----------------------------------Interaction With outside World-------------- -->

    <div style="padding-top: 10px;" id="training" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h6> <a class="" data-toggle="collapse" href="#collapseExample11" aria-expanded="false" aria-controls="collapseExample10">
                        CORPORATE AND PROFESSIONAL TRAINING ATTENDED <i class="fas fa-caret-down"></i>
                    </a> </h6>
            </div>
            <?php
            $training = "SELECT * FROM training ORDER BY Duration DESC";
            $trainingresult = mysqli_query($link, $training);
            ?>
            <div class="collapse table-responsive" id="collapseExample11">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Training/STTP attended
                            </th>
                            <th>Title</th>
                            <th>Name of Program</th>
                            <th>Organizing Agency</th>
                            <th>Year</th>
                            <th>View </th>
                            <th <?php echo $style; ?>>Edit</th>
                            <th <?php echo $style; ?>>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srno = 0;
                        while ($row = mysqli_fetch_assoc($trainingresult)) {
                            $srno++;
                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $row["Training"]; ?></td>
                                <td><?php echo $row["Title"]; ?></td>
                                <td><?php echo $row["Program"]; ?></td>
                                <td><?php echo $row["Agency"]; ?></td>
                                <td><?php echo $row["Duration"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info "><i class="far fa-eye"></i></a></td>
                                <?php
                                echo "
                            <td " . $style . "><a class='btn btn-outline-success ' href='training.php?training=$row[Training]&title=$row[Title]&program=$row[Program]&agency=$row[Agency]&duration=$row[Duration]&rollno=$row[Sr]&view=$row[View]'><i class='fas fa-edit'></i></a></td>
                            ";
                                ?>
                                <?php echo '<td ' . $style . '>
                                <form action="index.php" method = "POST"><input type="hidden" name = "title" value = ' . $row['Sr'] . '>
                                <input type="hidden" name = "trainingdocument" value = ' . $row['View'] . '>

                                    <button class="btn btn-outline-danger" name="training-delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button>
    
                                </form>
                                </td>';
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <hr>

    <!--------------------------------------extended learning  activities------------------>
    <div style="padding-top: 10px;" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h6> <a class="" data-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                        EXTENDED LEARNING ACTIVITIES <i class="fas fa-caret-down"></i>
                    </a> </h6>
            </div>
            <?php
            $activities = "SELECT * FROM activities ORDER BY Duration DESC";
            $activitiesresult = mysqli_query($link, $activities);
            ?>
            <div class="collapse table-responsive" id="collapseExample5">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th> Development/
                                Training/STTP attended
                                /Webinar
                            </th>
                            <th>Title</th>
                            <th>Name of Program</th>
                            <th>Organizing Agency</th>
                            <th>Year</th>
                            <th>View </th>
                            <th <?php echo $style; ?>>Edit</th>
                            <th <?php echo $style; ?>>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srno = 0;
                        while ($row = mysqli_fetch_assoc($activitiesresult)) {
                            $srno++;
                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $row["Training"]; ?></td>
                                <td><?php echo $row["Title"]; ?></td>
                                <td><?php echo $row["Program"]; ?></td>
                                <td><?php echo $row["Agency"]; ?></td>
                                <td><?php echo $row["Duration"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info "><i class="far fa-eye"></i></a></td>
                                <?php
                                echo "
                            <td " . $style . "><a class='btn btn-outline-success ' href='activity.php?training=$row[Training]&title=$row[Title]&program=$row[Program]&agency=$row[Agency]&duration=$row[Duration]&rollno=$row[Sr]'><i class='fas fa-edit'></i></a></td>
                            ";
                                ?>
                                <?php echo '<td ' . $style . '>
                                <form action="index.php" method = "POST"><input type="hidden" name = "title" value = ' . $row['Sr'] . '>
                                <input type="hidden" name = "activitydocument" value = ' . $row['View'] . '>
                                    <button class="btn btn-outline-danger" name="activity-delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button>

                                </form>
                                </td>';
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!--------------------------------------extended learning  activities------------------>
    <hr>
    <!------------------------------------ Details of the NPTEL courses completed----------------------------------->

    <div style="padding-top: 10px;" id="nptel" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h6> <a class="" data-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">
                        DETAILS OF NPTEL COURSES COMPLETED <i class="fas fa-caret-down"></i>
                    </a> </h6>
            </div>
            <?php
            $nptel = "SELECT * FROM nptel ORDER BY Session DESC";
            $nptelresult = mysqli_query($link, $nptel);
            ?>
            <div class="collapse table-responsive" id="collapseExample6">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Course Name</th>
                            <th>Duration</th>
                            <th>Year</th>
                            <th>View </th>
                            <th <?php echo $style; ?>>Edit</th>
                            <th <?php echo $style; ?>>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srno = 0;
                        while ($row = mysqli_fetch_assoc($nptelresult)) {
                            $srno++;
                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $row["Name"]; ?></td>
                                <td><?php echo $row["Duration"]; ?></td>
                                <td><?php echo $row["Session"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info "><i class="far fa-eye"></i></a></td>
                                <?php
                                echo "
                            <td " . $style . "><a class='btn btn-outline-success ' href='nptel.php?name=$row[Name]&duration=$row[Duration]&session=$row[Session]&rollno=$row[Sr]'><i class='fas fa-edit'></i></a></td>
                            ";
                                ?>
                                <?php echo '<td ' . $style . '>
                                <form action="index.php" method = "POST"><input type="hidden" name = "title" value = ' . $row['Sr'] . '>
                                <input type="hidden" name = "npteldocument" value = ' . $row['View'] . '>
                                    <button class="btn btn-outline-danger" name="nptel-delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button>

                                </form>
                                </td>';
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!------------------------------------ Details of the NPTEL courses completed----------------------------------->
    <hr>

    <!----------------------------------- FDPS and Conferences organized by Faculty:-------------------- ---->

    <div style="padding-top: 10px;" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h6> <a class="" data-toggle="collapse" href="#collapseExample8" aria-expanded="false" aria-controls="collapseExample8">
                        FDPS AND CONFERENCE ORGANIZED <i class="fas fa-caret-down"></i>
                    </a> </h6>
            </div>
            <?php
            $fdps = "SELECT * FROM fdps ORDER BY Year DESC";
            $fdpsresult = mysqli_query($link, $fdps);
            ?>
            <div class="collapse table-responsive" id="collapseExample8">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Program </th>
                            <th>Year</th>
                            <th>View </th>
                            <th <?php echo $style; ?>>Edit</th>
                            <th <?php echo $style; ?>>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srno = 0;
                        while ($row = mysqli_fetch_assoc($fdpsresult)) {
                            $srno++;
                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $row["Program"]; ?></td>
                                <td><?php echo $row["Year"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info "><i class="far fa-eye"></i></a></td>
                                <?php
                                echo "
                            <td " . $style . "><a class='btn btn-outline-success ' href='fdps.php?program=$row[Program]&year=$row[Year]&rollno=$row[Sr]'><i class='fas fa-edit'></i></a></td>
                            ";
                                ?>
                                <?php echo '<td ' . $style . '>
                                <form action="index.php" method = "POST"><input type="hidden" name = "title" value = ' . $row['Sr'] . '>
                                <input type="hidden" name = "fdpsdocument" value = ' . $row['View'] . '>
                                    <button class="btn btn-outline-danger" name="fdps-delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button>
 
                                </form>
                                </td>';
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!------------------------------------ FDPS and Conferences organized by Faculty:------------------- -->
    <hr>

    <!------------------------------------ Professional Membership Details of Faculties: -->

    <div style="padding-top: 10px;" id="pro" class=" heading container ">
        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h6> <a class="" data-toggle="collapse" href="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">
                        PROFESSIONAL MEMBERSHIP DETAILS <i class="fas fa-caret-down"></i>
                    </a> </h6>
            </div>
            <?php
            $membership = "SELECT * FROM membership";
            $membershipresult = mysqli_query($link, $membership);
            ?>
            <div class="collapse table-responsive-sm" id="collapseExample7">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Membership Details</th>
                            <th>View </th>
                            <th <?php echo $style; ?>>Edit</th>
                            <th <?php echo $style; ?>>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srno = 0;
                        while ($row = mysqli_fetch_assoc($membershipresult)) {
                            $srno++;
                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $row["Membership"]; ?></td>
                                <td><a <?php if ($row["View"] == '') {
                                            echo "style='display:none'";
                                        } ?> href="<?php echo $row["View"] ?>#toolbar=0" target="_blank" class="btn btn-outline-info "><i class="far fa-eye"></i></a></td>
                                <?php
                                echo "
                            <td " . $style . "><a class='btn btn-outline-success' href='membership.php?membership=$row[Membership]&rollno=$row[Sr]'><i class='fas fa-edit'></i></a></td>
                            ";
                                ?>
                                <?php echo '<td ' . $style . '>
                                <form action="index.php" method = "POST"><input type="hidden" name = "title" value = ' . $row['Sr'] . '>
                                <input type="hidden" name = "membershipdocument" value = ' . $row['View'] . '>
                                    <button class="btn btn-outline-danger" name="membership-delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button>
  
                                </form>
                                </td>';
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!------------------------------------ Professional Membership Details of Faculties: -->

    <hr>





    <!-- -----------------------------------------------youtube-------------------------- -->
    <div id="youtube" class=" container">
        <div class="  youtube-container row">
            <div class="col-12 col-sm-4">
                <iframe width="100%" src="https://www.youtube.com/embed/BUH5Ykkwidk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-sm-4">
                <iframe width="100%" src="https://www.youtube.com/embed/Hbff9xvJFI4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-sm-4">
                <iframe width="100%" src="https://www.youtube.com/embed/20u-qP0hwzQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------youtube-------------------------- -->

    <!-- ------------------------------------------blog googlescholor scopus---------------------------------- -->

    <div id="" class=" container ">
        <div class="row">
            <div class="blog col-12 col-md-4">
                <a target="_blank" href="https://yogeshpingle.home.blog/"><img class="d-block w-100 " src="images/blog.jpg"></a>
            </div>
            <div class="blog col-12 col-md-4">
                <a target="_blank" href="http://yppingle.blogspot.com/"><img class="d-block w-100 " src="images/music.png"></a>
            </div>
            <div class="blog col-12 col-md-4">
                <a target="_blank" href="https://scholar.google.com/scholar?hl=en&as_sdt=0%2C5&q=yogesh+pingle&btnG="><img class="d-block w-100 " src="images/google-scholar.png"></a>
            </div>
        </div>
        <div class="row">
            <div class="scopus col-12 ">
                <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57170579400"><img class="d-block w-100 " src="images/scopus.JPG"></a>
            </div>
        </div>

    </div>
    <!-- -----------------------------blog googlescholor scopus---------------------------------- -->
    <hr>


    <!-- -----------------------------------------------Footer---------------------------- -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <h6>Useful Links</h6>
                    <ul class="footer-links">
                        <li><a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57170579400"><i class="fas fa-hand-point-right"></i> Scopus</a></li>
                        <li><a target="_blank" href="https://yogeshpingle.home.blog/"><i class="fas fa-hand-point-right"></i> Blog</a></li>
                        <li><a target="_blank" href="https://scholar.google.com/scholar?hl=en&as_sdt=0%2C5&q=yogesh+pingle&btnG=&oq=yoge"><i class="fas fa-hand-point-right"></i> Google Scholor</a></li>
                        <li><a target="_blank" href="http://yppingle.blogspot.com/"><i class="fas fa-hand-point-right"></i> Music Therapy</a></li>
                        <li><a target="_blank" href="https://publons.com/researcher/3762151/yogesh-pingle/"><i class="fas fa-hand-point-right"></i> Publons</a></li>
                        <li><a target="_blank" href="https://orcid.org/0000-0003-2124-885X"><i class="fas fa-hand-point-right"></i> Orcid</a></li>

                    </ul>
                </div>

                <div class="col-xs-6 col-md-4">
                    <h6>OverView</h6>
                    <ul class="footer-links">
                        <li><a href="#personalinformation"><i class="fas fa-link"></i> Home</a></li>
                        <li><a href="#personalinformation"><i class="fas fa-link"></i> About</a></li>
                        <li><a href="#workexp"><i class="fas fa-link"></i> Work Experience</a></li>
                        <li><a href="#eduqua"><i class="fas fa-link"></i> Education</a></li>
                        <li><a href="#achievements"><i class="fas fa-link"></i> Achievements</a></li>
                        <li><a href="#pubincon"><i class="fas fa-link"></i> Publications</a></li>
                        <li><a href="#interaction"><i class="fas fa-link"></i> Interaction</a></li>
                        <li><a href="#nptel"><i class="fas fa-link"></i> Nptel</a></li>
                        <li><a href="#fdps"><i class="fas fa-link"></i> FDPS & Conferences</a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCjhJz7_GBZO8ru3PdCdILBg"><i class="fas fa-link"></i> YouTube</a></li>

                    </ul>
                </div>

                <div class="col-xs-6 col-md-4">
                    <h6>Contact</h6>
                    <ul class="footer-links">
                        <li><i class="fa fa-house-user"></i> 203/B Wing,
                            Peony, Green Court Orchid Complex,
                            Behind Vasai Court, Vasai Road (West),
                            Dist :-Palghar, Maharashtra. Pin:- 401201
                        </li><br>
                        <li><a href=""><i class="fa fa-phone"></i> 9422492389 / 9665009742</a></li><br>
                        <li><a href=""><i class="fa fa-envelope"></i><a href=""> yogeshpingle1977@gmail.com </a>/ <a href="">yogesh.pingle@vcet.edu.in</a> </a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright © 2020 Yogesh Pingle . All Rights Reserved.
                    </p>

                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" target="_blank" href="https://www.facebook.com/yogesh.pingle.92"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="twitter" target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" target="_blank" href="https://www.youtube.com/channel/UCjhJz7_GBZO8ru3PdCdILBg"><i class="fab fa-youtube"></i></a></li>
                        <li><a class="linkedin" target="_blank" href="https://www.linkedin.com/in/yogesh-pingle-9922743a/"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="developedby" style="text-align: center; color: #2b7a78;">Developed by - Chirag | Suchit | Adnan</p>
        <!-- Badge Code - Do Not Change The Code -->
        <div class="col-xs-12 mt20" id="bg">
            <div style="margin:0px auto;width:133px;background:#443c94;text-align:left;display:flex;border-radius:5px">
                <span style="padding:7px;display:inline-block;border-right:1px solid #746dba"><a href="http://visitorshitcounter.com" rel="nofollow noopener" target="_blank" title="https://visitorshitcounter.com/"><img src="https://visitorshitcounter.com/img/s-logo.svg" alt="https://visitorshitcounter.com/" style="width:100%;border:none;float:left"></a></span><span class="text" id="dupli_hit_counter" style="padding:10px 0 0 0;display:inline-block;color:#ffffff;width:100%;text-align:center;"></span></span><input type="hidden" id="site_val" value="https://visitorshitcounter.com/counterDisplay?code=ddf2e938a6e52a7cfaad6e5a45203ab8&style=0017&pad=5&type=page&initCount=1">
            </div>
        </div>

        <!-- Badge Code End Here -->
    </footer>
    <!-- -----------------------------------------------Footer---------------------------- -->





    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://visitorshitcounter.com/js/badgess.js?v=1600537360"></script>
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
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        echo "<script> $(document).ready(function(){
                $('.btn-outline-info').click(function () {
                        event.preventDefault();
                        swal({
                            title: 'Please Register',
                            text: 'Register To View Document',
                            icon: 'info',
                            button: 'Ok!',
                          });
              });
            
            });</script>";
    }
    ?>
    <?php
    mysqli_close($link);
    ?>

    <?php include "config.php";

    // --------------CONFERENCE-----------------------------

    if (isset($_REQUEST['conference-delete'])) {
        $sql = "DELETE FROM conference WHERE Sr = '{$_REQUEST['title']}'";
        if (mysqli_query($link, $sql)) {
            echo  "<script>
            swal({
              title: 'Successfully Deleted',
              text: 'Record Deleted!!',
              icon: 'success',
              button: 'Ok!',
            });
            </script>";
        } else {
            echo "Something went wrong";
        }
        header("location:index.php");
    }


    // ----------------------------JOURNAL--------------------------
    if (isset($_REQUEST['journal-delete'])) {
        $sql = "DELETE FROM journal WHERE Sr = '{$_REQUEST['title']}'";
        if (mysqli_query($link, $sql)) {
            echo  "<script>
      swal({
        title: 'Successfully Deleted',
        text: 'Record Deleted!!',
        icon: 'success',
        button: 'Ok!',
      });
      </script>";
        } else {
            echo "Something went wrong";
        }
        header("location:index.php");
    }
    // ---------------------------------INTERACTION WITH OUTSIDE WORLD ---------------------------------
    if (isset($_REQUEST['interaction-delete'])) {
        $sql = "DELETE FROM interaction WHERE Sr = '{$_REQUEST['title']}'";
        $document = '';
        if (mysqli_query($link, $sql)) {
            $document =  $_REQUEST['interactiondocument'];
            unlink($document);
            echo  "<script>
        swal({
          title: 'Successfully Deleted',
          text: 'Record Deleted!!',
          icon: 'success',
          button: 'Ok!',
        });
        </script>";
        } else {
            echo "Something went wrong";
        }
        header("location:index.php");
    }
    // --------------------------CORPORATE AND PROFESSIONAL TRAINING ATTENDED----------------------------
    if (isset($_REQUEST['training-delete'])) {
        $sql = "DELETE FROM training WHERE Sr = '{$_REQUEST['title']}'";
        $document = '';
        if (mysqli_query($link, $sql)) {
            $document =  $_REQUEST['document'];
            unlink($trainingdocument);
            echo  "<script>
            swal({
              title: 'Successfully Deleted',
              text: 'Record Deleted!!',
              icon: 'success',
              button: 'Ok!',
            });
            </script>";
            header("location:index.php,refresh:2");
        } else {
            echo "Something went wrong";
        }
    }
    // ------------------------EXTENDED LEARNING ACTIVITIES ----------------------
    if (isset($_REQUEST['activity-delete'])) {
        $sql = "DELETE FROM activities WHERE Sr = '{$_REQUEST['title']}'";
        $document = '';
        if (mysqli_query($link, $sql)) {
            $document =  $_REQUEST['activitydocument'];
            unlink($document);
            echo  "<script>
        swal({
          title: 'Successfully Deleted',
          text: 'Record Deleted!!',
          icon: 'success',
          button: 'Ok!',
        });
        </script>";
        } else {
            echo "Something went wrong";
        }
        header("location:index.php");
        header("Refresh: 0");
    }

    // ------------------------------DETAILS OF NPTEL COURSES COMPLETED --------------------------
    if (isset($_REQUEST['nptel-delete'])) {
        $sql = "DELETE FROM nptel WHERE Sr = '{$_REQUEST['title']}'";
        $document = '';
        if (mysqli_query($link, $sql)) {
            $document =  $_REQUEST['npteldocument'];
            unlink($document);
            echo  "<script>
        swal({
          title: 'Successfully Deleted',
          text: 'Record Deleted!!',
          icon: 'success',
          button: 'Ok!',
        });
        </script>";
        } else {
            echo "Something went wrong";
        }
        header("location:index.php");
    }
    // ---------------------------FDPS AND CONFERENCE ORGANIZED --------------------------
    if (isset($_REQUEST['fdps-delete'])) {
        $sql = "DELETE FROM fdps WHERE Sr = '{$_REQUEST['title']}'";
        $document = '';
        if (mysqli_query($link, $sql)) {
            $document =  $_REQUEST['fdpsdocument'];
            unlink($document);
            echo  "<script>
        swal({
          title: 'Successfully Deleted',
          text: 'Record Deleted!!',
          icon: 'success',
          button: 'Ok!',
        });
        </script>";
        } else {
            echo "Something went wrong";
        }
        header("location:index.php");
    }
    // -------------------------PROFESSIONAL MEMBERSHIP DETAILS ----------------------
    if (isset($_REQUEST['membership-delete'])) {
        $sql = "DELETE FROM membership WHERE Sr = '{$_REQUEST['title']}'";
        $document = '';
        if (mysqli_query($link, $sql)) {
            $document =  $_REQUEST['membershipdocument'];
            unlink($document);
            echo  "<script>
        swal({
          title: 'Successfully Deleted',
          text: 'Record Deleted!!',
          icon: 'success',
          button: 'Ok!',
        });
        
        </script>";
            header("Refresh: 1");
        } else {
            echo "Something went wrong";
        }
        header("location:index.php");
    }
    ?>
</body>

</html>