<?php
    function runscript($pw) {
        $cpw="andwater";
        if($pw===$cpw){
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
	<style type="text/css">
		body {
                background-size: auto, 100% 100%;
        	}

		p {
		text-align: center;
		}

		h1 {
                text-align: center;
                }

		textarea {
    		display: block;
   	 	margin-left: auto;
    		margin-right: auto;
		}
	</style>
	</head>

<body type="text/css" background="bg.jpg" font-family: "serif" text-align: "center">

	<h1>ARK UPDATE SITE</h1>
	<p><strong>Stops, updates, and starts the server.</br>
	Please be patient. Update can take a few minutes.</br>
	</p>
	<p>------------------------- </br>
	Good luck out there</br>
	-------------------------</strong></p>

    <form action="" method="post">
    <p><input type="text" name="password" /></p>
    <p style="color:blue;"><input type="submit" value="Awww yea..." /></p>


    <?php if (isset($result)) { ?>
        <textarea rows="30" cols="75"> <?php echo $result ?></textarea>
    <?php } ?>
</body>
</html>
