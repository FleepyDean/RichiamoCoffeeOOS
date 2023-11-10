<!DOCTYPE html>
<html>
<head>
<style>
#mainbody
{
	background-color: rgba(184, 184, 178, 1);
	padding: 40px ;
}
#title
{
	font-size: 30px;
	font-family: Righteous;
	font-weight: bold;
	text-align: center;
}
table {
	border: 2px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color:rgba(141, 143, 10, 1);
}
#label {
	text-align: right ;
}
</style>
</head>

<body>

<div id="#">
<form name="addMenu" action="menuAddProcess.php" method="POST" enctype="multipart/form-data">
	 <div id="title"><p>Add Menu Form</p></div>
<table cellpadding=10px>
<tr>
	 <td style="width: 20px"></td>
	 <td></td>
	 <td></td>
	 <td style="width: 20px"></td>
</tr>
<tr>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
</tr>
<tr>
     <td></td>
	 <td id="id">Menu Id :</td>
	 <td><input type="text" name="id" size="35" placeholder="A001" required></td>
	 <td></td>
</tr>
<tr>
	 <td></td> 
	 <td id="foodName">Menu Name :</td>
	 <td><input type="text" name="foodName" size="35" placeholder="Nitro Doubleshot Espresso" required></td> 
	 <td></td>
</tr>
<tr>
	 <td></td>
	 <td id="info">Menu Description :</td>
	 <td><input type="text" name="info" placeholder="Coffee, but enough to kill a horse" size="35" required></td>
	 <td></td>
</tr>
<tr>
	 <td></td>
	 <td id="price">Price :</td>
	 <td><input type="text" name="price" size="35" placeholder="100" required></td>
	 <td></td>
</tr>
<tr> 
     <td></td>
	 <td id="available">Availability :</td>
	 <td><input type="text" name="available" placeholder="1-Yes || 2-No" size="35" required></td>
	 <td></td>
</tr>
<tr>
	 <td></td>
	 <td id="picture">Menu Picture :</td>
	 <td align="right"><input type="file" name="picture" accept="image/*"required></td>
	 <td></td>
</tr>
<tr>
	 <td></td>
	 <td></td>
	 <td id="submit"><input type="submit" name="add" value="ADD MENU"></td>
	 <td></td>
</tr>
<tr>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
</tr>
<tr>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
</tr>
</table>
</form>
</div>
</body>
</html>