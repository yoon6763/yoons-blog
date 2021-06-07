<?php 
    $con = mysqli_connect("localhost", "yoonsblog", "yoons12!", "yoonsblog");
    mysqli_query($con,'SET NAMES utf8');

    $PostIndex = $_POST["PostIndex"];
    $userID = $_POST["userID"];
    $userName = $_POST["userName"];
    $Title = $_POST["Title"];
    $Contents = $_POST["Contents"];
    $count = $_POST["count"];
    $writeTime = $_POST["writeTime"];

    $statement = mysqli_prepare($con, "INSERT INTO POST VALUES (?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "issssis", $PostIndex, $userID, $userName, $Title, $Contents, $count, $writeTime);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);


?>