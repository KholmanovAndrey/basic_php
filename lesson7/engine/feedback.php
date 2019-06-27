<?php

if ($_POST) {

    $SQL_query = "INSERT INTO geekbrains.feedback (feedback_user, feedback_body) 
                  VALUES ('".$_POST['user']."', '".$_POST['body']."')";

    mysqli_query(myDB_connect(),$SQL_query);

}

$SQL_query = "SELECT * FROM geekbrains.feedback";

$result = mysqli_query(myDB_connect(), $SQL_query);

$feedback = [];
while ($row = mysqli_fetch_assoc($result)) {
    $feedback[] = $row;
}
