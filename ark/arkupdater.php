<?php

function addNumbers($firstNumber, $secondNumber) {
    return $firstNumber + $secondNumber;
}

if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $result = addNumbers(intval($_POST['number1']), intval($_POST['number2']));
}
?>
<html>
<body>

    <?php if (isset($result)) { ?>
        <h1> Result: <?php echo $result ?></h1>
    <?php } ?>
    <form action="" method="post">
    <p>1-st number: <input type="text" name="number1" /></p>
    <p>2-nd number: <input type="text" name="number2" /></p>
    <p><input type="submit"/></p>

</body>
</html>