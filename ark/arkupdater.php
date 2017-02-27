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
	<head>
	<style>
		body {
			background-image: url("http://i.imgur.com/nKtB4E2.png");
		}
	</style>
	</head>

<body >

	<h1>ARK UPDATE SITE</h1>
	<p>Stops, updates, and starts server</br>
	Please be patient. Update can take a few minutes.</br>
	--- </br>
	Good luck out there...</br>
	---</p>

    <form action="" method="post">
    <p>password: <input type="text" name="password" /></p>
    <p style="color:blue;"><input type="submit" value="Update ARK" /></p>


    <?php if (isset($result)) { ?>
        <textarea rows="30" cols="75"> <?php echo $result ?></textarea>
    <?php } ?>
</body>
</html>
