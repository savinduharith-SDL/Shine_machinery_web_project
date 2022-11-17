<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 

	 	$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "shine_machinery";
        $name = "";
        $email = "";
        $user_password = "";


        $conn = mysqli_connect($servername,$username,$password,$dbname);
             if(!$conn){
                die("connection failed:".mysqli_connect_error());
            }
          	

	 if($_SERVER['REQUEST_METHOD'] == "POST"){
	 	$name = $_POST['name'];
	 	$email = $_POST['email'];
	 	$phone = $_POST['phone'];
	 	$msg = $_POST['msg'];

	 
	 }
	  	
	  	$insert = "INSERT INTO `contact_us` VALUES('$name','$email','$phone','$msg')";
	  		if(mysqli_query($conn,$insert)){
	  			echo "<script>
	  			function redirect(){
	  				 window.alert('We will contact you soon.!');
	  				 location.href='/html/index.html';
	  			} 
	  			redirect();
	  			</script>";
	  	}
	  		else{
	  		echo "<script>
	  			function redirect(){
	  				 window.alert('error 404');
	  				 location.href='/html/index.html';
	  			} 
	  			redirect();
	  			</script>";
	  		}

?>

</body>
</html>

	
