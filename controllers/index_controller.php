<?php

    $no_results = 1;
    $running_processes = [];
    exec("ps a | grep 'minecraft'", $running_processes, $no_results);

    if(!$no_results) {
        echo "<pre>";
        var_dump($running_processes);
        echo "</pre>";
    }

 ?>
