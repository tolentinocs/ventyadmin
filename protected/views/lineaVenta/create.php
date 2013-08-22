<?php
/* @var $this LineaVentaController */
/* @var $model LineaVenta */

$this->breadcrumbs=array(
	'Linea Ventas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LineaVenta', 'url'=>array('index')),
	array('label'=>'Manage LineaVenta', 'url'=>array('admin')),
);
?>

<h1>Create LineaVenta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>