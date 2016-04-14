<!DOCTYPE html>
<html>
<head>
	<title>Test Text</title>
</head>
<body>
	<span class="someClass">
	A random word: 
	<?php 
		$items = [
			'homeroom',
			'firdausi',
			'acinarious',
			'plumbable',
			'sparoid',
			'striges',
			'subage',
			'housemastership',
			'drumstick',
			'dnouement',
		];
		echo $items[array_rand($items)];
	?>
	</span>
</body>
</html>