<?php


namespace app\api\modules\v1\controllers;


use app\models\LubukSikaping\LaporanKeuangan;
use app\models\LubukSikaping\Lpj;

class ApiLaporanKeuanganController extends ControllerBase
{
	public function actionGetOneByIdLaporanKeuangan()
	{
		if (\Yii::$app->request->isPost) {
			$p = \Yii::$app->request->post();

			$lpj = LaporanKeuangan::findOne($p['id']);
			return $this->writeResponse(true, 'Berhasil', $lpj);
		}
	}

	public function actionSave()
	{
		if (\Yii::$app->request->isPost) {
			$roles = \Yii::$app->user->identity->roles;
			$p = \Yii::$app->request->post();
			$laporan_keuangan = LaporanKeuangan::findOne($p['id_l_keuangan']);

			//validasi untuk sekretaris
			if ($roles == 'sekretaris') {
				$laporan_keuangan->setIsSekretaris($p['validasi']);
			}



			if ($laporan_keuangan->save()) {
				return $this->writeResponse(true, "Berhasil, Mengupdate Data <i>{$laporan_keuangan->getNomorSatker()}</i>");
			} else {
				return $this->writeResponse(false, "Tidak Berhasil, Mengupdate Data <i>{$laporan_keuangan->getNomorSatker()}</i>");

			}

		}
	}
}
