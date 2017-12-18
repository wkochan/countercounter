<?php
$connect = mysqli_connect("mysql3.gear.host","countercounterdb","Hs3l_8_F0X3W","countercounterdb");

//Connection to DB
if (!$connect) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully. ";

//Get POST variables
$employee = $_POST['emp'];
$client_notice = $_POST['clnt_notice'];
$client_type = $_POST['clnt_type'];
$issue = $_POST['problem'];
$solution = $_POST['solution'];
$notes = $_POST['notes'];

//Mysql INSERT statement
$insertion = "INSERT INTO data (employee,client_notice,client_type,issue,resolution,note,timestamp) value ('$employee','$client_notice','$client_type','$issue','$solution','$notes',NOW())";

//Submit data to DB
if (mysqli_query($connect, $insertion)){
	echo "Record created.";
}
else{
	printf("error: %s\n", mysqli_error($connect));
	//printf("error: %s\n", mysqli_error($insertion));
}

//Close DB connection
mysqli_close($connect);

?>