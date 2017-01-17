<?php
require_once "../models/server_model.php";

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'start') {
        echo "starting";
    }
    else if ($_POST['submit'] == 'stop') {
        echo "stopping";
    }
    else {
        echo ":(";
    }
}
?>
