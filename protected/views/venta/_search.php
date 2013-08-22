<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'folio_venta'); ?>
		<?php echo $form->textField($model,'folio_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_exp'); ?>
		<?php echo $form->textField($model,'fecha_exp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_exp'); ?>
		<?php echo $form->textField($model,'hora_exp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_direccion'); ?>
		<?php echo $form->textField($model,'id_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_entrega'); ?>
		<?php echo $form->textField($model,'fecha_entrega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_entrega'); ?>
		<?php echo $form->textField($model,'hora_entrega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarjeta_regalo'); ?>
		<?php echo $form->textField($model,'tarjeta_regalo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_venta'); ?>
		<?php echo $form->textField($model,'total_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_venta'); ?>
		<?php echo $form->textField($model,'estado_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pago'); ?>
		<?php echo $form->textField($model,'id_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base'); ?>
		<?php echo $form->textField($model,'base',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->