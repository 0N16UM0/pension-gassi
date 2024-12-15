<?php 
require("../inc/functions.inc.php");
require("../inc/db.inc.php");

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM `messages` WHERE `id` = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

$message = $stmt->fetch();

if (empty($message)) {
    header("Location: contact.php");
}

ob_start();
require("./views/contact-view.view.php");
$content = ob_get_contents();
ob_end_clean();

require("./layouts/layout.php");
?>