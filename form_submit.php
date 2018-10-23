<?php
function finishProcessing($message = "Success"){
	$reponseArray = array();
	$responseArray["message"] = $message;
	print(json_encode($responseArray));
	die();
}

$data_raw = file_get_contents("php://input");
$data = json_decode($data_raw);

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$lawnSign = $_POST["lawnCheck"];

if($phone === null){
	$phone = "Not Provided";
}

if($name == null || $email == null || $message == null){
	finishProcessing("Missing info");
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	finishProcessing("Invalid email");
}

$emailMessage = "There has been a new message submitted on electalexward9.ca\nIt was sent by: %s\nTheir email is: %s\nTheir phone number is: %s\nThe message they sent was: %s\n";

if($lawnSign){
	//asking for lawn sign
	$emailMessage = sprintf($emailMessage,$name,$email,$phone,$message) . "Lawn sign: Yes";
}
else{
	$emailMessage = sprintf($emailMessage,$name,$email,$phone,$message) . "Lawn sign: No";
}

mail("davidhui@davesoftllc.com","New Message on electalexward9.ca",$emailMessage);
finishProcessing();
?>