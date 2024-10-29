<?php
$con = mysqli_connect("localhost", "root", "", "sparehub");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful<br>";
}

/*$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$phno = $_POST["phno"];
$pin = $_POST["pin"];
$role = $_POST["role"];
$password = $_POST["password"];*/

// Establishing connection to the database


// Insert into reg_user table
/*$query = "INSERT INTO reg_user (name, username, email, phno, pin_code, user_type, password) VALUES ('$name', '$username', '$email', $phno, $pin, '$role', '$password')";

if (mysqli_query($con, $query)) {
    echo "Inserted into reg_user table successfully.<br>";
} else {
    echo "Error inserting into reg_user table: " . mysqli_error($con) . "<br>";
}*/

// If role is 'user', insert additional data into user_user table
/*if ($role == 'user') {
    $vtype = $_POST["vehicle-type"];
    $vmodel = $_POST["company"];
    $model = "Vehicle";

    $query = "INSERT INTO user_user (vtype, vmodel, model) VALUES ('$vtype', '$vmodel', '$model')";

    if (mysqli_query($con, $query)) {
        echo "Inserted into user_user table successfully.<br>";
    } else {
        echo "Error inserting into user_user table: " . mysqli_error($con) . "<br>";
    }
}
*/
// Close the database connection
mysqli_close($con);
?>
