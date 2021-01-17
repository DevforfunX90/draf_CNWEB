<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from introduce";
    $rec = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View_Introduce</title>
</head>
<body>
<table class="table" border=1>
    <thead>
        <tr>
            
            <th>id</th>
            <th>Content</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_controuce']?></td>
                <td><?php echo $item['content']?></td>
                <td><?php echo $item['note']?></td>
                <td><?php echo "<a href='./updateIntro.php?id_controuce=$item[id_controuce]'>Update</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
    require_once "../../footer.php";
?>