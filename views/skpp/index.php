<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LubukSikaping\SkppSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Skpp';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (App::isStakeholder()) { ?>
        <p>
            <?= Html::a('Tambah Skpp', ['create'], ['class' => 'btn btn-success']) ?>
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

            // 'id_skpp',
            'nomor_skpp',
            'nomor_satker',
            [
                'attribute' => 'is_mo',
                'value' => function ($model) {
                    if ($model->is_mo == 'Send') {
                        return 'Setuju Seksi PDMS';
                    }

                    if ($model->is_mo == 'No') {
                        return 'Tidak Setuju Seksi PDMS';

                    }
                }
            ],
            'keterangan_tolak_mo:ntext',
            [
                'attribute' => 'is_kasi_pdms',
                'value' => function ($model) {
                    if ($model->is_kasi_pdms == 'Send') {
                        return 'Setuju Kasi PDMS';
                    }

                    if ($model->is_kasi_pdms == 'No') {
                        return 'Tidak Setuju Kasi PDMS';

                    }
                }
            ],
            'keterangan_tolak_pdms:ntext',
            //'tanggal_created',

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