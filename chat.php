<!doctype html>
<html "en">
	<head>
		<title>Ajax Tutorial</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>

		<style>
			body{

				margin: 0;
				padding: 0;
				background-color: #CCC;
			}

			#warpper{
				width: 700px;
				margin: 0px auto;
				min-height: 500px;
				background-color: #FFF;
				padding-top: 50px;

			}

			#message{

				width: 600px;
				margin: 0px auto;
				border: 1px solid #eee;
				min-height: 200px;
			}

			#inputwrapper{
				width: 600px;
				margin: 0px auto;

			}

			#enterchat{
				width: 500px;
				height: 15px;
				padding: 5px;
			}

			#sendbtn{
				width: 50px;
				height: 28px;
				font-weight: bold;
				font-family: tahoma;
				background-color: #333;
				color: #FFF;
				border: 1px black;
			}

		</style>
		<script>

			function sendajax(){

				$.ajax({

	

			}

		</script>

		<div id="warpper">
			
			<div id="message"></div>
			<div id="inputwrapper">
				<input type="text" id="enterchat">
				<input type="button" id="sendbtn" onclick="sendajax()" value="Send">
			</div>
	
		</div>


	</body>
</html>