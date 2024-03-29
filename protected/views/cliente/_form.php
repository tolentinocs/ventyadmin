<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel1'); ?>
		<?php echo $form->textField($model,'tel1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tel1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel2'); ?>
		<?php echo $form->textField($model,'tel2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tel2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel3'); ?>
		<?php echo $form->textField($model,'tel3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tel3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->