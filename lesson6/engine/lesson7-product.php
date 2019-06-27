<?php

if ($_GET['id']) $id = (int)$_GET['id'];

$SQL_query = "SELECT * FROM geekbrains.goods WHERE id_good = $id;";

$result = mysqli_query(myDB_connect(), $SQL_query);

$product = mysqli_fetch_assoc($result);