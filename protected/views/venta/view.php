<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs=array(
	'Ventas'=>array('index'),
	$model->folio_venta,
);

$this->menu=array(
	array('label'=>'List Venta', 'url'=>array('index')),
	array('label'=>'Create Venta', 'url'=>array('create')),
	array('label'=>'Update Venta', 'url'=>array('update', 'id'=>$model->folio_venta)),
	array('label'=>'Delete Venta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->folio_venta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Venta', 'url'=>array('admin')),
);
?>

<h1>View Venta #<?php echo $model->folio_venta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'folio_venta',
		'fecha_exp',
		'hora_exp',
		'id_cliente',
		'id_direccion',
		'fecha_entrega',
		'hora_entrega',
		'tarjeta_regalo',
		'total_venta',
		'id_usuario',
		'estado_venta',
		'id_pago',
		'observaciones',
		'base',
	),
)); ?>
