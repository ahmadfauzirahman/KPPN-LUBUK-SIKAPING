<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LubukSikaping\LpjSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lpj-index">


    <?php if (App::isStakeholder()) { ?>
        <p>
            <?= Html::a('Tambah LPJ', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } ?>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_lpj',
            'nomor_satker',
            'nomor_surat',
            [
                'attribute' => 'is_sekretaris',
                'value' => function ($model) {
                    if ($model->is_sekretaris == 'Send') {
                        return 'Setuju Sekretaris';
                    }

                    if ($model->is_sekretaris == 'No') {
                        return 'Tidak Setuju Sekretaris';
                    }
                }
            ],

            [
                'attribute' => 'is_vera',
                'value' => function ($model) {
                    if ($model->is_vera == 'Send') {
                        return 'Setuju Vera';
                    }

                    if ($model->is_vera == 'No') {
                        return 'Tidak Setuju Vera';
                    }
                }
            ],

            [
                'attribute' => 'is_kepala',
                'value' => function ($model) {
                    if ($model->is_kepala == 'Send') {
                        return 'Setuju Kepala KPPN';
                    }

                    if ($model->is_kepala == 'No') {
                        return 'Tidak Setuju Kepala KPPN';
                    }
                }
            ],

            //'keterangan_vera:ntext',
            //'keterangan_kepala:ntext',
            //'tanggal_daftar',

            [
                'class' => 'app\components\ActionColumn',
            ],
        ],
        'pager' => [
            'class' => 'app\components\GridPager',
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>