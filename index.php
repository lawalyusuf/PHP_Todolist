<?php
require_once("db_connect.php");
?>

<html>
<head>
    <title>PHP Todolist</title>
</head>
<body>
<h2>
    What to do next
</h2>
<p><a href="create.php"><strong>Add Todo</strong></a></p>

<?php
db();
global $link;
$query  = "SELECT id, todoTitle, todoDescription, date FROM todo";
$result = mysqli_query($link, $query);
//check if there's any data inside the table
if(mysqli_num_rows($result) >= 1){
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $title = $row['todoTitle'];
        $date = $row['date'];
?>

    <ul>
        <li><a href="detail.php?id=<?php echo $id?>"><strong><?php echo $title ?></strong></a></li> <?php echo "[[$date]]";?>
        <button type="button"><a href="edit.php?id=<?php echo $id?>"><strong>Edit</strong></a></button>
        <button type="button"><a href="delete.php?id=<?php echo $id?>"><strong>Delete</strong></a></button>
    </ul>

<?php
    }
}

?>
</body>
</html>
