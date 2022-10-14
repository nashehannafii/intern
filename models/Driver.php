<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $id
 * @property string $nama
 * @property int $umur
 * @property string $jenis_kelamin
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'umur', 'jenis_kelamin'], 'required'],
            [['umur'], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['jenis_kelamin'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'umur' => 'Umur',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }
}
