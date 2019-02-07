<?php
    $carModelErr = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // print_r($_POST);
        // echo '<br>';
        
        $carModel = test_input($_POST['carModel']);
        if (isset($carModel) && empty($carModel)) {
            print("car model is required ");
        } else {
            print("The car model is " . $carModel);
            echo "<br>";
            echo "<a href='/php/normalForm/form.php'>Back</a> ";

            exit;
        }
    }
?>