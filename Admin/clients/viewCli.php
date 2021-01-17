<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from clients";
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
            <th>Image</th>
            <th>Link</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_clients']?></td>
                <td><?php echo $item['image']?></td>
                <td><?php echo $item['link']?></td>
                <td><?php echo $item['note']?></td>
                <td><?php echo "<a href='./updateCli.php?id_clients=$item[id_clients]'>Update</a>" ?></td>
                <td><?php echo "<a href='./createCli.php'>Create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
    require_once "../../footer.php";
?>