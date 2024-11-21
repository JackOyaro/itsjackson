<?php
$firstname = POST['firstname'];
$lastname = POST['lastname'];
$email = POST['email'];
$gender = POST['gender'];
$password = POST['password'];
$confirmpassword = POST['confirmpassword'];




$conn = new mysqli (localhost, 'root','','test')
if($conn->connect_error){
    die('connection Faild : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into registration(firstname, lastname, email_or_phone no, password gender )
}   values(?,?,?,?,?)");
   $stmt ->bind_param("sssssi"$firstname, $lastname, $email_or_phone no, $password $gender );
   $stmt->execute();
   echo "registration successfully...";
   $stmt->close();
   $conn->close();

?>
