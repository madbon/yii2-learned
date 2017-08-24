<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbluseraccount */

$this->title = 'Update Tbluseraccount: ' . $model->USER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tbluseraccounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->USER_ID, 'url' => ['view', 'id' => $model->USER_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbluseraccount-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
