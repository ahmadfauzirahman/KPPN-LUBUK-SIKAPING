<?php


namespace app\api\modules\v1\controllers;

use app\components\SSP;
use yii\rest\Controller;
use Yii;

class ControllerBase extends Controller
{
	function writeResponse($condition, $msg = null, $data = null)
	{
		$_res = new \stdClass();
		$_res->con = $condition == true ? true : false;
		$_res->msg = $msg;
		$_res->data = $data;
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		// $response = new \Phalcon\Http\Response();
		// return $response->setContent(json_encode($_res));
		return $_res;
	}

	public function writeDataTables($table, $primaryKey, $columns, $where = null)
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$con = array(
			'user' => 'root',
			'pass' => '',
			'db' => 'service-kppn',
			'host' => 'localhost'
		);
		$columnsData = array();
		foreach ($columns as $column) {
			if (isset($column[2])) {
				$columnsData[] = ["db" => $column[1], "dt" => $column[0], "formatter" => $column[2]];
			} else
				$columnsData[] = ["db" => $column[1], "dt" => $column[0]];
		}
		//        $this->view->disable();
		//Set the content of the response
		return SSP::complex($_POST, $con, $table, $primaryKey, $columnsData, null, $where);
	}
}
