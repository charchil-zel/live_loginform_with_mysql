
  
    <?php
    if (isset($_POST['register-btn']))
    {
    $uname = $_POST['reg-uname'];
    $email=$_POST['reg-mail'];
    $password=$_POST['reg-password'];
    }
    $conn= mysqli_connect("localhost","root","","registerform");
    if(!$conn)
    {
        echo mysqli_connect_error();
    }
    $sql = "INSERT INTO reg_data VALUES ('$uname','$email','$password')";
    
    if (mysqli_query($conn,$sql))
    {
        echo "Record inserted successfully";
    }
    else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
    $conn->close();
    ?>
    
