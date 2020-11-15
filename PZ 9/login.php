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
         <form action="auth.php" method="post">
       Login: <input type="text" name="login"><br>
       Password: <input type="password" name="password"> <br>
       <input type="submit" value ="Log In" class="button">
        </form>
    </body>
</html>