<?php

namespace app\controllers;

use app\models\Log;
use app\models\LoginForm;
use yii\web\Controller;
use Yii;

class MasukController extends Controller
{

	public $layout = 'main-login';

	public function actionIndex()
	{

		// var_dump(md5(123456789));
		// exit();
		if (!Yii::$app->user->isGuest) {
			return $this->goBack();
		}
		if (Yii::$app->request->isPost) {
			$p = Yii::$app->request->post('Masuk');
//			var_dump($p);
//			exit();
			$a = [
				'kodeAkun' => ((isset($p[0])) ? $p[0] : ''),
				'kataSandi' => ((isset($p[1])) ? $p[1] : ''),
				'ingat' => ((isset($p[2])) ? true : false),
			];

			$form = new LoginForm();
			$form->attributes = $a;

//            var_dump($form->attributes);
//            exit();
			if (!$form->login()) {
				$this->layout = 'main-login';
				Yii::$app->session->setFlash('warning', $form->getErrors());
				return $this->render('index');
//                echo  'asdsada';
			} else {
//                echo 'sadasda';
//                exit();
				return $this->redirect(['site/index']);
			}

		} else {
			$this->layout = 'main-login';
			return $this->render('index');
		}
	}

}
