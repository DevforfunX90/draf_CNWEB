<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from skills";
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
            <th>Name</th>
            <th>percentage</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_skills']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['percentage']?></td>
                <td><?php echo "<a href='./updateSki.php?id=$item[id_skills]'>Update</a>" ?></td>
                <td><?php echo "<a href='./createSki.php'>Create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
    require_once "../../footer.php";
?>