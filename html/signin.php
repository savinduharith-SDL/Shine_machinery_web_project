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
	 	$name = $_POST['signin_username'];
	 	$user_password = $_POST['signin-password'];

	 
	 }
	  $sql="SELECT user_name,password FROM customer WHERE user_name='$name'" ;
	  $result=mysqli_query($conn, $sql);

	  if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)) {
            if($row['user_name'] == $name)
            {
                if($row['password'] == $user_password)
                {
                    echo "<script>
	  			    function redirect(){
	  				 window.alert('Login successful');
	  				 location.href='/html/index.html';
	  			    } 
	  			    redirect();
	  			    </script>";
	  		
                }else{
                    echo "<script>
	  			    function redirect(){
	  				 window.alert('User Name or password incorrect!');
	  				 location.href='/html/login.php';
	  			    } 
	  			    redirect();
	  			    </script>";
                }
            }
        }
}
	  else{
	  	echo "<script>
	  			function redirect(){
	  				 window.alert('User does not exsist!');
	  				 location.href='/html/login.php';
	  			} 
	  			redirect();
	  			</script>";
	  		
	  }


?>

</body>
</html>

	
