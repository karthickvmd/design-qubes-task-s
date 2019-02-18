<?php
require_once 'dbconnect.php';
if(isset($_GET['as'],$_GET['item']))
{
    $as = $_GET['as'];
    $item = $_GET['item'];
    $sql = "UPDATE `todo` SET `done`= 1 WHERE `id`= '$item' ";
    if ($conn->query($sql) === TRUE) {
        header('Location:index.php');
    } 
}
?>