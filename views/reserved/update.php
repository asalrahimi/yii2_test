<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reserved */

$this->title = 'Update Reserved: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reserveds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reserved-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'update'=> $update,
        'pops'=>$pops

    ]) ?>

</div>
