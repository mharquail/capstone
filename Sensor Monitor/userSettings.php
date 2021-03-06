<?php 
    session_start();
    if (isset($_GET['uid'])) {
		$_SESSION['uid'] = $_GET['uid'];
	}
	else{
		$_SESSION['uid'] = "0001203B";
	}
?>

<!-- 
        ArraysAtOne Capstone 2018 - Maple Leaf Foods
        Kevin Baumgartner
        Jesse Berube
        Marc Harquail
        Alex Ireland

        - - - - - - - - - - - - - - - - - - - - - - -

		userSettings.php
        Jesse Berube
        Marc Harquail
 -->

<!DOCTYPE html>

<!-- HTML -->
<html>

	<!-- Head -->
	<head>
		<?php include 'bodyguard.php' ?>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="./media/maple.png"/>
		<title>Temperature Monitor</title>

		<!-- Style Imports -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="./css/style_xs.css">
		<link rel="stylesheet" type="text/css" href="./css/style_sm.css">
	    <link rel="stylesheet" type="text/css" href="./css/style_md.css">
	    <link rel="stylesheet" type="text/css" href="./css/style_lg.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<!-- Script Imports -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<script src="./js/userList.js"></script>
	</head>

	<!-- Body -->
	<body>

		<!-- Navigation Bar -->
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">

                <!-- Logo -->
        		<a href="/"><img id="navbar-image" src="./media/maple.png" alt="logo"></a>

                <!-- Dropdown Menu -->
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        			<span class="navbar-toggler-icon"></span>
        		</button>

                <!-- Dropdown Items -->
        		<div class="collapse navbar-collapse" id="navbarNav">
        			<ul class="navbar-nav">
        				<li class="nav-item">
        					<a class="nav-link" href="/">Home</a>
        				</li>
        				<?php  include './php/checkforuser.php' ?>
        			</ul>
        		</div>
            </div>
    	</nav>

    	<div id="adminArea">
    		<h1 class="userTableHeader">Admin Settings</h1>
			<table id="userTable">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
					<th>is Admin</th>
					<th><input type="button" id="add" class="login buttons fas fa-user-plus" value="&#xf234" onclick="window.location='./registrar'"></th>
				</tr>
			<?php			
			$sql = "SELECT ID, FirstName, LastName, Username, IsAdmin FROM UserTable";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc()) 
				{
			?>
				<tr id="row<?php echo $row['ID'];?>">
					<td id="firstNameVal<?php echo $row['ID'];?>"><?php echo $row['FirstName'];?></td>
					<td id="lastNameVal<?php echo $row['ID'];?>"><?php echo $row['LastName'];?></td>
					<td id="usernameVal<?php echo $row['ID'];?>"><?php echo $row['Username'];?></td>
					<td><input disabled type="checkbox" id="statusVal<?php echo $row['ID'];?>" value="1" <?php echo ($row['IsAdmin']==1 ? 'checked' : '');?>></td>
					<td>
					<input type='button' class="editButton fas fa-edit" id="editButton<?php echo $row['ID'];?>" value='&#xf044' onclick="edit('<?php echo $row['ID'];?>');">
					<input type='button' style="display:none" class="editButton fas fa-edit" id="saveButton<?php echo $row['ID'];?>" value="&#xf0c7" onclick="save('<?php echo $row['ID'];?>');">
					<input type='button' style="display:none" class="editButton fas fa-trash-alt" id="deleteButton<?php echo $row['ID'];?>" value="&#xf2ed" onclick="deleteR('<?php echo $row['ID'];?>');">
					</td>
				</tr>
			<?php
				}
			}
			?>
			</table>
		</div>

		<div id="userArea">
			<h1 class="userHeader">User Settings</h1>
			<div id="passwordChangeArea">
				<h2 class="passwordChangeHeader">Change Password</h2>
				<input class="passwordChangeField" type="password" id="old" placeholder="Old Password">
				<input class="passwordChangeField" type="password" id="new" placeholder="New Password">
				<input class="passwordChangeField" type="password" id="newconfirm" placeholder="Confirm Password">
				<input class="passwordChangeButton" type="button" onclick="changePassword();" value="Update Password">
			</div>
		</div>

	</body>
</html>