<?php
/* @var $this DireccionController */
/* @var $model Direccion */

$this->breadcrumbs=array(
	'Direccions'=>array('index'),
	$model->id_direccion,
);

$this->menu=array(
	array('label'=>'List Direccion', 'url'=>array('index')),
	array('label'=>'Create Direccion', 'url'=>array('create')),
	array('label'=>'Update Direccion', 'url'=>array('update', 'id'=>$model->id_direccion)),
	array('label'=>'Delete Direccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_direccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Direccion', 'url'=>array('admin')),
);
?>

<h1>View Direccion #<?php echo $model->id_direccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_direccion',
		'alias_direccion',
		'id_cliente',
		'calle',
		'colonia',
		'municipio',
		'codigo_postal',
		'destinatario',
	),
)); ?>
