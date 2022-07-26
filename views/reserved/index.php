<?php

use app\models\Pop;
use app\models\Reserved;
use app\models\User;
use app\models\UserService;
use phpDocumentor\Reflection\Types\Integer;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

use function PHPSTORM_META\type;

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
        'filterModel' => $searchModel,
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'user_name',
            'user_family',
            'user_address',
            'service_id',
            'service_name',
            'pop_id',
            'pop_name',
            'pop_type',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $key, $index, $column) {
                    return Url::toRoute([$action, 'id'=>(int)$key['id']]);
                 }
            ],

        ],
    ]); ?>


</div>
