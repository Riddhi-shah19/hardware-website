<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="cs_computers";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    // if($conn){
    //     echo "connection ok";
    // }

if(isset($_POST['submit'])){
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $comment=$_POST['comment'];

   $query="INSERT INTO sign_up(first_name,last_name,email,number,comment) values('$first_name','$last_name','$email','$number','$comment')";
    $data=mysqli_query($conn,$query);
    // if($data){
    //     echo "stored";
    // }
    // else{
    //     echo "failed";
    // }
}
?>