<?php
/* @var $this AtributoController */
/* @var $model Atributo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'atributo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_atrib'); ?>
		<?php echo $form->textField($model,'nombre_atrib',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_atrib'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_atrib'); ?>
		<?php echo $form->textField($model,'valor_atrib',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'valor_atrib'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->