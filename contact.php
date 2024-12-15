<?php 
require("inc/db.inc.php");
require("inc/functions.inc.php");

$isFormSubmitted = (!empty(strlen($_POST['projectname'])) &&
                    !empty(strlen($_POST['projectemail'])) &&
                    !empty(strlen($_POST['projectsubject'])) &&
                    !empty(strlen($_POST['projectmessage'])));

if ($isFormSubmitted) {
    $stmt = $pdo->prepare("INSERT INTO `messages` (`name`, `email`, `subject`, `message`, `timestamp`) VALUE(:projectname, :projectemail, :projectsubject, :projectmessage, :projecttimestamp)");

    $name = $_POST['projectname'];
    $mail = $_POST['projectemail'];
    $subject = $_POST['projectsubject'];
    $message = $_POST['projectmessage'];
    $timestamp = time();

    $stmt->bindParam(":projectname", $name, PDO::PARAM_STR);
    $stmt->bindParam(":projectemail", $mail, PDO::PARAM_STR);
    $stmt->bindParam(":projectsubject", $subject, PDO::PARAM_STR);
    $stmt->bindParam(":projectmessage", $message, PDO::PARAM_STR);
    $stmt->bindParam(":projecttimestamp", $timestamp, PDO::PARAM_STR);

    $stmt->execute();
}

header("Location: index.php?contact=success#contact");
die();