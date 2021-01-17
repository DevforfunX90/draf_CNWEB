<?php
    require_once "./header.php";
    require_once "./config/config.php";
    $sql = 'select * from info';
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
            <th>first name</th>
            <th>last name</th>
            <th>birth day</th>
            <th>address</th>
            <th colspan=2>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td scope='row'><?php echo $item['id']?></td>
                <td><?php echo $item['last_name']?></td>
                <td><?php echo $item['first_name']?></td>
                <td><?php echo $item['birthday']?></td>
                <td><?php echo $item['address']?></td>
                <td><?php echo "<a href='./admin/information/updateInfor.php?id=$item[id]'>sua</a>" ?></td>
                <td><?php echo "<a href='./delete.php?id=$item[id]> xoa </a>" ?></td>
                <td><?php echo "<a href='./detail.php??id=$item[id]'>chi tiet</a>" ?></td>

            </tr>
        <?php }?>
    </tbody>
</table>

<a name="" id="" class="btn btn-primary float-right" href="./create.php" role="button">Create</a>

<?php
    require_once "./footer.php";
?>