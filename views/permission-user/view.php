<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PermissionUser */
?>
<div class="permission-user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_per',
            'user_id',
            'satker_kppn',
            'created',
        ],
    ]) ?>

</div>
