<html>
<head>
</head>
<body>
<p>To delete please fill out entire form.</p>
<form action="" method="post">
    <label for="ID">character ID</label>
    <input type="number" name="char_id" id="char_id">
    <br/>

    <label for="delete">delete</label>
    <input type="submit" name="delete" id="delete">
    <br/>

</form>
</body>
</html>
<?php
$player_id="";
if($_SERVER["REQUEST_METHOD"]== "POST") {
    $conn = new mysqli('localhost', 'root', '', 'vengeful');
    if ($conn->connect_error) {
        echo "connection failed";
        die("Connection failed: " . $conn->connect_error);
    }

    $char_id=$_POST['char_id'];
    echo "<p>$char_id</p>";
    $resultSet = $conn->query("delete from Characters where characters.ID=$char_id");
    if ($conn->error){
        echo "<p>Could not delete character</p>
                \"Error: \"  . \"<br>\" . $conn->error";
    }else{
        echo "<p>Successfully deleted player</p>";
    }
}
else{

    echo "There is nothing being deleted";
}

?>