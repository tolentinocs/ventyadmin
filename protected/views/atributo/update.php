<?php
/* @var $this AtributoController */
/* @var $model Atributo */

$this->breadcrumbs=array(
	'Atributos'=>array('index'),
	$model->id_atributo=>array('view','id'=>$model->id_atributo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atributo', 'url'=>array('index')),
	array('label'=>'Create Atributo', 'url'=>array('create')),
	array('label'=>'View Atributo', 'url'=>array('view', 'id'=>$model->id_atributo)),
	array('label'=>'Manage Atributo', 'url'=>array('admin')),
);
?>

<h1>Update Atributo <?php echo $model->id_atributo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>