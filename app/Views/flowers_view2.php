<!DOCTYPE HTML>
<html>
<head></head>
<body>
    <table>
        <tr>
            <td><strong>Nume</strong></td>
            <td><strong>Culoare</strong></td>
            <td><strong>Marime</strong></td>
            <td><strong>Pret</strong></td>

        </tr>
        <?php foreach($flowers as $var){ ?>
        <tr>
            <td><?php echo anchor(array('FlowerController/view/',$var['id']),$var['nume']);?></td>
            <td><?php echo $var['nume'];?></td>
            <td><?php echo $var['culoare'];?></td>
            <td><?php echo $var['marime'];?></td>
            <td><?php echo $var['pret'];?></td>

        </tr>
        <?php }?>
    </table>
</body>
</html>