<?php
  include('sql.php');

  $values = json_decode($_POST['values'],true);

  $query = "SELECT firstname from booking_detail where hall_name='{$values['hall_name']}' and date='{$values['date']}'"
              or die("Could not execute the select query.");
  $row = mysqli_query($conn, $query);
  if(mysqli_num_rows($row)==0){
    $query = "INSERT into booking_detail(firstname,lastname,address,email_id,phone_no,date,hall_name) values('{$values['fname']}','{$values['lname']}','{$values['address']}','{$values['email']}',{$values['phone']},'{$values['date']}','{$values['hall_name']}')"
                    or die("Could not execute the select query.");
    mysqli_query($conn, $query);
    //   $_SESSION['success'] = "You are now logged in";
    $result=array("present"=>false,"status"=>"success");
  }else{
    $result=array("present"=>true,"status"=>"Already Booked.Please choice another date!");
  } 
  echo json_encode($result);
?>