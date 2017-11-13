<?php
    include_once 'connectionDB.php';

    define('TABLE_NAME', 'chat');


function tableNotExists($pdo, $table)
{
    try {
        $result = $pdo->query("SELECT 1 FROM $table LIMIT 1");
    } catch (Exception $e) {
        return true;
    }
    return false;
}

function createTable()
{
    global $db;
    $sqlquery = file_get_contents('createTable.sql');
    $db->query($sqlquery);
}


function sendMessageInDB($user, $message)
{
    global $db;
    if (tableNotExists($db, TABLE_NAME)) {
        createTable();
    } else {
        $query = $db->prepare('INSERT INTO chat(pseudo, messages) VALUES (:user, :comment)');
        $query->execute(array(
        'user' => $user,
        'comment' => $message
        ));
    }
}


function showMessage()
{
    global $db;
    if (!isset($db)) {
        include_once 'connectionDB.php';
    }
    $lastMessage = $db->query('SELECT pseudo, messages FROM chat ORDER BY ID DESC LIMIT 0, 10');
    if ($lastMessage) {
        while ($chat = $lastMessage->fetch()) {
            echo '<p><strong>' . htmlspecialchars($chat['pseudo']) . '</strong> : ' . htmlspecialchars($chat['messages']) . '</p>';
        }
    }
}
