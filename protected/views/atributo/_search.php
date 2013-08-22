<?php
/* @var $this AtributoController */
/* @var $model Atributo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_atributo'); ?>
		<?php echo $form->textField($model,'id_atributo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_atrib'); ?>
		<?php echo $form->textField($model,'nombre_atrib',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_atrib'); ?>
		<?php echo $form->textField($model,'valor_atrib',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->