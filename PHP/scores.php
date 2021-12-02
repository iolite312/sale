<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';
$conn = mysqli_connect($servername,$username, $password, $dbname);
if(!$conn){
	die("Connection Fails: ");
}

$sql = "SELECT Username from highscores WHERE Difficulty = '1'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	//output data from every row selected
	$i = 0;
	while($row = mysqli_fetch_assoc($result)){
		if($i < 3){
			echo "<p class='top'> Username: ", $row["Username"], "<br> </p>";
		} else{
			echo "<p class='scores'> Username: ", $row["Username"], "<br> </p>";
		}
		$i++;
	}
}else {
	echo "0 results";
}

?>