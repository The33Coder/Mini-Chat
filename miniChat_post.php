<?php
    include_once 'mysql_functions.php';
    include_once 'post_validation.php';
    include_once 'connectionDB.php';

// Veriffication des inputs
if (isset($_POST['userName']) && isset($_POST['message'])) {
    $inputName = $_POST['userName'];
    $inputMessage = $_POST['message'];
    if (messageLeghtFine($inputMessage) && userLeghtFine($inputName)) {
        sendMessageInDB($inputName, $inputMessage);
    } 
}


// redirection
header("Location: index.php");
exit();
