<?php

header('Content-type: application/json');

$servername = "65.60.4.130";
$username = "neonclou_devusr";
$password = "@Hope@2018#";
$dbname = "neonclou_dev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //echo("Connection failed");
}else{
  //echo("Connection success");
}

$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$gender = "";
$role = "";

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$role = $_POST['role'];

if($first_name != "" && $last_name != "" && $email != "" && $phone != "" && $gender != "" && $role != ""){
  //echo("Insert success");
$sql = "INSERT INTO indiatd_volunteer (first_name,last_name,email,phone,gender,role)
VALUES ('$first_name', '$last_name', '$email', '$phone', '$gender','$role')";
}

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //alert("Form submitted successfully");
    $response_array['status'] = 'success';

} else {
   //echo "Error in record creation " . $sql . "<br>" . $conn->error;
   $response_array['status'] = 'error';
}

$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$gender = "";
$role = "";

$conn->close();

// redirect after processing the POST request
//header("Location: " . $_SERVER["REQUEST_URI"]);
//header("Location: http://indiathrowdown.com/"); /* Redirect browser */
//exit;
echo json_encode($response_array);
?>
