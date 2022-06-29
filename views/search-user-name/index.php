<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchUserName */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы гостей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-name-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'email',
            'created',
            'content:ntext',
            // ['class' => 'yii\grid\ActionColumn'],
        ],

    ]);

    ?>

    <p>
        <?php echo Html::a('Оставить отзыв', ['create'], ['class' => 'btn btn-success'])
        ?>
    </p>
</div>