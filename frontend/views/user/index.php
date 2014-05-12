<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\UserSearch $searchModel
 */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="user-index">

    <h1><?/*= Html::encode($this->title) */?></h1>

    <?php /*// echo $this->render('_search', ['model' => $searchModel]); */?>

    <p>
        <?/*= Html::a(Yii::t('app', 'Create {modelClass}', [
            'modelClass' => 'User',
        ]), ['create'], ['class' => 'btn btn-success']) */?>
    </p>



</div>-->

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?/*= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'username',
                    'email',
                    // 'email:email',
                    // 'role',
                    // 'status',
                    // 'created_at',
                    // 'updated_at',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); */?>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
        <div class="col-md-3">
            <h3 class="text-center">List of users</h3>
            <ul>
                <?php
                foreach($usernames as $user) { ?>
                    <div>
                        <li><?php  echo "<b>".$user->username."</b>" ?>

                            <a href="/user/view?id=<? echo $user->id ?>">Details</a>
                            <a href="/user/delete?id=<? echo $user->id ?>">Delete</a>
                        </li>


                    </div>

                <?php    }

                ?>


            </ul>
        </div>


    </div>


</div>
<style>
    ul {
        list-style: none;
    }

</style>
