<?php

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
$data = array();
$query="select * from events order by id";
$result=mysqli_query($link,$query);
$obj= mysqli_fetch_object($result);
foreach($result as $row)
{
    $data[] = array(
        'id' => $row["id"],
        'title' => $row["title"],
        'start' => $row["start_event"],
        'end' => $row["end_event"],
    );

    
}

echo json_encode($data);

?>