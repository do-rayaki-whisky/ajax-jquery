<?php  

	$con = mysqli_connect("localhost", "root", "", "chat"); // สร้างตัวแปรการเชื่อมต่อ

	mysqli_query($con, "SET NAMES utf8"); // ทำให้ mysql อ่านภาษาไทยได้

	// ถ้ามีการส่งข้อมความเข้ามา จะทำการก็บข้อมความลงฐานข้อมูล
	// 
	if(isset($_POST['chat'])){

		$chatMessage = mysqli_real_escape_string($con, $_POST['chat']);

		if($chatMessage != ""){

			mysqli_query($con, "INSERT INTO messages(message) VALUES ('$chatMessage')");

		}
	}

	// นำข้อความออกไปแสดงผลที่หน้าเว็ป
	//
	if(isset($_POST['chatUpdate'])){

		$sql = "SELECT * FROM messages";

		$run = mysqli_query($con, $sql);

		while ($getData = mysqli_fetch_array($run, MYSQLI_ASSOC)) {
			
			$chatMessage = $getData['message'];

			echo $chatMessage . "<br/><br/>";
		}

	}

?>