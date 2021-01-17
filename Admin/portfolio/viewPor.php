<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from portfolio";
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
            <th>Desscription</th>
            <th>Image</th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_portfolio']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['description']?></td>
                <td><?php echo $item['image']?></td>
                <td><?php echo $item['link']?></td>
                <td><?php echo "<a href='./updatePor.php?id_portfolio=$item[id_portfolio]'>Update</a>" ?></td>
                <td><?php echo "<a href='./deletePor.php?id_portfolio=$item[id_portfolio]'>Delete</a>" ?></td>
                <td><?php echo "<a href='./createPor.php'>Create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
    require_once "../../footer.php";
?>