<?php
require_once "db_connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    db();
    global $link;
    $query = "DELETE FROM todo WHERE id = '$id'";
    $delete = mysqli_query($link, $query);
    if($delete){
        echo 'Todo successfully deleted';
    }
}
?>
<br>
<button type="submit"><a href="index.php"><strong>View all Todo</strong></a></button>
