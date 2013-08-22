<?php
/* @var $this LineaVentaController */
/* @var $model LineaVenta */

$this->breadcrumbs=array(
	'Linea Ventas'=>array('index'),
	$model->id_lineaventa=>array('view','id'=>$model->id_lineaventa),
	'Update',
);

$this->menu=array(
	array('label'=>'List LineaVenta', 'url'=>array('index')),
	array('label'=>'Create LineaVenta', 'url'=>array('create')),
	array('label'=>'View LineaVenta', 'url'=>array('view', 'id'=>$model->id_lineaventa)),
	array('label'=>'Manage LineaVenta', 'url'=>array('admin')),
);
?>

<h1>Update LineaVenta <?php echo $model->id_lineaventa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>