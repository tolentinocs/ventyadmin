<?php
/* @var $this LineaVentaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Linea Ventas',
);

$this->menu=array(
	array('label'=>'Create LineaVenta', 'url'=>array('create')),
	array('label'=>'Manage LineaVenta', 'url'=>array('admin')),
);
?>

<h1>Linea Ventas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
