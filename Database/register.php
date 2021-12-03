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
    $password = $_POST["password"];

    //check if name exists
    $namecheckquery = "SELECT User_Name FROM user_credentials WHERE User_Name='" . $username . "';";
   
    $namecheck = mysqli_query($con, $namecheckquery) or die("2: Name check query failed"); //error code #2 - namecheckquery failed

    if (mysqli_num_rows($namecheck) > 0)
    {
        echo "3: Name already exists"; //error code #3 - name already exists
        exit();
    }

    //add user to the table
    $salt = "\$5\$rounds=5000\$" . "fuck" . $username . "\$";
    $hash = crypt($password, $salt);
    $insertuserquery = "INSERT INTO user_credentials (User_Name, hash, salt) VALUES ('" . $username . "', '" . $hash . "', '" . $salt . "');";
    mysqli_query($con, $insertuserquery) or die("4: Insert player query failed"); //error code #4 - insert query failed

    echo("0");



?>