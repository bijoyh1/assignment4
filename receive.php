<?php
echo "hello";
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:grades10.database.windows.net,1433; Database = Grades", "bijoy", "CRicket10");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
//sql = $conn->prepare ("SELECT id, grades FROM dbo.Grades_Table");
$result = $conn->query("SELECT id, grades FROM dbo.Grades_Table");

?>
<table>
<?php
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["studentID"] . "</td>";
		echo "<td>" . $row["grades"] . "</td>";
		echo "</tr>";
	}
	?>
</table>