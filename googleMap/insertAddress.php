<?php

	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,'addressdb');

    mysqli_set_charset($conn,'utf8');
    

?>

<html>
<head>
</head>
<body>
    <?php
        $displayName=isset($_POST['displayName']) ? $_POST['displayName'] : '';
        $saveName=isset($_POST['saveName']) ? $_POST['saveName'] : '';   
        $category=isset($_POST['category']) ? $_POST['category'] : '';   
        $latitude=isset($_POST['latitude']) ? $_POST['latitude'] : '';   
        $longitude=isset($_POST['longitude']) ? $_POST['longitude'] : '';   
        $fullAddress=isset($_POST['fullAddress']) ? $_POST['fullAddress'] : '';   

        $sql = "insert into addinfo (displayName, saveName, category, latitude, longitude, fullAddress) 
            values ('$displayName','$saveName','$category', '$latitude','$longitude','$fullAddress')";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
    ?>
</body>
</html>