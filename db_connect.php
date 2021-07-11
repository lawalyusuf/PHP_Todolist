<?php
// connect to database
function db(){
    global $link;
    $link = mysqli_connect("localhost", "root", "", "php_todolist") or die("couldn't connect to database");
    return $link;
}
