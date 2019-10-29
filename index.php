<?php
session_start();

$_SESSION['url']="http://{$_SERVER['HTTP_HOST']}";
$uri=explode("/",$_SERVER['REQUEST_URI']);

$page=$uri[count($uri)-1];

$page=!isset($page) || $page ==""?"landing":$page;

$page=explode("?",$page)[0];

// include("header.php");

if($page=="landing")
    include("landpage.php");
else if($page=="search")
    include("search.php");
else if($page=="hall")
    include("hall.php");
else if($page=="booking_form")
    include('booking_form.php');
else
    include('error.php');
?>