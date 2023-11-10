<!DOCTYPE html>
<html>
<head>
<style>
#mainbody
{
	background-color: rgba(184, 184, 178, 1);
	padding: 40px ;
}
#tajuk
{
	font-size: 30px;
	font-family: Righteous;
	font-weight: bold;
	text-align: center;
}

table {
	border: 4px solid black;
	margin-left: auto;
	margin-right: auto;
	border: 2px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color:rgba(141, 143, 10, 1);
}

td {
	text-align: center;
	height: 25px;
}

th {
	height: 30px;
	text-align: center;
	font-weight: bold;
	background-color:rgba(193, 192, 62, 1);
}
</style>
</head>
<body>

<div id="#">
   <div id="tajuk"><p>Menu List</p></div>
   <?php
   include('db.php');
   $query = "SELECT * FROM menu" ;
   $mysql = $query ;
   $result = mysqli_query($con, $mysql) or die(mysqli_error($con));

   if (mysqli_num_rows($result) > 0)
{
	//table untuk paparan data 
    echo "<table border='20'>"; 
    echo "<col width='80'>"; // 1 
    echo "<col width='150'>"; //2 
    echo "<col width='200'>"; //3 
    echo "<col width='100'>"; // 4 
    echo "<col width='100'>";   // 5 
    echo "<col width='200'>"; // 6
    echo "<col width='90'>";  // 7
    echo "<col width='90'>"; // 8

	echo "<tr>";
	
    echo "<th>Menu Id</th>"; // 1
    echo "<th>Menu Name</th>";  // 2
    echo "<th>Description</th>"; // 3
    echo "<th>Price</th>"; // 4
    echo "<th>Availibility</th>"; // 5
    echo "<th>Picture</th>"; // 
    echo "<th>Edit</th>"; // 7
    echo "<th>Delete</th>"; // 8

    echo "</tr>";
	
	//papar semua data dari jadual dalam DB 

    while($row = mysqli_fetch_assoc($result))
	{
	$img="<img src=".$row['picture'].">";
	
	echo "<tr height='110'>"; 
    echo "<td>".$row['id']."</td>"; 
    echo "<td>".$row['foodName']."</td>"; 
    echo "<td>".$row['info']."</td>"; 
    echo "<td>RM ".$row['price']."</td>"; 
    echo "<td>".$row['available']."</td>" ;
	echo "<td><img src=".$row['picture']." 
	               width='150' height='100'></td>"; 
	echo "<td><a href='editMenu.php?id=".$row['id']."'>
	           <img src='images2/edit.png' width='50' height='50'>
			   </a></td>" ;
	echo "<td><a href='deleteMenu.php?id=".$row['id']."'>
	      <img src='images2/hapus.jpg' width='70' height='70'>
		  </a></td>" ;
	echo "</tr>";
	}
	echo"</table>" ;

}else { echo "<center>Tiada Data</center>"; }

?>

<button onclick="history.back()">Go Back</button>
</div>

</body>
</html>