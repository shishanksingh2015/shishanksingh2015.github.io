<?php

require("db.php");
//echo "<pre>";print_r($_POST);die;
$first_name=!empty($_POST['first_name']) ? $_POST['first_name']: "";
$last_name=!empty($_POST['last_name']) ? $_POST['last_name']: "";
$email=!empty($_POST['email']) ? $_POST['email']: "";
$phone_number=!empty($_POST['phone_number']) ? $_POST['phone_number']: "";
$age_group=!empty($_POST['age_group']) ? $_POST['age_group']: "";
$travel_as=!empty($_POST['travel_as']) ? $_POST['travel_as']: "";
$number_of_travellers=!empty($_POST['number_of_travellers']) ? $_POST['number_of_travellers']: "";
$preferred_dates=!empty($_POST['preferred_dates']) ? $_POST['preferred_dates']: "";
$leaving_time=!empty($_POST['leaving_time']) ? $_POST['leaving_time']: "";
$arriving_time=!empty($_POST['arriving_time']) ? $_POST['arriving_time']: "";
$boarding=!empty($_POST['boarding']) ? $_POST['boarding']: "";
$last_destinations=!empty($_POST['last_destinations']) ? $_POST['last_destinations']: "";
$preference=!empty($_POST['preference']) ? $_POST['preference']: "";
$preference_type=!empty($_POST['preference_type']) ? $_POST['preference_type']: "";
$planned_trip=!empty($_POST['planned_trip']) ? $_POST['planned_trip']: "";
$not_to_travel=!empty($_POST['not_to_travel']) ? $_POST['not_to_travel']: "";
$hobbies=!empty($_POST['hobbies']) ? $_POST['hobbies']: "";
$notes=!empty($_POST['notes']) ? $_POST['notes']: "";


$sql="INSERT INTO enquiry (first_name,last_name,email,phone_number,age_group,travel_as,number_of_travellers,preferred_dates,leaving_time,arriving_time,boarding,last_destinations,preference,preference_type,planned_trip,not_to_travel,hobbies,notes)
VALUES ('$first_name','$last_name','$email','$phone_number','$age_group','$travel_as','$number_of_travellers','$preferred_dates','$leaving_time','$arriving_time','$boarding','$last_destinations','$preference','$preference_type','$planned_trip','$not_to_travel','$hobbies','$notes')";


if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

?>