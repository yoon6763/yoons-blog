<?php
    header("Content-Type:text/html; charset=UTF-8");

    $con = mysqli_connect('localhost', 'yoonsblog', 'yoons12!','yoonsblog');
    mysqli_query($con,'SET NAMES utf8');

    $result = mysqli_query($con, "SELECT userID, userName, Title, count, writeTime, PostIndex FROM POST ORDER BY PostIndex;");

    $response = array();

    while($row = mysqli_fetch_array($result)){
        array_push($response, array( "userID"=>$row[0], "userName"=>$row[1], "Title"=>$row[2], "count"=>$row[3], "writeTime"=>$row[4], "PostIndex"=>$row[5]));
    }

    echo json_encode(array("response"=>$response));

    mysqli_close($con);
?>
