<?php

$script_path = "/var/www/html/minecraft_server/minecraft/resources/minecraft_server_script.sh";
$shell_start = 'echo "import pty; pty.spawn(\'/bin/bash\')" > /tmp/asdf.py
                python /tmp/asdf.py';

function start_server() {
    global $script_path;
    global $shell_start;
    $output = "";
    $failed = 1;
    exec($shell_start);
    exec("sh {$script_path} start", $output, $failed);

    if ($failed) {
        return "Unable to start server." + var_dump($output);
    }
    else {
        return "success";
    }
}

function stop_server() {
    global $script_path;
    global $shell_start;
    $output = "";
    $failed = 1;

    exec("sh {$script_path} stop", $output, $failed);

    if ($failed) {
        return "Unable to stop server." + var_dump($output);
    }
    else {
        return "success";
    }
}
 ?>
