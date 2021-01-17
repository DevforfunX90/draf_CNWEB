<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from defect";
    $rec = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View_Skills</title>
</head>
<body>
<table class="table" border=1>
    <thead>
        <tr>
            <th>id</th>
            <th>id_information</th>
            <th>Content</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_defect']?></td>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['content']?></td>
                <td><?php echo "<a href='./updateDe.php?id=$item[id_defect]'>Update</a>" ?></td>
                <td><?php echo "<a href='./deleteDe.php?id=$item[id_defect]'>Delete</a>" ?></td>
                <td><?php echo "<a href='./createDe.php'>Create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
    require_once "../../footer.php";
?>