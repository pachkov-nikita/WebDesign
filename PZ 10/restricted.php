<!DOCTYPE html>
<html>
    <body>
        <?php
		    session_start();
            if($_SESSION['login']){
                echo 'You are successfully logged in<br>';
            }else{
				echo 'Oops, login or password was wrong!<br>';
                echo '<a href="login.php">Log In</a>'; 
            }
        ?>
    </body>
</html>