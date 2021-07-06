<!DOCTYPE HTML>
<html lang="en">
<head></head>
<body>
    <table>
        <tr>
            <td><strong>Nume</strong></td>
            <td><strong>Culoare</strong></td>
            <td><strong>Marime</strong></td>
            <td><strong>Pret</strong></td>
            <td colspan="3" align="center"><strong>Action</strong></td>
        </tr>
        <?php foreach($flowers as $var){ ?>
        <tr>
            <td><?php echo $var['nume'];?></td>
            <td><?php echo $var['culoare'];?></td>
            <td><?php echo $var['marime'];?></td>
            <td><?php echo $var['pret'];?></td>
            <td><?php echo anchor(array('FlowerController/view/',$var['id']),'View');?></td>
            <td><?php echo anchor(array('FlowerController/edit/',$var['id']),'Edit');?></td>
            <td><?php echo anchor(array('FlowerController/delete/',$var['id']),'Delete',array('onclick'=>"return confirm('Do you want to delete this record?')"));?></td>
        </tr>
        <?php }?>
    </table>
    <?php echo anchor(array('FlowerController/insert/'),'Insert a flower'); ?>
</body>
</html>