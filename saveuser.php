<?php 

include 'connection.php';

// print_r($user);
if(isset($_SESSION['access_token'])) {

	$name = $user->name;
	$email = $user->email;

	$user_exist = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($conn,$user_exist);

	if(!mysqli_num_rows($result) > 0){
		$insert_user = "INSERT INTO users(name, email) VALUES('$name','$email')";
		if(mysqli_query($conn,$insert_user)){
			header("location: index.php");
		}
	}else{
		header("location: index.php");	
	} 

}
// $query = "INSERT INTO users(name, email) VALUES ('$name', '$email')";
// mysqli_query($conn,$query);

	

 ?>