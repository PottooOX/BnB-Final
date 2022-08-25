<?php

$sname= "localhost";

$unmae= "Main";

$password = "charlotte10";

$db_name = "B&B";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

