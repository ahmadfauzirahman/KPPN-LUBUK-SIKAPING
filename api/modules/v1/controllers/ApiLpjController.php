<?php


namespace app\api\modules\v1\controllers;


use app\models\LubukSikaping\Lpj;

class ApiLpjController extends ControllerBase
{

	public function actionList()
	{
	}

	public function actionSave()
	{
		
	}

	public function actionValidasi()
	{
	}

	public function actionGetOneByIdLpj()
	{
		if (\Yii::$app->request->isPost) {
			$p = \Yii::$app->request->post();

			$lpj = Lpj::findOne($p['id']);
			return $this->writeResponse(true, 'Berhasil', $lpj);
		}
	}

	// public function actionSave()
	// {
	// 	if (\Yii::$app->request->isPost) {
	// 		$roles = \Yii::$app->user->identity->roles;

	// 		$p = \Yii::$app->request->post();
	// 		$lpj = Lpj::findOne($p['id_lpj']);


	// 		//validasi untuk sekretaris
	// 		if ($roles == 'sekretaris') {
	// 			$lpj->setIsSekretaris($p['validasi']);
	// 		}

	// 		//validasi untuk fera
	// 		if ($roles == 'fo_vera') {
	// 			if ($p['validasi'] == 'Reject') {
	// 				if (isEmpty($p['alasan_penolakan'])) {
	// 					return $this->writeResponse(false, "Alasan Penolakan Tidak Boleh Kosong");
	// 				}
	// 			}
	// 			$lpj->setIsVera($p['validasi']);
	// 			$lpj->setKeteranganVera($p['alasan_penolakan']);
	// 		}

	// 		//validasi untuk  kepala seksi fera
	// 		if ($roles == 'kepala_seksi_vera') {
	// 			if ($p['validasi'] == 'Reject') {
	// 				if (isEmpty($p['alasan_penolakan'])) {
	// 					return $this->writeResponse(false, "Alasan Penolakan Tidak Boleh Kosong");
	// 				}
	// 			}
	// 			$lpj->setIsKepala($p['validasi']);
	// 			$lpj->setKeteranganKepala($p['alasan_penolakan']);
	// 		}

	// 		if ($lpj->save()) {
	// 			return $this->writeResponse(true, "Berhasil, Mengupdate Data <i>{$lpj->getNomorSatker()}</i>");
	// 		} else {
	// 			return $this->writeResponse(false, "Tidak Berhasil, Mengupdate Data <i>{$lpj->getNomorSatker()}</i>");
	// 		}
	// 	}
	// }
}
