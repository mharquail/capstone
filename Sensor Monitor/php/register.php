<?php
	/*
	*    ArraysAtOne Capstone 2018 - Maple Leaf Foods
	*
	*    Kevin Baumgartner
	*    Jesse Berube
	*    Marc Harquail
	*    Alex Ireland
	*
	* * * * * * * * * * * * * * * * * * * * * * * * *
	*
	*    register.php
	*    
	*    Alex Ireland
	*
	*/
	
	$dbservername = "107.180.27.180";
	$dbusername = "MapleLeafAdmin";
	$dbpassword = "ClVq0Qzt21jz";
	$dbname = "Mapleleaf_Capstone";

	$username = $_POST["user"];
	$split_user = str_split($username);
	$unhashed_pass = $_POST["pass"];
	$size_of_array = count($split_user);
	$unhashed_pass = $unhashed_pass.$split_user[0].$split_user[$size_of_array-1];
	$hashed_pass = password_hash($unhashed_pass,PASSWORD_DEFAULT);
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	
	//Password is calculated by taking the first and last username characters and adding them onto the back of the password and then salting.
		
	// Create connection
	$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO UserTable (UserName, Password, FirstName, LastName)
	VALUES ('".$username."', '".$hashed_pass."', '".$firstname."', '".$lastname."')";

	if ($conn->query($sql) === TRUE) {
		$sql = "SELECT ID FROM UserTable WHERE Username='".$username."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$userID = $row["ID"];
				$sql = "INSERT INTO EMAIL_LIST (userAccount, email) VALUES ('".$userID."', '".$email."')";
				if ($conn->query($sql) === TRUE) {
					echo "success";
				}
				else{
					echo "email failed";
				}
			}
		} else {
			echo "0 results";
		}
	} else {
	    error_log("user failed");
	}

	$conn->close();
?>
<html>
</html>
