<html>
<head>
</head>
<body>
<p>To create please fill out entire form.</p>
<form action="" method="post">
    <label for="ID">Player ID</label>
    <input type="number" name="player_id" id="player_id">
    <br/>

    <label for="Email">Email</label>
    <input type="email" name="player_email" id="player_email">
    <br/>

    <label for="search">search</label>
    <input type="submit" name="Create Player" id="search">
    <br/>

</form>
</body>
</html>
<?php
$player_id="";
$player_email="";
if($_SERVER["REQUEST_METHOD"]== "POST") {
    $conn = new mysqli('localhost', 'root', '', 'vengeful');
    if ($conn->connect_error) {
        echo "connection failed";
        die("Connection failed: " . $conn->connect_error);
    }

    $player_id=$_POST['player_id'];
    $player_email=$_POST['player_email'];

    $resultSet = $conn->query("insert into player (ID) VALUES ($player_id)");
    if ($conn->error){
        echo "<p>Could not create player with:</p>
                \"Error: \"  . \"<br>\" . $conn->error";
    }else{
        echo "<p>Successfully inserted new player</p>";
    }
}
else{

    echo "There is nothing being searched";
}

?>