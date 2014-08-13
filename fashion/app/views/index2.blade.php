<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Nguyen ngoc phu</h1>
	@foreach($menu as $value)
	<ul>
		<li>{{$value->Name}}</li>
		<?php getall($value->Id) ?>
	</ul>
	@endforeach
</body>
<?php
function getall($loaicha){
	$sql = DB::table('fs_menu')->where('Id_parent',$loaicha)->get();
?>
<hr>
@foreach($sql as $ql)
<ul>
<li>{{$ql->Name}}</li>
<?php getall($ql->Id) ?>
</ul>
@endforeach
<?php } ?>
</html>