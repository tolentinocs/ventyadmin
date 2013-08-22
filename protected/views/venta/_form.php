<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'venta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_exp'); ?>
		<?php echo $form->textField($model,'fecha_exp'); ?>
		<?php echo $form->error($model,'fecha_exp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_exp'); ?>
		<?php echo $form->textField($model,'hora_exp'); ?>
		<?php echo $form->error($model,'hora_exp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_direccion'); ?>
		<?php echo $form->textField($model,'id_direccion'); ?>
		<?php echo $form->error($model,'id_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_entrega'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    			'model' => $model,
    			'attribute' => 'fecha_entrega',
    			'language' => 'es',
    			'options' => array(
    				'dateFormat' => 'yy-mm-dd',
    				),
    			'htmlOptions' => array(
        			'size' => '10',         // textField size
        			'maxlength' => '10',    // textField maxlength
    			),
			));
		?>
		<?php echo $form->error($model,'fecha_entrega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_entrega'); ?>
		<?php echo $form->textField($model,'hora_entrega'); ?>
		<?php echo $form->error($model,'hora_entrega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarjeta_regalo'); ?>
		<?php echo $form->textField($model,'tarjeta_regalo'); ?>
		<?php echo $form->error($model,'tarjeta_regalo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_venta'); ?>
		<?php echo $form->textField($model,'total_venta'); ?>
		<?php echo $form->error($model,'total_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_venta'); ?>
		<?php echo $form->textField($model,'estado_venta'); ?>
		<?php echo $form->error($model,'estado_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pago'); ?>
		<?php echo $form->textField($model,'id_pago'); ?>
		<?php echo $form->error($model,'id_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base'); ?>
		<?php echo $form->textField($model,'base',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'base'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php echo date('Y-m-d'); ?>