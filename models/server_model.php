<?php
$server_start_script = "
                        java -Xmx1024M -Xms1024M -jar /home/logan/minecraft/minecraft_server.jar nogui
                        ";
function start_server() {
    $output = "";
    $failed = 1;
    exec($server_start_script, $output, $failed);

    if ($failed) {
        return "Unable to start server." + var_dump($output);
    }
    else {
        return "success";
    }
}

function stop_server() {
    $output = "";
    $failed = 1;
    exec("stop", $output, $failed);

    if ($failed) {
        return "Unable to stop server." + var_dump($output);
    }
    else {
        return "success";
    }
}
 ?>
