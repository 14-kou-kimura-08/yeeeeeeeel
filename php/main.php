<?php
require_once ( 'pdo.php' );


$result1 = "SELECT * FROM yell ORDER BY id DESC";
$stmt1 = $dbh->query($result1);
$rows = null;
while($result = $stmt1->fetch(PDO::FETCH_ASSOC)){
  $rows .= "<li><span class='yell'>".$result['id'].".".$result['yell_content']."</li>";
}

?>
