<!doctype html>
<html "en">
	<head>
		<title>Ajax Tutorial</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>
		<script>

			function sendajax(){

				$.ajax({

					url:'process2.php',
					type:'GET',
					data:"name=COMiCZ&email=saintmorning@msn.com",
					success: function(response){

						$("#response").text(response);

					}

				});

			}

		</script>

		<div id="response"></div>

		<input type="button" onclick="sendajax()" value="Send Ajax Request">
	</body>
</html>