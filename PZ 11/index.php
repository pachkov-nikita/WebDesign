<!DOCTYPE html>
<html>
<head>
    <style>
       .container {
			font-family: 'Times New Roman';
			font-size: 20px;
			display: flex;
            flex-direction: column;
        }
       
   </style>
</head>
<body>
<div class="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php
        require_once 'db.php';
        $query = "select * from users";
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
		$img =  '/public/images/fileToUpload.png';

        echo '<table width="400" height = "400" cellpadding="10" border="2">';
        for($i = 0; $i < count($row); $i++){
            echo '<tr>';
			echo "<td ><img src=".$img." ></td>";
			echo "<td>".$row[$i]["login"]."</td>";
            echo "<td>".$row[$i]["last_name"]."</td>";
            echo "<td>".$row[$i]["first_name"]."</td>";
            echo '</tr>';
        }
        echo '</table>';
        mysqli_close($conn);

    ?>
</div>
</body>
</html>