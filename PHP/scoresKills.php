<?php
if(!isset($_COOKIE["difficulty"])){
	$diff = 1;
}else{
	$diff = $_COOKIE["difficulty"];
}

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';
$conn = mysqli_connect($servername,$username, $password, $dbname);
if(!$conn){
	die("Connection Fails: ");
}

$sql = "SELECT Username, Enemies_Killed, Date from highscores WHERE Difficulty = '" . $diff . "' ORDER BY Enemies_Killed DESC, Date ASC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	//output data from every row selected
	$i = 0;
	while($row = mysqli_fetch_assoc($result)){
		if($i < 3){
			echo "<div class='top'> <p class='username'>", $row["Username"], "</p><p class='mini-score'>", $row["Enemies_Killed"], "</p></div>";
		} else{
			echo "<div class='scores'> <p class='username'>", $row["Username"], "</p><p class='mini-score'>", $row["Enemies_Killed"], "</p></div>";
		}
		$i++;
	}
	while($i <= 19){
		echo "<div class='scores'><p></p></div>";
		$i++;
	}
}else {
	echo "0 results";
}

?>