<!doctype html>
<html "en">
	<head>
		<title>Ajax Tutorial</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>
		<script>

			function sendajax(){

				$.get("process.php", function(data, success){

					$("#response").text(data);

				});

			}

		</script>

		<div id="response"></div>

		<input type="button" onclick="sendajax()" value="Send Ajax Request">
	</body>
</html>