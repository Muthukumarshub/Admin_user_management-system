
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Welcome admin!</p>
    <?php
require "conn.php";

$sql1 = "SELECT * FROM user";
$res = mysqli_query($conn, $sql1);

if (!$res) {
    die("Query failed: " . mysqli_error($conn));
}

echo "<table>
<thead>
<tr>
    <td>Username</td>
    <td>Employees ID</td>
    <td>Email</td>
    <td>Place</td>
    <td>Branch</td>
</tr>
</thead>
<tbody>";

$num = mysqli_num_rows($res);
if ($num > 0) {
    while ($val = mysqli_fetch_assoc($res)) {
        echo "<tr>
                <td>" . htmlspecialchars($val['name']) . "</td>
                <td>" . htmlspecialchars($val['id']) . "</td>
                <td>" . htmlspecialchars($val['email']) . "</td>
                <td>" . htmlspecialchars($val['place']) . "</td>
                <td>" . htmlspecialchars($val['branch']) . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>There is no element in the database user table</td></tr>";
}

echo "</tbody>
</table>";

mysqli_close($conn); 
?>

</body>
</html>