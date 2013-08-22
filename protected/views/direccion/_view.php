<?php
/* @var $this DireccionController */
/* @var $data Direccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_direccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_direccion), array('view', 'id'=>$data->id_direccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alias_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->alias_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calle')); ?>:</b>
	<?php echo CHtml::encode($data->calle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colonia')); ?>:</b>
	<?php echo CHtml::encode($data->colonia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipio')); ?>:</b>
	<?php echo CHtml::encode($data->municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_postal')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_postal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('destinatario')); ?>:</b>
	<?php echo CHtml::encode($data->destinatario); ?>
	<br />

	*/ ?>

</div>