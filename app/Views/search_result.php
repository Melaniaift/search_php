<?php
$table=new\CodeIgniter\View\Table();
$table->setHeading('Id','Nume','Culoare','Marime','Pret');
foreach($r as $key=>$val){
    $table->addRow($val['id'],$val['nume'],$val['culoare'],$val['marime'],$val['pret']);
}
echo $table->generate();