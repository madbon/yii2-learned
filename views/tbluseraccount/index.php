<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbluseraccountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbluseraccount-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Account', ['create'], ['class' => 'btn btn-success']) ?> 
        <!-- ['create'] // this is the redirect page or view name-->
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'], // these are the numbers # of rows

            'USER_ID',
            'FIRST_NAME',
            'MIDDLE_NAME',
            'LAST_NAME',
            'USERNAME',
            
            // 'PASSWORD',
            // 'IS_ACTIVE',

            ['class' => 'yii\grid\ActionColumn'], // these are the button for view, edit and delete

        ],
    ]); ?>
</div>
