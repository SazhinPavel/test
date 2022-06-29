<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserName */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Гостевая книга', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Отзыв гостя с логином ' . $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-name-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email:email',
            'content:ntext',
            'created',
        ],
    ]) ?>


    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])
        ?>
        <?= Html::a('Удалить отзыв', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверен что хотите удалить этот отзыв?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>


</div>