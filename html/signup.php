<<!DOCTYPE html>
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
	 	$name = $_POST['signup_username'];
	 	$email = $_POST['signup_email'];
	 	$user_password = $_POST['signup_password'];

	 
	 }
	  $sql="SELECT user_name FROM customer WHERE user_name='$name' LIMIT 1" ;
	  $result=mysqli_query($conn, $sql);

	  if(mysqli_num_rows($result) == 0){
	  	//$insert = "INSERT INTO customer VALUES(".$name.",".$email.",".$password.")"
	  	$insert = "INSERT INTO `customer` VALUES('$name','$email','$user_password')";
	  		if(mysqli_query($conn,$insert)){
	  			echo "New record added sucessfully";
	  			header("Location: /html/login.php");
	  			exit();
	  	}
	  		else{
	  			echo "error 404";
	  		}
}
	  else{
	  	//header("Location: /html/login.php");
	  	echo "<script>
	  			function redirect(){
	  				 window.alert('User already exsists!');
	  				 location.href='/html/login.php';
	  			} 
	  			redirect();
	  			</script>";
	  		
	  }
	  //setTimeout(header('Location: /html/login.php'),3000);


?>

</body>
</html>

	
