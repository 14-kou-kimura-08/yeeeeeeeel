<?php
require_once ( 'pdo.php' );

$yell = $_POST['text'];

//insert•¶
$result1 = "INSERT INTO yell(yell_content) VALUES (:yell)";
$stmt1 = $dbh->prepare($result1);
$stmt1->bindParam(':yell', $yell, PDO::PARAM_STR);

//execute‚ÅƒNƒGƒŠ‚ðŽÀs
$stmt1->execute();



$res = array(
    "text" => "Addition success",
    "response_type" => "ephemeral"
);


header('Content-Type: application/json');
echo json_encode($res);
?>
