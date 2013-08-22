<?php
/* @var $this VentaController */
/* @var $data Venta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('folio_venta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->folio_venta), array('view', 'id'=>$data->folio_venta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_exp')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_exp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_exp')); ?>:</b>
	<?php echo CHtml::encode($data->hora_exp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_entrega')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_entrega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_entrega')); ?>:</b>
	<?php echo CHtml::encode($data->hora_entrega); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tarjeta_regalo')); ?>:</b>
	<?php echo CHtml::encode($data->tarjeta_regalo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_venta')); ?>:</b>
	<?php echo CHtml::encode($data->total_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_venta')); ?>:</b>
	<?php echo CHtml::encode($data->estado_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pago')); ?>:</b>
	<?php echo CHtml::encode($data->id_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base')); ?>:</b>
	<?php echo CHtml::encode($data->base); ?>
	<br />

	*/ ?>

</div>