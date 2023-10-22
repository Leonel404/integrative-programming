<?php
require_once('db_connection.php');
if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hashed= password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(`firstname`, `lastname`,`email`, `username`, `password`)
        VALUES ('$firstname', '$lastname','$email','$username', '$password_hashed')";
        if($conn -> query($sql)===TRUE){
            header('location:index.php');
        }else{
            echo"Error: " .$sql. "<br>" . $conn->error;
        }
        $conn-> close();

}else{
    header('location:register.php');
}
?>