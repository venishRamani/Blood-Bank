<?php
include_once 'connect.php';
function insert($eid,$ename,$price)
{
    $conn=connection();
    $sql="insert into book (bid,bname,price) values ($bid,'$bname','$price')";
   
    $conn->query($sql);
    $conn->close(); 

}
?>