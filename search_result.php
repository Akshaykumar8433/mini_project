<?php
include('sql.php');
$value = json_decode($_POST['values'],true);

if($value['search_input']){
    $result = mysqli_query($conn, "SELECT hall_name FROM halls WHERE city='{$value['search_input']}'");
    if(mysqli_num_rows($result)){
        echo json_encode("search.php?search={$value['search_input']}");
    }else{
        echo json_encode("no_result");
    }
}
?>