<?php
/* @var $this LineaVentaController */
/* @var $model LineaVenta */

$this->breadcrumbs=array(
	'Linea Ventas'=>array('index'),
	$model->id_lineaventa,
);

$this->menu=array(
	array('label'=>'List LineaVenta', 'url'=>array('index')),
	array('label'=>'Create LineaVenta', 'url'=>array('create')),
	array('label'=>'Update LineaVenta', 'url'=>array('update', 'id'=>$model->id_lineaventa)),
	array('label'=>'Delete LineaVenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lineaventa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LineaVenta', 'url'=>array('admin')),
);
?>

<h1>View LineaVenta #<?php echo $model->id_lineaventa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_lineaventa',
		'descuento',
		'cantidad',
		'importe',
		'folio_venta',
		'id_producto',
	),
)); ?>
