<?php
  include('sql.php');

  $values = json_decode($_POST['values'],true);

  $query = "SELECT name from contact where email='{$values['email']}'"
              or die("Could not execute the select query.");
  $row = mysqli_query($conn, $query);
  if(mysqli_num_rows($row)==0){
    $query = "INSERT into contact(name,email,phone_no,comment) values('{$values['name']}','{$values['email']}',{$values['phone']},'{$values['comment']}')"
                    or die("Could not execute the select query.");
    mysqli_query($conn, $query);
    //   $_SESSION['success'] = "You are now logged in";
    $result=array("present"=>false,"status"=>"success");
  }else{
    $result=array("present"=>true,"status"=>"Already Commented");
  } 
  echo json_encode($result);
?>