<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LubukSikaping\KonfirmasiPenerimaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Konfirmasi Penerimaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konfirmasi-penerimaan-index">

    <?php if (App::isStakeholder()) { ?>
        <p>
            <?= Html::a('Tambah Konfirmasi Penerimaan', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } ?>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_konfirmasi_penerimaan',
            'satker',
            'nomor_surat',
            'is_sekretaris',
            'is_bank',
            //'keterangan_bank:ntext',
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
