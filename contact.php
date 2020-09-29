<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $mailTo = "b.austin7007@gmail.com";
    $headers = "From: ".$name;
    $txt = "You have received a new inquiry from ".$name. ".\n\n" .$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend")
}