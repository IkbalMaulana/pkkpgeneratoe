<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<style type="text/css">
		@media print {
			@page {size:landscape;}
		}
		*{font-family: Lato;font-size: 1.12em}
		.tmp{width: 21cm;height: 14.5cm;background-size: cover;}
		.nama{background: ;width: 350px;top:313px;left:419px;height: 20px;position: absolute;}
		.jurusan{background: ;width: 350px;top:409px;left:419px;height: 20px;position: absolute;}
		.gugus{background: ;width: 350px;top:457px;left:419px;height: 20px;position: absolute;}
		
	</style>
</head>
<body>
<?php
	@$nama= $_POST['nama'];
	@$jurusan= $_POST['jurusan'];
	@$gugus= $_POST['gugus'];
	@$tmp= $_POST['tmp'];
?>
	<div class="tmp">
		<img src="tmp_<?=$tmp?>.jpg" height="100%">
		<div class="nama">
			<?=$nama?>
		</div>
		<div class="jurusan">
			<?=$jurusan?>
		</div>
		<div class="gugus">
			<?=$gugus?>
		</div>
	</div>
</body>
<script type="text/javascript">
	
</script>
</html>