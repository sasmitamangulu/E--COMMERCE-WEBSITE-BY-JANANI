<?php

	@$name1 = $_POST['name'];
    @$message1 = $_['message'];
	
$conn = mysqli_connect("localhost","root","","testj");
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $sql = "INSERT INTO feedbackj(name1,message1) values('$name1','$message1')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo '<script>
        window.location.href="http://127.0.0.1:5501/home.html";
        alert("your feedback is successfully stored!!!!!")
        </script>';
    } else {
        echo "error";
    }
}

	
?>