<?php

use app\models\Reserved;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reserveds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reserved-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reserved', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'user_name',
            'user_family',
            'user_address',
            //'service_id',
            //'service_name',
            //'service_type',
            //'pop_id',
            //'pop_name',
            //'pop_type',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Reserved $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
