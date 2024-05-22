<?php
//Connect to MySQL

$link = mysqli_connect("localhost", "admin", "secret", "shoutbox");

//Test Connection
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
