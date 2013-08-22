<?php
/* @var $this PagoController */
/* @var $data Pago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pago), array('view', 'id'=>$data->id_pago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_pago')); ?>:</b>
	<?php echo CHtml::encode($data->hora_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe_pago')); ?>:</b>
	<?php echo CHtml::encode($data->importe_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folio_venta')); ?>:</b>
	<?php echo CHtml::encode($data->folio_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_pago')); ?>:</b>
	<?php echo CHtml::encode($data->forma_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_pago')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_pago); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('saldo')); ?>:</b>
	<?php echo CHtml::encode($data->saldo); ?>
	<br />

	*/ ?>

</div>