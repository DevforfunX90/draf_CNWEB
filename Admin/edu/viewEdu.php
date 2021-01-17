<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from education";
    $rec = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table" border=1>
    <thead>
        <tr>
            
            <th>id</th>
            <th>Name</th>
            <th>Time</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_education']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['time']?></td>
                <td><?php echo $item['desscription']?></td>
                <td><?php echo "<a href='./updateEdu.php?id_education=$item[id_education]'>Update</a>" ?></td>
                <td><?php echo "<a href='./createEdu.php'>Create</a>" ?></td>
                <td><?php echo "<a href='./deleteEdu.php?id_education=$item[id_education]'>Delete</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
    require_once "../../footer.php";
?>