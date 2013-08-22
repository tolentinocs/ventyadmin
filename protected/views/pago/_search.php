<?php
/* @var $this PagoController */
/* @var $model Pago */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pago'); ?>
		<?php echo $form->textField($model,'id_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_pago'); ?>
		<?php echo $form->textField($model,'fecha_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_pago'); ?>
		<?php echo $form->textField($model,'hora_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe_pago'); ?>
		<?php echo $form->textField($model,'importe_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folio_venta'); ?>
		<?php echo $form->textField($model,'folio_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_pago'); ?>
		<?php echo $form->textField($model,'forma_pago',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_pago'); ?>
		<?php echo $form->textField($model,'tipo_pago',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saldo'); ?>
		<?php echo $form->textField($model,'saldo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->