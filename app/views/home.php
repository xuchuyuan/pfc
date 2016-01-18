<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="UTF-8">

		<title><?php echo $title ?></title>

	</head>

	<body>

		<?php foreach ($article as $key => $value) { ?>
		
		<div class="article">

		<h1><?php echo $value['name'] ?></h1>

		<div class="content">

		<?php echo $value['url'] ?>

		
		</div>

		<?php }?>

		</div>

		<ul class="fuckme">

			<li>

			  <?php echo $fuck_me ?>

			</li>

		</ul>

	</body>

</html>
	