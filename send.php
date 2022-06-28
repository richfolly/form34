<?php
    $first_name = strip_tags($_POST['first_name']);
    $last_name = strip_tags($_POST['last_name']);
    $City = strip_tags($_POST['City']);
    $State = strip_tags($_POST['State']);
    $Zip = strip_tags($_POST['Zip']);
    $Tax = strip_tags($_POST['Tax']);
    $Website = strip_tags($_POST['Website']);
    $Ownership = strip_tags($_POST['Ownership']);
    $day = strip_tags($_POST['day']);
    $first_name_2 = strip_tags($_POST['first_name_2']);
    $last_name_2 = strip_tags($_POST['last_name_2']);
    $SSN = strip_tags($_POST['SSN']);
    $email = strip_tags($_POST['email']);
    $city_2 = strip_tags($_POST['city_2']);
    $state_2 = strip_tags($_POST['state_2']);
    $your_email_1 = strip_tags($_POST['your_email_1']);
    $msg = nl2br("First Name: ".$first_name."\r\n"."Last Name: ".$last_name."\r\n"."Last Name: ".$last_name );
    mail("someone@example.com","My subject",$msg);
?>

