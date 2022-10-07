<?php

//database connection
include 'DBC.php';
//Session Started
session_start();
//getting otp on click of button and verifying it
if (isset($_POST['enterOtp'])) {
    $enteredotp = $_POST['CEnterdOTP'];
    if ($enteredotp == $_SESSION['customerOTP']) {
        $C_Name = $_SESSION['Name'];
        $C_PhoneNumber = $_SESSION['PhoneNumber'];
        $C_Email = $_SESSION['Email'];
        $C_Password = $_SESSION['Password'];
        $C_Gender = $_SESSION['Gender'];
        $C_Registration_Date = date('Y-m-d');

        $add_rec = "INSERT INTO client(C_Name,C_Email,C_PhoneNumber,C_Gender,C_Password,C_Registration_Date)VALUES('$C_Name','$C_Email','$C_PhoneNumber','$C_Gender','$C_Password','$C_Registration_Date')";

        $qryReturn = $con->query($add_rec);
        if ($qryReturn == TRUE) {

            echo '<script>alert("Registration successful");'
            . 'window.location.href = "Sign-in.php";'
            . '</script>';
            header('Refresh: 0; url=Sign-in.php');
        } else {
            echo $con->error;
        }
    }
} else {
    echo 'invalid otp';
    echo $con->error;
}
?>
