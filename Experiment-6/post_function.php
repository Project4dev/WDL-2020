<?php 


// $house_type = $kitchen_size = $no_washroom = $phone = $P_email = $add_one = $add_two = $city = $state= $zip  =$price ="";
include('connect.php');
if(isset($_POST['H_type'])){
	

	$house_type	  =$_POST['H_type'];
	$kitchen_size =$_POST['S_kitchen'];
	$no_washroom  =$_POST['N_washroom'];
	$phone        =$_POST['Phone'];
	$P_email	  =$_POST['P_email'];
	$add_one      =$_POST['Add1'];
	$add_two      =$_POST['Add2'];
	$city         =$_POST['City'];
	$state        =$_POST['State'];
	$zip	      =$_POST['Zip'];
	$price        =$_POST['Price'];


	//echo $price//." ".$kitchen_size." ".$no_washroom." ".$phone." ".$P_email." ".$add_one." ".$add_two." ".$city." ".$state." ".$zip."<br>";
	// $sql ="INSERT INTO SELL (house_type,kitchen_size,no_washroom,phone,email,add_one,add_two,city,state,zip,user_id,price) VALUES ('$house_type','$kitchen_size','$no_washroom','$phone','$P_email','$add_one','$add_two','$city','$state','$zip',(SELECT user_id from users WHERE eamil='$P_email'),'$price',NOW())";

	$sql ="INSERT INTO sell (house_type,kitchen_size,no_washroom,phone,email,add_one,add_two,city,state,zip,user_id,Price,uploaded) VALUES ('$house_type','$kitchen_size','$no_washroom','$phone','$P_email','$add_one','$add_two','$city','$state','$zip',(select user_id from users where eamil='$P_email'),'$price',NOW())";
	// $result=mysqli_query($conn,$sql);
	// echo $result;
	// echo mysqli_num_rows($result);
	// $conn->exec($sql);

	if($conn->query($sql) === TRUE){
		header("refresh:1;url=index.php");
	}
	else{
		echo "Something happen, Please post again";
	}
}


function test_input($data) {
  $data = trim($data); // Removes extra space, ta
  $data = stripslashes($data); // Removes backslashes 
  $data = htmlspecialchars($data); //  
  return $data;
}

 ?>
