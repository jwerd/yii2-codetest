<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\People */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="people-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true, 'placeholder'=>'First Name']) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true, 'placeholder'=>'Last Name']) ?>

    <?= $form->field($model, 'dob')->textInput(['maxlength' => true, 'placeholder'=> 'YYYY-MM-DD']) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
