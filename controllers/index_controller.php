<?php

    $has_results = 0;
    $running_processes = [];
    exec("ps a | grep 'minecraft'", $running_processes, $has_results);

    if($has_results) {
        echo "<pre>";
        var_dump($running_processes);
        echo "</pre>";
    }

 ?>
