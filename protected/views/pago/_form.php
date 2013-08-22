<?php
/* @var $this PagoController */
/* @var $model Pago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pago-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_pago'); ?>
		<?php echo $form->textField($model,'fecha_pago'); ?>
		<?php echo $form->error($model,'fecha_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_pago'); ?>
		<?php echo $form->textField($model,'hora_pago'); ?>
		<?php echo $form->error($model,'hora_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importe_pago'); ?>
		<?php echo $form->textField($model,'importe_pago'); ?>
		<?php echo $form->error($model,'importe_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folio_venta'); ?>
		<?php echo $form->textField($model,'folio_venta'); ?>
		<?php echo $form->error($model,'folio_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_pago'); ?>
		<?php echo $form->textField($model,'forma_pago',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'forma_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_pago'); ?>
		<?php echo $form->textField($model,'tipo_pago',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipo_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldo'); ?>
		<?php echo $form->textField($model,'saldo'); ?>
		<?php echo $form->error($model,'saldo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->