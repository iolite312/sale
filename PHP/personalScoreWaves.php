<?php
//checks if the difficulty cookie is set and if it is grabs the value of the cookie
if(!isset($_COOKIE["difficulty"])){
	$diff = 1;
}else{
	$diff = $_COOKIE["difficulty"];
}
//checks if the currentUser cookie is set and if it is grabs the value of the cookie
if(!isset($_COOKIE["currentUser"])){
	echo '<p>No user logged in.</p>';
	return;
}else{
	$account = $_COOKIE["currentUser"];
}

//this creates the conection to the database when asked later in the file
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';
$conn = mysqli_connect($servername,$username, $password, $dbname);
if(!$conn){
	die("Connection Fails: ");
}

$sql = "SELECT Username, Max_Wave from highscores WHERE (Username, Difficulty) = ('" . $account . "', '" . $diff . "')";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	//output data from every row selected and inserts it into the scoreboard container
	$i = 0;
	while($row = mysqli_fetch_assoc($result)){
		echo "<p>" . $row["Username"] . ": " . $row["Max_Wave"] . "</p>";
	}
}else {
	echo "0 results";
}

?>