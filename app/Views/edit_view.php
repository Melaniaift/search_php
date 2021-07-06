<?php
helper('form');
echo form_open('FlowerController/update');
$data1=[ 'name' => 'nume',
'id' => 'text1',
'value' => $flower['nume'],
'maxlength' => '100',
'size' => '30',    
];
$data2=[ 'name' => 'culoare',
'id' => 'text2',
 'value' => $flower['culoare'],
'maxlength' => '100',
'size' => '30',    
];
$data3=[ 'name' => 'marime',
'id' => 'text3',
'value' => $flower['marime'],
'maxlength' => '100',
'size' => '30',    
];
$data4=[ 'name' => 'pret',
'id' => 'text4',
'value' => $flower['pret'],
'maxlength' => '100',
'size' => '30',    
];
$data5=[ 'name' => 'id',
'id' => 'id',
'type' => 'hidden',
'value' => $flower['id'],
'maxlength' => '100',
'size' => '30',    
];
?>
<?php echo form_input($data5); ?>
<table>
    <tr>
        <td><?php echo form_label('Nume','text1'); ?></td>
        <td><?php echo form_input($data1); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Culoare','text2'); ?></td>
        <td><?php echo form_input($data2); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Marime','text3'); ?></td>
        <td><?php echo form_input($data3); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Pret','text4'); ?></td>
        <td><?php echo form_input($data4); ?></td>
    </tr>
</table>
<?php echo form_submit('submit','update'); ?>