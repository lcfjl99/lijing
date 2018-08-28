<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php if(\Session::has('info')): ?>
		<div style="background:yellowgreen;width:500px;height:30px">
			<?php echo \Session::get('info') ?>	
		</div>
		<?php endif; ?>
</body>
</html>