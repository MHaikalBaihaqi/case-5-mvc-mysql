<?php
if (isset($_GET['user']) && $_GET['user'] == '2') {
    header("Location: views/chat2.php");
} else {
    header("Location: views/chat.php");
}
exit();
