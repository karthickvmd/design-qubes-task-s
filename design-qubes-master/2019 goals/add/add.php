<?php
echo "call";
require_once 'dbconnect.php';
if(isset($_POST['input']))
{
    $name = trim($_POST['input']);
    echo $name;
    if(!empty($name))
    {
        $sql = "INSERT INTO `todo`(`name`, `done`) VALUES ('$name',0)";
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>