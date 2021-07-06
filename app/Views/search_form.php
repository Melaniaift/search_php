<?php
helper('form');
echo form_open('SearchController/search');
$search=['name' =>'search',
    'id' =>'text1',
    'value' =>'',
    'maxlength' =>'100',
    'size' =>'30',
];
?>
<?php echo form_label('Search ','text1');?>
<?php echo form_input($search);?>
<br/><br/>
<?php echo form_submit('submit','Search');?>
