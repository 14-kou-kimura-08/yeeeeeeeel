<?php
require_once ( 'pdo.php' );

$yell = $_POST['text'];
$url = $_POST['response_url'];


//select•¶

$result1 = "SELECT yell_content FROM yell ORDER BY RAND() LIMIT 1";

if($yell!=null){
$result1 = "SELECT yell_content FROM yell WHERE id = $yell";}

$stmt1 = $dbh->query($result1);

foreach ($stmt1 as $row) { }

//execute‚ÅƒNƒGƒŠ‚ðŽÀs
//$stmt1->execute();
$count=$stmt1->rowCount();

$res = array(
    'text' => $row['yell_content'],
    "response_type" => "in_channel"
);


if($count==0){

$res = array(
    'text' => "There is no data. Please try again",
    "response_type" => "ephemeral"
);} 

$curl = curl_init($url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_HTTPHEADER, 'Content-type: application/json');
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($res));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);


?>
