<?php

//Create Connection

$conn = mysqli_connect('localhost','root','','running');

if(mysqli_connect_errno()){
    echo 'Failed to connect'. mysqli_connect_errno();
}