<?php
define ('MESSAGE_LENGHT', '256');
define ('USER_LENGHT', '256');

function userLeghtFine($userName) {
    if(strlen($userName) <= USER_LENGHT){
        return true;
    }
    else{
        return false;
    }
}

function messageLeghtFine($message) {
    if(strlen($message) <= MESSAGE_LENGHT){
        return true;
    }
    else{
        return false;
    }
}