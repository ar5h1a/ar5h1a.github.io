<?php

//database configuration
$servername="localhost"; //change if necessary
$username ="root"; //change to your mysql username
$password=""; //change to your MySQL password
$dbname="resume";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);   //mysqli is a constructor

//chcek connection
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
else{
    echo "Connection successful";
}

//get form data
$name = $_POST["txtname"];
$linkedin = $_POST["txtlinkedin"];
$org = $_POST["txtorg"];
$desg = $_POST["txtdesg"];
$email = $_POST["txtemail"];
$contact = $_POST["txtcontact"];
$comment = $_POST["txtcomment"];

echo "<h3> $name <br> $email <br> $contact <br> $birthday <br>";

//prepare and bind
$stmt = $conn->prepare("INSERT INTO contact (name,linkedin,org,desg,email,contact,comment) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("ssss",$name,$linkedin,$org,$desg,$email,$contact,$comment);

if($stmt->execute()){
    echo "New Record created successfully";
}
else{
    echo "Error: ".$stmt->error;
}

$stmt->close();
$conn->close();
?>