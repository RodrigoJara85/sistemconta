<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Ingreso';
$this->breadcrumbs=array(
	'Ingreso',
);
?>

<blockquote>
	<p>
		Ingrese de Usuario: 
	</p>
</blockquote>

<div class="col-lg-12">
	<div class="col-lg-2">

	</div>
	<div class="col-lg-8">

		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>


				<div class="form-group">
					<div class="col-md-4 col-md-offset-4">
						<h3>Usuario</h3>
						<p>Ingrese las credenciales para acceder:</p>				
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-4 col-md-offset-4">
						<p class="note">Fields with <span class="required">*</span> are required.</p>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-4 col-md-offset-4">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('class'=>'form-control','autocomplete'=>'off')); ?>
					<?php echo $form->error($model,'username'); ?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-4 col-md-offset-4">
						<?php echo $form->labelEx($model,'password'); ?>
						<?php echo $form->passwordField($model,'password',array('class'=>'form-control','autocomplete'=>'off')); ?>
						<?php echo $form->error($model,'password'); ?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-4 col-md-offset-4">
						<div class="row buttons">
							<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-default')); ?>
						</div>
					</div>
				</div>

			<?php $this->endWidget(); ?>
		</div>
	</div>
	<div class="col-lg-2">

	</div>

</div>




</div><!-- form -->
