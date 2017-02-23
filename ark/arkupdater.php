<?php

function addNumbers($firstNumber, $secondNumber) {
    return $firstNumber + $secondNumber;
}

function runscript($pw) {
    $cpw="andwater";
    if($pw==$cpw)
        return "OUTPUT:\n" + shell_exec('ssh_command.sh ');
    else
        return "Invalid password";
}

if (isset($_POST['password'])) {
    $result = runscript(intval($_POST['password']));
    #$result = addNumbers(intval($_POST['number1']), intval($_POST['number2']));
}
?>
<html>
<body>

    <form action="" method="post">
    <p>password: <input type="text" name="password" /></p>
    <p><input type="submit"/></p>


    <?php if (isset($result)) { ?>
        <textarea rows="50" cols="50"> <?php echo $result ?></textarea>
    <?php } ?>
</body>
</html>