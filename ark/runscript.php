<?php
    $output=shell_exec('ssh_command.sh 2>$1');

    file_put_contents("output.txt", $output);

    echo $output;
?>