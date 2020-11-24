<!DOCTYPE html>
<html>
    <style>
        form
		{
            width: 150px;
			font-family: 'Times New Roman';
			font-size: 20px;
			display: flex;
            flex-direction: column;
        }
		.button
		{
			background-color: red;
			color: white;
			border: none;
			font-size: 18px;
		}
    </style>
<body>
<div class="container">

   <form action="reg2.php" method="post">
       Login: <input type="text" name="login"><br>
       Password: <input type="password" name="password"><br>
       First Name: <input type="text" name="firstName"><br>
       Last Name: <input type="text" name="lastName"><br>
       <input type="submit" value ="Registration" class="btn">
   </form>
</div>
</body>
</html>