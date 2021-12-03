<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'test';
    $con = mysqli_connect($servername,$username, $password, $dbname);
    //check that connection happend
    if(mysqli_connect_errno())
    {
        echo "1: Connection Failed"; //error code #1 - connection failed
        exit();
    }
    
    $username = $_POST["name"];
    $newscore = $_POST["score"];


    //double check there is only one user with this name
    $namecheckquery = "SELECT User_Name FROM user_credentials WHERE User_Name='" . $username . "';";

    $namecheck = mysqli_query($con, $namecheckquery) or die("2: Name check query failed"); //error code #2 - namecheckquery failed
    if (mysqli_num_rows($namecheck) != 1)
    {
        echo "5: Either no user with name, or more than one"; //error code #5 - number of names matching !=1
        exit();
    }

    $updatequery = "UPDATE players SET score = " . $newscore . " WHERE username = '" . $username . "';";
    mysqli_query($con, $updatequery) or die("7: Save query failed"); // error code #7 - Update query failed

    echo "0";

?>