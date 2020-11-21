<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LubukSikaping\TupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tup-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (App::isStakeholder()) { ?>
        <p>
            <?= Html::a('Tambah Tup', ['create'], ['class' => 'btn btn-success']) ?>
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

            // 'id_tup',
            'satker',
            'nomor_surat',
            'is_sekretaris',
            'is_pdms',
            //'keterangan_pdms:ntext',
            //'is_kepala_kppn',
            //'keterangan_kepala_kppn:ntext',
            //'nomor_surat_ap',
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