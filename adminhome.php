<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<h1>THIS IS ADMIN HOME PAGE</h1>

<section class="tableHead">
    <table id="tab">
     
        <tr>
            <th>Name</th>
           
        </tr>

       <form class="form" method="post">
          

	   <tr id ="row" style="font-size: 70px;">
                            <td>  <a href="Reports.php" style="margin-left:9vh;">Andile Ramakgale</a></td>
                         
	   </tr>                  
                            <tr id ="row" style="font-size: 70px;">
                              
                                <td>  <a href="Reports.php" style="margin-left:9vh;">User 1</a>  </td>

							</tr>         
							
							<tr id ="row" style="font-size: 70px;">
                              
                                <td>  <a href="Reports.php" style="margin-left:9vh;">User 2</a>  </td>

							</tr>  <tr id ="row" style="font-size: 70px;">
                              
                                <td>  <a href="Reports.php" style="margin-left:9vh;">User 3</a>  </td>

							</tr>  
							<tr id ="row" style="font-size: 70px;">
                              
                                <td>  <a href="Reports.php" style="margin-left:9vh;">User 4</a>  </td>

							</tr>  
							<tr id ="row" style="font-size: 70px;">
                              
                                <td>  <a href="Reports.php" style="margin-left:9vh;">User 5</a>  </td>

							</tr>  
							<tr id ="row" style="font-size: 70px;">
                              
                                <td>  <a href="Reports.php" style="margin-left:9vh;">User 6</a>  </td>

							</tr>  



    </form>
</table>





</section>

		<td>  
		<a href="login.php"></a><br><br>

          </td> 
		<?php echo $_SESSION["user_name"]?> <a href="logout.php">Logout</a>
</body>
</html>
