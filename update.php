<html>
<head>
</head>
<body>
<p>To update please fill out entire form.</p>
<form action="" method="post">
    <label for="ID">character ID</label>
    <input type="number" name="char_id" id="char_id">
    <br/>

    <label for="New_Name">New Name</label>
    <input type="text" name="new_name" id="new_name">
    <br/>

    <label for="update">update</label>
    <input type="submit" name="update" id="delete">
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
    $new_name=$_POST['new_name'];
    echo "<p>$char_id</p>";
    $resultSet = $conn->query("update characters set name='$new_name' where ID = $char_id");
    if ($conn->error){
        echo "<p>Could not update character</p>
                \"Error: \"  . \"<br>\" . $conn->error";
    }else{
        echo "<p>Successfully updated character</p>";
    }
}
else{

    echo "There is nothing being deleted";
}

?>