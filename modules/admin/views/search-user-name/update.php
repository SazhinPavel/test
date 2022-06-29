<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserName */

$this->title = 'Редактирование отзыва гостя с логином : ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Гостевая книга', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Гость с логином ' . $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="user-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>