<!DOCTYPE html>
<html>
<head>
	<title>Upload JQuery PHP and Mysql</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center" >Upload JQuery PHP and Mysql</h1>
		<form method="post" enctype="multipart/form-data" id="myform">
			<h1></h1>
		<input type="file" name="image" class="form-control">
		<input type="submit" name="submit" id="submit" class="btn btn-danger my-3" value="Upload">	
		</form>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#myform").on("submit", function(e){
				e.preventDefault();
				// alert("dond");
				var form_data = new FormData(this);


				$.ajax({
					url: "ajax.php" ,
					method:"POST",
					data: form_data,
					dataType: "JSON",
					processData: false,
					contentType: false,
					success:function(data){
						$("h1").text(data.output);
					}
				});
			});
		});

	</script>

</body>
</html>