<html>
<head>
</head>
<body>
<form action="" method="post">
    <label for="ID">Player ID</label>
    <input type="number" name="player_id" id="player_id">
    <br/>

    <label for="search">search</label>
    <input type="submit" name="search" id="search">
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

    $player_id=$_POST['player_id'];
    $resultSet = $conn->query("select * from player where ID=$player_id");
    if ($resultSet->num_rows == 0){
        echo "<p>$player_id</p>";
    }
    if ($resultSet->num_rows != 0) {
        while ($rows = $resultSet->fetch_assoc()) {
            $ID = $rows['ID'];
            $email = $rows['Email'];
            $TeamID = $rows['TeamID'];

            echo "<p>id: $ID <br/>Email: $email<br/>TeamID: $TeamID</p>";

            if($TeamID != null){
                $teamResult = $conn->query("select * from team where ID = $TeamID");
                if($teamResult->num_rows!=0){
                    while($teamRows = $teamResult->fetch_assoc()){
                        $TID = $teamRows['ID'];
                        $Name = $teamRows['Name'];

                        echo"<p>Team Name: $Name</p>";
                    }
                }
            }
        }
    }
}
else{

    echo "There is nothing being searched";
}

?>