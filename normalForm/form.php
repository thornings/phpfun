<?php
    include_once('validateCar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car</title>
</head>
<body>
    <form action="/php//normalForm/form.php" method="POST">
        <label for="carmodel">Model</label>
        <input id="carmodel" type="text" name="carModel" value="<?php if (!empty($carModel)) echo $carModel;?>" />
        <input type="submit" name="submitcar" value="Opret bil" />
    </form>
    
</body>
</html>