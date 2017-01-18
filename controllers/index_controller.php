<?php
    /******************************************/
    /** These variables are for the web page **/
    $status_class = "";
    $status_message = "";
    $server_action_button = "";
    /******************************************/
    $script_path = "/var/www/html/minecraft_server/minecraft/resources/minecraft_server_script.sh";


    $no_results = 1;
    $running_processes = [];
    $result = exec("sh {$script_path} status", $running_processes, $no_results);

    if($result == "minecraft_server.jar is running.") {
        // echo "<pre>";
        // var_dump($running_processes);
        // echo "</pre>";
        $status_class = 'status-running';
        $status_message = 'Running';
        $server_action_button = "<button type='submit' id='SubmitButton' name='submit' value='stop' class='btn btn-lg btn-block btn-danger'> Stop Server </button>";
    }
    else {
        $status_class = 'status-down';
        $status_message = 'Down';
        $server_action_button = "<button type='submit' id='SubmitButton' name='submit' value='start' class='btn btn-lg btn-block btn-success'> Start Server </button>";
    }

 ?>
