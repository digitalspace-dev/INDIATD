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
    echo("Connection failed");
}else{
  echo("Connection success");
}

$sports_category = "";
$first_name = "";
$last_name = "";
$email = "";
$gender = "";
$divison = "";
$affiliate_box_gym = "";
$em_contact_name = "";
$em_contact_no = "";
$apparel = "";
$add_street = "";
$add_city = "";
$add_state = "";
$add_zip_code = "";
$add_country = "";
$add_phone = "";
$national_represent = "";
$dob = "";
$instagram = "";

$sports_category_master = $_POST['CategoryM'];
$sports_category_A = $_POST['CategoryA'];
$sports_category_B = $_POST['CategoryB'];
if ($sports_category_master == "Category A"){
   $sports_category = $sports_category_A;
}
if ($sports_category_master == "Category B"){
   $sports_category = $sports_category_B;
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$divison = $_POST['division'];
$affiliate_box_gym = $_POST['affiliate_box_gym'];
$em_contact_name = $_POST['em_contact_name'];
$em_contact_no = $_POST['em_contact_no'];
$apparel = $_POST['apparel'];
$add_street = $_POST['add_street'];
$add_city = $_POST['add_city'];
$add_state = $_POST['add_state'];
$add_zip_code = $_POST['add_zip_code'];
$add_country = $_POST['add_country'];
$add_phone = $_POST['add_phone'];
$national_represent = $_POST['national_represent'];
$dob = $_POST['dob_day']+""+$_POST['dob_month']+""+$_POST['dob_year'];
$instagram = $_POST['instagram'];

if($first_name != "" && $last_name != "" && $email != ""){
  echo("Insert success");
$sql = "INSERT INTO indiatd_athlete (sports_category,first_name,last_name,email,gender,divison,affiliate_box_gym,em_contact_name,em_contact_no,apparel,add_street,add_city,add_state,add_zip_code,add_country,add_phone,national_represent,dob,instagram)
VALUES ('$sports_category', '$first_name', '$last_name', '$email', '$gender', '$divison' , '$affiliate_box_gym' , '$em_contact_name' , '$em_contact_no' , '$apparel' , '$add_street' , '$add_city' , '$add_state' , '$add_zip_code' , '$add_country' ,
  '$add_phone' , '$national_represent' , '$dob' , '$instagram')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $response_array['status'] = 'success';

} else {
   echo "Error in record creation " . $sql . "<br>" . $conn->error;
    $response_array['status'] = 'error';
}

$sports_category = "";
$first_name = "";
$last_name = "";
$email = "";
$gender = "";
$divison = "";
$affiliate_box_gym = "";
$em_contact_name = "";
$em_contact_no = "";
$apparel = "";
$add_street = "";
$add_city = "";
$add_state = "";
$add_zip_code = "";
$add_country = "";
$add_phone = "";
$national_represent = "";
$dob = "";
$instagram = "";

$conn->close();

// redirect after processing the POST request
//header("Location: " . $_SERVER["REQUEST_URI"]);
//header("Location: http://indiathrowdown.com/"); /* Redirect browser */
//exit;

echo json_encode($response_array);

?>
