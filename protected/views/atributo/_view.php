<?php
/* @var $this AtributoController */
/* @var $data Atributo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_atributo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_atributo), array('view', 'id'=>$data->id_atributo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_atrib')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_atrib); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_atrib')); ?>:</b>
	<?php echo CHtml::encode($data->valor_atrib); ?>
	<br />


</div>