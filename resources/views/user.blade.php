<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(\Session::has('error')): ?>
		<div style="background:yellowgreen;width:500px;height:30px">
			<?php echo \Session::get('error') ?>	
		</div>
	<?php endif; ?>
	<form action="/user-2" method="post">
		<input type="text" name="username" value="{{old('username')}}">
		<input type="text" name="password">
		{{csrf_field()}}
		<button>提交</button>
	</form>
</body>
</html>