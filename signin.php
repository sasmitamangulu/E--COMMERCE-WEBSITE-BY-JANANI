<?php

@$fname=$_POST['name'];
@$phno = $_POST['phno'];
@$mail=$_POST['mail'];
@$password1 = $_POST['password'];

$conn = mysqli_connect("localhost","root","","testj");
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $sql = "INSERT INTO signj(fname, phno, mail, password1) values('$fname','$phno','$mail','$password1')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo '<script>
        window.location.href="http://127.0.0.1:5501/login.html";
        alert("login successfull and data stored")
        </script>';
    } else {
        echo "error";
    }
}

 ?>