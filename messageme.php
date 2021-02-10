<?php

mysql_connect()

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

mysql_query("INSERT INTO comments VALUES('$name','$email','$message')

>