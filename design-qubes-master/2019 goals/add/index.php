<?php
require_once 'dbconnect.php';
$sql = "SELECT * FROM `todo`";
$result = $conn->query($sql);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../main.css">
    <title>goal List</title>
</head>
<body>
    <div class = "container">
        <div id="q">
    <h2> <center>goal List </center></h2></div>
        <ul class = "items">
            <?php
        if ($result->num_rows > 0) {
 
            while($row = $result->fetch_assoc()) {?>
                <li><span class = "item<?php echo $row['done'] ? ' done' : '' ?>"><?php echo $row["name"] ?></span>
                <?php if(!$row['done']): ?>
                <a href="mark.php?as=done&item=<?php echo $row['id']; ?>" class = "done-button"> Click goal Fineshed</a>
                <?php endif; ?>
                </li>
           <?php }
        } ?>
           
        </ul>
        <form class="item-add" action = "add.php" method = "post" >
            <input type = "text" class="input" placeholder = "Enter the text ,goal you  to add" name = "input" required>
            <input type = "submit" class="submitbtn" name = "submit" value="Add" >
        </form>
    </div>
</body>
</html>
