<?php
require_once '../models/ChatModel.php';

class ChatController
{
    private $model;

    public function __construct()
    {
        $this->model = new ChatModel();
    }

    public function fetchMessages()
    {
        $messages = $this->model->getMessages();
        echo json_encode($messages);
    }

    public function postMessage()
    {
        $name = $_POST['name'] ?? 'undefined';
        $message = $_POST['message'] ?? 'undefined';
        if ($this->model->saveMessage($name, $message)) {
            echo "Pesan berhasil disimpan";
        } else {
            echo "Gagal menyimpan pesan";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ChatController();
    $controller->postMessage();
} else {
    $controller = new ChatController();
    $controller->fetchMessages();
}
