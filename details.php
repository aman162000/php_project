<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

$conn = mysqli_connect($servername,$username,$password,$dbname);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Table with database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #ff0000;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        body{
            background-color: yellow;
        }
        th {
            background-color: #b84749;
            color: white;
        }
        tr:nth-child(even) {background-color: #ffffff
        }
        tr:nth-child(odd) {background-color: #3b3b3b
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Contact</th>
    </tr>
    <?php
    $sql = "SELECT * FROM user ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {

        while($row = $result->fetch_assoc())
        {
            echo "<tr><td>" . $row["name"]. "</td><td>" . $row["mob_no"] . "</td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "0 results";
    }
    $conn->close();
    ?>
</table>
</body>
</html>