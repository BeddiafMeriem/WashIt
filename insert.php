<?php

$title = $_POST["title"];
$start_event = $_POST["start_event"];
$end_event = $_POST["end_event"];

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
if(isset($_POST['title']))
{
    $query="INSERT INTO events (title,start_event,end_event) VALUES ('".$title."','".$start_event."' ,'".$end_event."')";
    $result=mysqli_query($link,$query);

}

?>