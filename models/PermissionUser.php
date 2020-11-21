<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "permission_user".
 *
 * @property int $id_per
 * @property int $user_id
 * @property string $satker_kppn
 * @property string $created
 */
class PermissionUser extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'permission_user';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['user_id', 'satker_kppn'], 'required'],
			[['user_id'], 'integer'],
			[['created'], 'safe'],
			[['satker_kppn'], 'string', 'max' => 30],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id_per' => 'Id Per',
			'user_id' => 'Nama User',
			'satker_kppn' => 'Satker Kppn',
			'created' => 'Created',
		];
	}
}
