<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from testimonials";
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
            <th>Note</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_testimonials']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['note']?></td>
                <td><img src="../../img/<?php echo $item['image']?>"></td>
                <td><?php echo "<a href='./updateTes.php?id_clients=$item[id_testimonials]'>Update</a>" ?></td>
                <td><?php echo "<a href='./createTes.php'>Create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
    require_once "../../footer.php";
?>