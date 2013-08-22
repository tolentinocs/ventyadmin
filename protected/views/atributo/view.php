<?php
/* @var $this AtributoController */
/* @var $model Atributo */

$this->breadcrumbs=array(
	'Atributos'=>array('index'),
	$model->id_atributo,
);

$this->menu=array(
	array('label'=>'List Atributo', 'url'=>array('index')),
	array('label'=>'Create Atributo', 'url'=>array('create')),
	array('label'=>'Update Atributo', 'url'=>array('update', 'id'=>$model->id_atributo)),
	array('label'=>'Delete Atributo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_atributo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atributo', 'url'=>array('admin')),
);
?>

<h1>View Atributo #<?php echo $model->id_atributo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_atributo',
		'nombre_atrib',
		'valor_atrib',
	),
)); ?>
