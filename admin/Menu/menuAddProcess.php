<?php 
include('session.php');

if (isset($_POST['add']))
{
	$id = $_POST['id'];
	$foodName = $_POST['foodName'];
	$info = $_POST['info'];
	$price = $_POST['price'];
	$available = $_POST['available']; // Corrected the variable name
	$picture = 'images2/' . $_FILES['picture']['name']; // Corrected the variable assignment

	if (preg_match("!image!", $_FILES['picture']['type']))
	{ 
		// Move the uploaded image to the "images2" directory
		if (move_uploaded_file($_FILES['picture']['tmp_name'], $picture))
		{
			// Insert menu item into the "menu" table
			$mysql = "INSERT INTO menu (id, foodName, info, price, available, picture) 
					  VALUES ('$id', '$foodName', '$info', '$price', '$available', '$picture')";

			if (mysqli_query($con, $mysql))
			{
				// Display a success message and redirect
				echo '<script>
				alert("Pendaftaran Bilik Berjaya!"); 
				window.location.href="MenuList.php";</script>';
			}
			else
			{
				// Display an error message if the database query fails
				echo "Error: " . mysqli_error($con);
			}
		}
		else
		{
			// Display an error message if moving the uploaded file fails
			echo '<script>
			alert("Error uploading the image!"); 
			window.location.href="addMenu.php";</script>';
		}
	}
	else
	{
		// Display an error message if the uploaded file is not an image
		echo '<script>
		alert("Please choose GIF/JPG/PNG pictures only!"); 
		window.location.href="addMenu.php";</script>';
	}

	// Close the database connection add back button
	mysqli_close($con);
}
?>
