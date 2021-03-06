<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Review */

$this->title = 'Update Review: ' . ' ' . $model->reviewID;
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reviewID, 'url' => ['view', 'id' => $model->reviewID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="review-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
