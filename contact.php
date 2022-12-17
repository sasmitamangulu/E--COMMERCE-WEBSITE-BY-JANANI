<?php

	@$name2 = $_POST['name'];
	@$email = $_POST['email'];
    @$phno = $_POST['phno'];
    @$message1 = $_['message'];
	
$conn = mysqli_connect("localhost","root","","testj");
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $sql = "INSERT INTO contactj(name2, email, phno, message1) values('$name2','$email','$phno','$message1')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo '<script>
        window.location.href="http://127.0.0.1:5501/home.html";
        alert("your contact details is successfully stored!!!!!")
        </script>';
    } else {
        echo "error";
    }
}

	
?>