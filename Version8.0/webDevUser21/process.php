<?php
//processStudentLogin.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "samyuravikumar";
    $mysql_password = "Minnesota1858";
    $mysql_database = "sharks";
	
	//delcare PHP variables
	
	// $password = $_POST["password"];
	$firstName = $_POST["firstName"];
	$sharkName = $_POST["sharkName"];
	$sharkAge = $_POST["sharkAge"];
	$sharkGender = $_POST["sharkGender"];
	// $lastName = $_POST["lastName"];
	// $currentLocation = $_POST["currentLocation"];
	// $destinationLocation = $_POST["destinationLocation"];
	// $postButton = $_POST["givePass"];
 //   $passError = ("Please enter a Valid password");
	
	// if (empty($password)){
 //       die($passError);
	// }   
// if ($password == "123")	
if (true)
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO sharkAdoptionList (name, shark_name, shark_age, shark_gender) VALUES(?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssss', $firstName, $sharkName, $sharkAge, $sharkGender); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br("Entry successfully added!");
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			
?>
<!DOCTYPE HTML>
    <html>
    	<head>
    		<title></title>
    	</head>
    	<body>
    		<a href="https://php-practice-samyuravikumar.c9users.io/V8.0/webDevUser21.html">Return to Website</a>
    	</body>
    </html>