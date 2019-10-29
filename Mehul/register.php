<?php 

session_start();

include("sql.php");

$values = json_decode($_POST['values'],true);

// $username = mysqli_real_escape_string($conn, $values['user_name']);
// $email = mysqli_real_escape_string($conn, $values['email']);

$query = "INSERT into booking_detail(firstname,lastname,address,email_id,phone_no) values('{$values['fname']}','{$values['lname']}','{$values['address']}','{$values['email']}','{$value['phone']}')"
                    or die("Could not execute the select query.");
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0){
    $result=array("status"=>"email_found");; //Email is already exists
}
else {
    $password_1 = mysqli_real_escape_string($conn, $values['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $values['password_2']);

    if($password_1 == $password_2){
        $password = md5($password_1);//encrypt the password before saving in the database
        $query = "INSERT INTO user (user_name, email, password) VALUES('$username', '$email', '$password')"
                or die("Could not execute the select query.");
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        $result=array("status"=>"success");
    }
    else{
        $result=array("status"=>"failed");
    }
}

echo json_encode($result);