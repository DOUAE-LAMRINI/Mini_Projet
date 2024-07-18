<?php
header('Content-Type: application/json');

$array = array(
    "firstname" => "",
    "lastname" => "",
    "email" => "",
    "phone" => "",
    "message" => "",
    "firstnameError" => "",
    "lastnameError" => "",
    "emailError" => "",
    "phoneError" => "",
    "messageError" => "",
    "isSuccess" => false
);
$emailTo = "lamrinidouae70@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'DBS.inc.php';

    $array["firstname"] = verifyInput($_POST["firstname"]);
    $array["lastname"] = verifyInput($_POST["lastname"]);
    $array["email"] = verifyInput($_POST["email"]);
    $array["phone"] = verifyInput($_POST["phone"]);
    $array["message"] = verifyInput($_POST["message"]);
    $array["isSuccess"] = true;
    $emailTxt = "";

    if (empty($array["firstname"])) {
        $array["firstnameError"] = "I need to know your first name!!";
        $array["isSuccess"] = false;
    } else {
        $emailTxt .= "First name: {$array["firstname"]}\n";
    }

    if (empty($array["lastname"])) {
        $array["lastnameError"] = "I need to know your last name!!";
        $array["isSuccess"] = false;
    } else {
        $emailTxt .= "Last name: {$array["lastname"]}\n";
    }

    if (empty($array["message"])) {
        $array["messageError"] = "I want to know what you would like to tell me!!";
        $array["isSuccess"] = false;
    } else {
        $emailTxt .= "Message: {$array["message"]}\n";
    }

    if (!isEmail($array["email"])) {
        $array["emailError"] = "I need to know your email!!";
        $array["isSuccess"] = false;
    } else {
        $emailTxt .= "Email: {$array["email"]}\n";
    }

    if (!isPhone($array["phone"])) {
        $array["phoneError"] = "I need to know your phone number!!";
        $array["isSuccess"] = false;
    } else {
        $emailTxt .= "Phone: {$array["phone"]}\n";
    }

    if ($array["isSuccess"]) {
        $headers = "From: {$array["firstname"]} {$array["lastname"]} <{$array["email"]}>\r\nReply-to: {$array["email"]}";
        mail($emailTo, "A message from your web site", $emailTxt, $headers);

        $stmt = $pdo->prepare("INSERT INTO messages (firstname, lastname, email, phone, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$array["firstname"], $array["lastname"], $array["email"], $array["phone"], $array["message"]]);
    }

    echo json_encode($array);
}

function isPhone($var)
{
    return preg_match("/^[0-9 ]*$/", $var);
}

function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}
