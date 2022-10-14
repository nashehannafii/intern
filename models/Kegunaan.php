<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kegunaan".
 *
 * @property int $id
 * @property string $jenis_kendaraan
 */
class Kegunaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegunaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_kendaraan'], 'required'],
            [['jenis_kendaraan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_kendaraan' => 'Jenis Kendaraan',
        ];
    }
}
