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
<style>
	background-image: url("http://i.imgur.com/nKtB4E2.png");
</style>

<body style="background-image: url("http://i.imgur.com/nKtB4E2.png");">

    <form action="" method="post">
    <p>password: <input type="text" name="password" /></p>
    <p style="color:blue;"><input type="submit" value="Update ARK" /></p>


    <?php if (isset($result)) { ?>
        <textarea rows="30" cols="75"> <?php echo $result ?></textarea>
    <?php } ?>
</body>
</html>
