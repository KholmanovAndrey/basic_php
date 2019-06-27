<?php

$SQL_query = "SELECT * FROM geekbrains.goods WHERE is_active=1";

$result = mysqli_query(myDB_connect(), $SQL_query);

$goods = [];
while ($row = mysqli_fetch_assoc($result)) {
    $goods[] = $row;
}
