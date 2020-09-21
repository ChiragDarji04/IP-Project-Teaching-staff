<?php 
include "config.php";



if(isset($_POST['conference-submit']))
{
    $Title = $_POST['conference-Title'];
    $Conference = $_POST['Conference'];
    $Paper = $_POST['conference-Paper'];
    $Year = $_POST['conference-Year'];
    $upload = $_POST['conference-upload'];

    $insert = "INSERT into conference(Title,Conference,Place,Year,View) values('$Title','$Conference','$Paper','$Year','$upload')";
    if(mysqli_query($link, $insert))
    {
    //    echo "added succesfully";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    header("location: form.php");
}

if(isset($_POST['journal-submit']))
{

    $Title = $_POST['journal-title'];
    $Journal = $_POST['journal'];
    $Pages = $_POST['journal-pages'];
    $Factor = $_POST['journal-factor'];
    $Year = $_POST['journal-year'];
    $upload = $_POST['journal-upload'];

        $insert = "INSERT into journal(Title,Journal,Page,Factor,Year,View) values('$Title','$Journal','$Pages', '$Factor','$Year','$upload')";
        if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    
    header("location: form.php");
}

if(isset($_POST['interaction-submit']))

{
    $pdfpath='docs/';
   
    $filename = $_FILES['interaction-upload']['name'];

    $interaction = $_POST['interaction'];
    $Year = $_POST['interaction-year'];
    // $upload = $_POST['interaction-upload'];


    if(move_uploaded_file($_FILES["interaction-upload"]["tmp_name"],'docs/'.$filename)){
    $insert = "INSERT into interaction(Interaction,Year,View) values('$interaction','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }

    header("location: form.php");
}

if(isset($_POST['training-submit']))
{

    $pdfpath='docs/';
   
    $filename = $_FILES['training-upload']['name'];

    $training = $_POST['training'];
    $Title = $_POST['training-title'];
    $program = $_POST['training-program'];
    $agency = $_POST['training-agency'];
    $Year = $_POST['training-Year'];
    // $upload = $_POST['training-upload'];

    if(move_uploaded_file($_FILES["training-upload"]["tmp_name"],'docs/'.$filename)){
    $insert = "INSERT into training(Training,Title,Program,Agency,Duration,View) values('$training','$Title','$program','$agency','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}

if(isset($_POST['activity-submit']))
{

    $pdfpath='docs/';
   
    $filename = $_FILES['activity-upload']['name'];

    $activity = $_POST['activity'];
    $Title = $_POST['activity-title'];
    $Name = $_POST['activity-name'];
    $Location = $_POST['activity-location'];
    $Year = $_POST['activity-year'];
    // $upload = $_POST['activity-upload'];

    if(move_uploaded_file($_FILES["activity-upload"]["tmp_name"],'docs/'.$filename)){
    $insert = "INSERT into activities(Training,Title,Program,Agency,Duration,View) values('$activity','$Title','$Name','$Location','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}

if(isset($_POST['nptel-submit']))
{

    $pdfpath='docs/';
   
    $filename = $_FILES['nptel-upload']['name'];

    $nptel = $_POST['nptel-name'];
    $Duration = $_POST['nptel-duration'];
    $Year = $_POST['nptel-year'];
    // $upload = $_POST['nptel-upload'];

    if(move_uploaded_file($_FILES["nptel-upload"]["tmp_name"],'docs/'.$filename)){
    $insert = "INSERT into nptel(Name,Duration,Session,View) values('$nptel','$Duration','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}


if(isset($_POST['fdps-submit']))
{
    $pdfpath='docs/';
   
    $filename = $_FILES['fdps-upload']['name'];
    $Name = $_POST['fdps-name'];
    $Year = $_POST['fdps-year'];
    // $upload = $_POST['fdps-upload'];

    if(move_uploaded_file($_FILES["fdps-upload"]["tmp_name"],'docs/'.$filename)){

    $insert = "INSERT into fdps(Program,Year,View) values('$Name','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}


if(isset($_POST['membership-submit']))
{

    $pdfpath='docs/';
   
    $filename = $_FILES['membership-upload']['name'];

    $membership = $_POST['membership-name'];
    // $upload = $_POST['membership-upload'];

    if(move_uploaded_file($_FILES["membership-upload"]["tmp_name"],'docs/'.$filename)){

    $insert = "INSERT into membership(Membership,View) values('$membership','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}


?>

<?php 
include "config.php";



if(isset($_POST['conference-submit']))
{
    $Title = $_POST['conference-Title'];
    $Conference = $_POST['Conference'];
    $Paper = $_POST['conference-Paper'];
    $Year = $_POST['conference-Year'];
    $upload = $_POST['conference-upload'];

    $insert = "INSERT into conference(Title,Conference,Place,Year,View) values('$Title','$Conference','$Paper','$Year','$upload')";
    if(mysqli_query($link, $insert))
    {
    //    echo "added succesfully";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    header("location: form.php");
}

if(isset($_POST['journal-submit']))
{

    $Title = $_POST['journal-title'];
    $Journal = $_POST['journal'];
    $Pages = $_POST['journal-pages'];
    $Factor = $_POST['journal-factor'];
    $Year = $_POST['journal-year'];
    $upload = $_POST['journal-upload'];

        $insert = "INSERT into journal(Title,Journal,Page,Factor,Year,View) values('$Title','$Journal','$Pages', '$Factor','$Year','$upload')";
        if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    
    header("location: form.php");
}

if(isset($_POST['interaction-submit']))

{
    $pdfpath='docs/';
   
    $filename = $_FILES['interaction-upload']['name'];

    $interaction = $_POST['interaction'];
    $Year = $_POST['interaction-year'];
    // $upload = $_POST['interaction-upload'];


    if(move_uploaded_file($_FILES["interaction-upload"]["tmp_name"],'docs/'.$filename)){
    $insert = "INSERT into interaction(Interaction,Year,View) values('$interaction','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }

    header("location: form.php");
}

if(isset($_POST['training-submit']))
{

    $pdfpath='docs/';
   
    $filename = $_FILES['training-upload']['name'];

    $training = $_POST['training'];
    $Title = $_POST['training-title'];
    $program = $_POST['training-program'];
    $agency = $_POST['training-agency'];
    $Year = $_POST['training-Year'];
    // $upload = $_POST['training-upload'];

    if(move_uploaded_file($_FILES["training-upload"]["tmp_name"],'docs/'.$filename)){
    $insert = "INSERT into training(Training,Title,Program,Agency,Duration,View) values('$training','$Title','$program','$agency','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}

if(isset($_POST['activity-submit']))
{

    $pdfpath='docs/';
   
    $filename = $_FILES['activity-upload']['name'];

    $activity = $_POST['activity'];
    $Title = $_POST['activity-title'];
    $Name = $_POST['activity-name'];
    $Location = $_POST['activity-location'];
    $Year = $_POST['activity-year'];
    // $upload = $_POST['activity-upload'];

    if(move_uploaded_file($_FILES["activity-upload"]["tmp_name"],'docs/'.$filename)){
    $insert = "INSERT into activities(Training,Title,Program,Agency,Duration,View) values('$activity','$Title','$Name','$Location','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}

if(isset($_POST['nptel-submit']))
{

    $pdfpath='docs/';
   
    $filename = $_FILES['nptel-upload']['name'];

    $nptel = $_POST['nptel-name'];
    $Duration = $_POST['nptel-duration'];
    $Year = $_POST['nptel-year'];
    // $upload = $_POST['nptel-upload'];

    if(move_uploaded_file($_FILES["nptel-upload"]["tmp_name"],'docs/'.$filename)){
    $insert = "INSERT into nptel(Name,Duration,Session,View) values('$nptel','$Duration','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}


if(isset($_POST['fdps-submit']))
{
    $pdfpath='docs/';
   
    $filename = $_FILES['fdps-upload']['name'];
    $Name = $_POST['fdps-name'];
    $Year = $_POST['fdps-year'];
    // $upload = $_POST['fdps-upload'];

    if(move_uploaded_file($_FILES["fdps-upload"]["tmp_name"],'docs/'.$filename)){

    $insert = "INSERT into fdps(Program,Year,View) values('$Name','$Year','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}


if(isset($_POST['membership-submit']))
{

    $pdfpath='docs/';
   
    $filename = $_FILES['membership-upload']['name'];

    $membership = $_POST['membership-name'];
    // $upload = $_POST['membership-upload'];

    if(move_uploaded_file($_FILES["membership-upload"]["tmp_name"],'docs/'.$filename)){

    $insert = "INSERT into membership(Membership,View) values('$membership','$pdfpath$filename')";
    if(mysqli_query($link, $insert))
    {
        // echo "Data added";
    }
    else
    {
        echo 'Error: '.mysqli_error($link);
    }
    }
    header("location: form.php");
}


?>

