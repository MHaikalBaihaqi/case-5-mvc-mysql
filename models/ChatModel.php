<?php
require_once '../config.php';

class ChatModel
{
    private $link;

    public function __construct()
    {
        global $link;
        $this->link = $link;
    }

    public function getMessages()
    {
        $sql = "SELECT * FROM MESSAGES ORDER BY timestamp ASC";
        $result = mysqli_query($this->link, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function saveMessage($name, $message)
    {
        $timestamp = date('Y-m-d H:i:s');
        $sql = "INSERT INTO MESSAGES (NAME, MESSAGE, TIMESTAMP) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $name, $message, $timestamp);
        return mysqli_stmt_execute($stmt);
    }
}
