<?php
//checks if the difficulty cookie is set and if it is grabs the value of the cookie
if(!isset($_COOKIE["difficulty"])){
	$diff = 1;
}else{
	$diff = $_COOKIE["difficulty"];
}

//checks if the timeFrame cookie is set and if it is grabs the value of the cookie
if(!isset($_COOKIE["timeFrameWaves"])){
	$timeFrame = "all";
} else{
	$timeFrame = $_COOKIE["timeFrameWaves"];
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

//this uses the timeFrame variable value to select the appropriate sql query
switch($timeFrame){
	case "day": 
    	$sql = "SELECT Username, Max_Wave from highscores WHERE Difficulty = '" . $diff . "' AND Date = '" . Date('Y-m-d') . "' ORDER BY Score DESC, Date ASC";
    	break;
        
    case "month":
    	$sql = "SELECT Username, Max_Wave from highscores WHERE Difficulty = '" . $diff . "' AND Date BETWEEN '" . Date('Y-m') . "-01" . "' AND '" . Date('Y-m-t') ."' ORDER BY Score DESC, Date ASC";
        break;
    
    case "all":
    	$sql = "SELECT Username, Max_Wave from highscores WHERE Difficulty = '" . $diff . "' ORDER BY Score DESC, Date ASC";
        break;
    				
}
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	//output data from every row selected and inserts it into the scoreboard container
	$i = 0;
	while($row = mysqli_fetch_assoc($result)){
		if($i < 3){
			echo "<div class='top'> <p class='username'>", $row["Username"], "</p><p class='mini-score'>", $row["Max_Wave"], "</p></div>";
		} else{
			echo "<div class='scores'> <p class='username'>", $row["Username"], "</p><p class='mini-score'>", $row["Max_Wave"], "</p></div>";
		}
		$i++;
	}
	while($i <= 19){ //this creates the remaining empty entries for the scoreboard to fill it to at least 19 entries
		echo "<div class='scores'><p></p></div>";
		$i++;
	}
}else { //this creates the 19 empty entries for the scoreboard if there are no results from the query
	$i = 0;
	while($i < 3){
		echo "<div class='top'><p></p></div>";
		$i++;
	}
	while($i <= 19){
		echo "<div class='scores'><p></p></div>";
		$i++;
	}
}

?>