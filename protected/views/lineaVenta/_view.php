<?php
/* @var $this LineaVentaController */
/* @var $data LineaVenta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lineaventa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lineaventa), array('view', 'id'=>$data->id_lineaventa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descuento')); ?>:</b>
	<?php echo CHtml::encode($data->descuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folio_venta')); ?>:</b>
	<?php echo CHtml::encode($data->folio_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_producto); ?>
	<br />


</div>