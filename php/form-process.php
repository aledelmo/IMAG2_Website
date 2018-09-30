<?php

$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

$EmailTo = "delmonte.ale92@gmail.com";
$Subject = "IMAG2: New contact from $name !\n";

$Body = "A new message has been sent using the IMAG2 web-form.\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n\n";
$Body .= "Message: \n";
$Body .= $message;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From:" . $email);

if ($success && $errorMSG == "") {
    echo "success";
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>