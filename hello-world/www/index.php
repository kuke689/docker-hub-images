<html>
<head>
	<title>Hello, World!</title>
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<style>
	body {
		background-color: white;
		color: black;
		font-size: 20px;
		text-align: center;
		padding: 50px;
                font-family: 'Montserrat','Hiragino Kaku Gothic ProN','YuGothic','游ゴシック','メイリオ',sans-serif;
	}

	#logo {
		width: 140px;
		margin: 0 auto 2px auto;
	}
	</style>
</head>
<body>
	<img id="logo" src="https://app.arukas.io/images/logo-orca.svg" width="377" />
	<h1>Hello, World!</h1>
	<?php
	foreach($_ENV as $key => $value) {
		if(preg_match("/^ARUKAS_(.*)$/", $key, $matches)) {
		?>
			<b><?php echo $key; ?></b> = <b><?php echo $value; ?></b><br />
			<?php
		}
	}
	?>
</body>
</html>
