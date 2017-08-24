<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tbluseraccount */

$this->title = 'Create User Account';
$this->params['breadcrumbs'][] = ['label' => 'User Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbluseraccount-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
