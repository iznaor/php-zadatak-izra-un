<!DOCTYPE HTML>
<html>
	<head>
		<title>Zadatak izračun</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Ivan Znaor">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="my.css">
	</head>
<body>
		<img src="img/phplogo.png" alt="PHP logo">
		<?php
			$_a=$_POST['a'];
			$_b=$_POST['b'];
			$c=(3*$_a-$_b)/2;
			print '
			<div class="odlomak">
				<b class="vra">a='.$_a .'</b>
				<p>			 </p>
				<b>b='.$_b .'</b>
				<p>			 </p>
				<b>c=(3*'.$_a.'-'.$_b.')/2='.$c .'</b>
			</div>';
		?>
	</body>
	<footer>
      	<p>Ivan Znaor 👉 <a href="https://github.com/iznaor/Website-project"><img src="img/github.svg"title="Github" alt="Github" style="width:24px; margin-top:0.4em"></a></p>
	
    	</footer>
</html>