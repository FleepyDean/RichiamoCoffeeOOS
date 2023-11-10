<?php
session_start();
include '../html/db.php';

//$id = $_SESSION['id'];

?>


<!doctype html>
<html lang="en">
<head>
	<title>richiamoCoffeeSidebar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../element/sidebar/css/style.css">
</head>
<body>

<div class="wrapper d-flex align-items-stretch">
	<nav id="sidebar">
		<div class="custom-menu">
			<button type="button" id="sidebarCollapse" class="btn btn-primary">
				<i class="fa fa-bars"></i>
				<span class="sr-only">sidebar</span>
			</button>
		</div>
		<div class="p-4">
			<h1><a href="../html/dashboard.php" class="logo">Richiamo Coffee <span>Online Ordering System</span></a></h1>
			<ul class="list-unstyled components mb-5">
				<li class="active">
					<a href="../html/dashboard.php"><span class="fa fa-cogs mr-3 "></span>Dashboard</a>
				</li>

				<li>
					<a href="../html/orderDetails.php"><span class="fa fa-briefcase mr-3"></span>Orders</a>
				</li>

				<li>
					<a href="../html/EditMenu.php"><span class="fa fa-sticky-note mr-3"></span> Menu</a>
				</li>

				<li>
					<a href="../html/ViewFeedbackStaff.php"><span class="fa fa-sticky-note mr-3"></span> Feedback</a>
				</li>

				<li>
					<a href="../html/customerList.php"><span class="fa fa-user mr-3"></span> Customer</a>
				</li>
				<?php
				if (isset($_SESSION['id'])) {
                    $id = $_SESSION['id'];
                
                    if ($id == 3) {
                        echo "<li>";
                        echo "<a href='../html/staffList.php'><span class='fa fa-user mr-3'></span>Staff</a>";
                        echo "</li>";
                    }
                }
				 ?>

				<li>
					<a href="../html/staffList.php"><span class="fa fa-user mr-3"></span> Staff</a>
				</li>

				<li>
					<a href="../logout.php"><span class="fa fa-home mr-3"></span>Sign Out</a>
				</li>
			</ul>

			<div class="footer">
				<p>
					Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Richiamo Coffee Sdn. Bhd. <i class="icon-heart" aria-hidden="true"></i>
				</p>
			</div>

		</div>
	</nav>

	<script src="../element/sidebar/js/jquery.min.js"></script>
	<script src="../element/sidebar/js/popper.js"></script>
	<script src="../element/sidebar/js/bootstrap.min.js"></script>
	<script src="../element/sidebar/js/main.js"></script>
</body>
</html>