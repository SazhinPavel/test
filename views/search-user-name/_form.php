<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model app\models\UserName */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-name-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'created')->textInput()
    ?>

    <?php // $form->field($model, 'ip_id')->textInput()
    ?>

    <?= $form->field($model, 'verifyCode')->widget(Captcha::className()) ?>

    <div class="form-group">
        <?= Html::submitButton('Оставить отзыв', ['class' => 'btn btn-success']) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>