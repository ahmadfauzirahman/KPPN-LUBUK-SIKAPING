<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LubukSikaping\LaporanKeuanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Keuangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-keuangan-index">


    <?php if (App::isStakeholder()) { ?>
        <p>
            <?= Html::a('Tambah Laporan Keuangan', ['create'], ['class' => 'btn btn-success']) ?>
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

            // 'id_l_keuangan',
            'nomor_satker',
            'nomor_surat',
            [
                'attribute'  => 'is_sekretaris',
                'value' => function ($model) {
                    if ($model->is_sekretaris == 'Yes') {
                        return 'Diterima Oleh Sekretaris';
                    }
                    if ($model->is_sekretaris == 'No') {
                        return 'Ditolak Oleh Sekretaris';
                    }
                }
            ],
            [
                'attribute'  => 'is_vera',
                'value' => function ($model) {
                    if ($model->is_vera == 'Yes') {
                        return 'Diterima Oleh Vera';
                    }
                    if ($model->is_vera == 'No') {
                        return 'Ditolak Oleh Vera';
                    }
                }
            ],
            // 'is_vera',
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