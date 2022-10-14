<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mobil".
 *
 * @property int $id
 * @property string $nama_kendaraan
 */
class Mobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kendaraan'], 'required'],
            [['nama_kendaraan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kendaraan' => 'Nama Kendaraan',
        ];
    }
}
