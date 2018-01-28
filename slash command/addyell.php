<?php
require_once ( 'pdo.php' );

$yell = $_POST['text'];

//insert文
$result1 = "INSERT INTO yell(yell_content) VALUES (:yell)";
$stmt1 = $dbh->prepare($result1);
$stmt1->bindParam(':yell', $yell, PDO::PARAM_STR);

//executeでクエリを実行
$stmt1->execute();



$res = array(
    "text" => "Addition success",
    "response_type" => "ephemeral"
);


header('Content-Type: application/json');
echo json_encode($res);
?>
