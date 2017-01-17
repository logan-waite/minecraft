<?php
require_once "../models/server_model.php";

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'start') {
        echo start_server();
    }
    else if ($_POST['submit'] == 'stop') {
        echo stop_server();
    }
    else {
        echo ":(";
    }
}
?>
