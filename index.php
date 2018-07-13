<?php

echo 'HELLO WORLD';
echo '<br/><br/>';
echo json_encode($_SERVER);
echo '<br/><br/>';
echo $_SERVER['SERVER_ADDR'];

$conn = new mysqli('mysql','openshift123','openshift123','workshop');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT nome FROM cidade");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["nome"] . "</h3>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>