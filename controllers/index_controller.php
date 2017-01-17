<?php
    /******************************************/
    /** These variables are for the web page **/
    $status_class = "";
    $status_message = "";
    /******************************************/


    $no_results = 1;
    $running_processes = [];
    exec("ps a | grep 'minecraft'", $running_processes, $no_results);

    if(!$no_results) {
        echo "<pre>";
        var_dump($running_processes);
        echo "</pre>";
        $status_class = 'status-running';
        $status_message = 'Running';
    }
    else {
        $status_class = 'status-down';
        $status_message = 'Down';
    }

 ?>
