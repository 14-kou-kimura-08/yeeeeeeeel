<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
                <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>YEEEEEEEEL</title>
		<link rel="shortcut icon" href="image/icon.png">
		<link rel="stylesheet" href="css/smartphone.css" media="screen and (max-width:768px)">
		<link rel="stylesheet" href="css/example.css" media="screen and (min-width:769px)">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="Javascript/example.js"></script>
		<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
	</head>
	<body>
		<?php require_once 'php/main.php'; ?>
		  <div class="header">
				<a href="#"><img alt="Brand" src="image/logo.png" class="logo" id="page-top"></a>
			</div>
			<div class="content">
				<div class="about">
					<h1>みんなにエールを送ろう！</h1>
					<h3>Slackで/yellと入力すると以下の言葉がランダムに表示されるよ</h3>
				</div>
			  <div class="yell_lists">
						<?php echo $rows; ?>
				</div>
			</div>
	</body>
</html>

