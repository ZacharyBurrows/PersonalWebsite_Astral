<?php
    if (isset($_POST['button']))
    {
         $output = shell_exec('ssh_command.sh 2>&1');
    }

    echo "<pre>$output</pre>";
?>

<?php
    
?>