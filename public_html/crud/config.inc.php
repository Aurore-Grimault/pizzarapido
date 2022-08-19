<?php
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$i++;
$cfg["Servers"][$i]["host"] = "eu-cdbr-west-03.cleardb.net"; //provide hostname
$cfg["Servers"][$i]["user"] = "bc3106d9ed23fa"; //user name for your remote server
$cfg["Servers"][$i]["password"] = "b5605f9c"; //password
$cfg["Servers"][$i]["auth_type"] = "config"; // keep it as config

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>