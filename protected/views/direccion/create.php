<?php
/* @var $this DireccionController */
/* @var $model Direccion */

$this->breadcrumbs=array(
	'Direccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Direccion', 'url'=>array('index')),
	array('label'=>'Manage Direccion', 'url'=>array('admin')),
);
?>

<h1>Create Direccion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>