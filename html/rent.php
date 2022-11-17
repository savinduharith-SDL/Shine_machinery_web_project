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
        $count=0;

     //create connection
     $conn=mysqli_connect($servername,$username,$password,$dbname);
     if(!$conn){
        die("connection failed:".mysqli_connect_error());

     }
     $sql="SELECT machine_type, amount FROM machinary";
     $result=mysqli_query($conn, $sql);

     if($_SERVER['REQUEST_METHOD'] == "POST"){
	 	$type = $_POST['machine'];
	 	$address = $_POST['address'];
	 	$period = $_POST['rental'];
	 }
     if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)) {
          if($row['machine_type']== $type){
          	 $count = $row['amount'];
          }     	
        }
     }
     if($count>0){
     	 $count= $count-1;
     	  $sql="UPDATE `machinary` SET amount = '$count' WHERE machine_type= '$type'"  ;
	  if(mysqli_query($conn, $sql)){
			echo "<script>
		    function redirect(){
			 window.alert('proceed to payment');
			 location.href='/html/payment.html';
		    } 
		    redirect();
		    </script>";
			}
		}
	  else{
	  	   echo "<script>
		    function redirect(){
			 window.alert('Insuffient inventory');
			 location.href='/html/shop.php';
		    } 
		    redirect();
		    </script>";
	  		}
     
      	 
?>

</body>
</html>

	
