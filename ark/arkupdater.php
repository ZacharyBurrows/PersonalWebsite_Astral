<?php
    function runscript($pw) {
        $cpw="andwater";
        if($pw===$cpw){
	    echo "running your script";
            $message=shell_exec("/var/www/PersonalWebsite_Astral/ark/ssh_command.sh 2>&1");
	    return $message;
        }
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
    <p><input type="submit" value="Update ARK" /></p>


    <?php if (isset($result)) { ?>
        <textarea rows="30" cols="75"> <?php echo $result ?></textarea>
    <?php } ?>
</body>
</html>
