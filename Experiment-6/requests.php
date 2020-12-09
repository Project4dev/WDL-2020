<?php

include('connect.php');
session_start();

$pwd = $fanme = $lname  = $email = "";
$house_type = $kitchen_size = $no_washroom = $phone = $P_email = $add_one = $add_two = $city = $state= $zip  =$price =$status = $statusMsg =  "";

	
	// $username = test_input($_POST['username']);
	
	// $check =$_POST['btnSignup'] ;
	// $class = test_input($_POST['class']);
	// $house_type	=$_POST['H_type'];
	// $kitchen_size =$_POST['S_kitchen'];
	// $no_washroom =$_POST['N_washroom'];
	// $phone =$_POST['Phone'];
	// $P_email	=$_POST['P_email'];
	// $add_one =$_POST['Add_one'];
	// $add_two =$_POST['Add_two'];
	// $city    =$_POST['City'];
	// $state	= $_POST['State'];
	// $zip	=$_POST['Zip'];
	// $price  =$_POST['Price'];

if(isset($_POST['btnSignup'])){
	$pwd = test_input($_POST['pass1']);
	$fname = test_input($_POST['fname']);
	$lname = test_input($_POST['lname']);
	// $pwd = md5($pwd);
	$email = test_input($_POST['email']);
	
	$sql = "insert into users (fname,lname,password,eamil)
			values ('$fname','$lname','$pwd','$email') "; 

	//echo $sql;
	if ($conn->query($sql) === TRUE) {
		// $_SESSION['user']= $username;
		// $_SESSION['role']= 'student';
		header("refresh:10;url=index.php" );
		echo $sql;

  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.';
  		"<br>";

			} 
	else {
		header("refresh:10;url=signup.php" );
  		echo "Error: " . $sql . "<br>" . $conn->error;
  		echo '<br> You\'ll be redirected in about 3 secs. If not, click <a href="signup.php">here</a>.';
	}
}

// else if(isset($_POST['btnLogin'])){
// 	echo "Welcome <br>";
	
// 	$email = test_input($_POST['email']);
// 	$pwd = test_input($_POST['pass']);

// 	// $pwd = md5($pwd);

// 	$sql = "select * from users where eamil ='$email' and password = '$pwd' ";
// 	//echo $sql;

// 	$result = $conn->query($sql);

// 	if ($result->num_rows > 0) {
// 	  // output data of each row
// 		// $_SESSION['user']= $rollno;
		
// 		// $_SESSION['auth'] = 'true' ;
		
// 		// $_SESSION['role']= 'student';
// 		header("refresh:5;url=rent.php" );
//   		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="rent.php">here</a>.';
		
// 	  // while($row = $result->fetch_assoc()) {
// 	  //   echo "<br>id: " . $row["id"]. " - Roll no: " . $row["username"]. " Class : " . $row["class"]. "<br>";
// 	  //   echo "<br> Mobile No - " . $row["mobile"]. " - Email: " . $row["email"];
// 	  // }
// 	} else {
// 	  header("refresh:5;url=login.php" );
//   		echo '<h2> Invalid Credentials </h2> <br> You\'ll be redirected in about 3 secs. If not, click <a href="login.php">here</a>.';
// 	}
// }

else if(isset($_POST['btnContact']))
{
 $name =$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];

 $sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

if($conn->query($sql) === TRUE){
		header("refresh:1;url=index.php");
	}
	else{
		echo "Something happen
		 Please post again";
	}
}

else if(isset($_POST['btnSearch'])){
	echo "Welcome <br>";
	
	$house_type = test_input($_POST['H_type']);

	$location = test_input($_POST['Location']);

	// $pwd = md5($pwd);

	$sql = "select * from sell where state ='$location' and house_type = '$house_type' ";
	echo $sql;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$price =$row['Price'] ;
		$email=$row['email'] ;
		 
		echo "<br> Price is ..".$price."<br>" ;
		
		echo "Contact is ...".$email."<br>";

		// echo $result;
	  // output data of each row
		// $_SESSION['user']= $rollno;
		
		// $_SESSION['role']= 'student';
		echo "successfull !!....";
		// header("refresh:5;url=rent.php" );
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="rent.php">here</a>.';
		
	  // while($row = $result->fetch_assoc()) {
	  //   echo "<br>id: " . $row["id"]. " - Roll no: " . $row["username"]. " Class : " . $row["class"]. "<br>";
	  //   echo "<br> Mobile No - " . $row["mobile"]. " - Email: " . $row["email"];
	  // }
	} else {
	  // header("refresh:5;url=login.php" );
  		echo '<h2> Invalid Credentials </h2> <br> You\'ll be redirected in about 3 secs. If not, click <a href="login.php">here</a>.';
	}
}

else
{
	echo "<h2> Invalid operation</h2>";
}
function test_input($data) {
  $data = trim($data); // Removes extra space, ta
  $data = stripslashes($data); // Removes backslashes 
  $data = htmlspecialchars($data); //  
  return $data;
}
?>