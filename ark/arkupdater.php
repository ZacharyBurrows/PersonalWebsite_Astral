<?php
    function runscript($pw) {
        $cpw="andwater";
        if($pw===$cpw)
            return "OUTPUT:\n" . shell_exec('ssh_command.sh 2>&1');
        else
            return "Invalid password";
    }

    if (isset($_POST['password'])) {
        $result = runscript(strval($_POST['password']));
    }
?>

<html>
<body>

    <form action="" method="post">
    <p>password: <input type="text" name="password" /></p>
    <p><input type="submit"/></p>


    <?php if (isset($result)) { ?>
        <textarea rows="30" cols="75"> <?php echo $result ?></textarea>
    <?php } ?>
</body>
</html>