<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type"text/css" href="skitterstyle.css">
		<title>Skitter</title>
		<meta charset="utf-8">
		<script type='text/javascript'>
			function preview_image(event) 
			{
				var reader = new FileReader();
				reader.onload = function()
				{
					var output = document.getElementById('output_image');
					output.src = reader.result;
				}
				reader.readAsDataURL(event.target.files[0]);
			}
		</script>
	</head>
	<body>
		<div class="topnav">
			<h1> Skitter </h1>
		</div>
		<div class="edituserbox">
			<form method="POST" action="updateuserdb.php" enctype="multipart/form-data">
				<div>
					<p>
						Change Profile Picture:
					</p>
				</div>
				<input type="file" name="myimage" accept="image/*" onchange="preview_image(event)">
				<input type="submit" name="submit_image" value="Upload"> <br> <br> <br>
				<img id="output_image"/>
			</form>
		</div>
		<!-- <div id="wrapper">
			<input type="file" accept="image/*" onchange="preview_image(event)">
			<img id="output_image"/>
		</div> -->
	</body>
</html>